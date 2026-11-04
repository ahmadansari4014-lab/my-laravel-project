<?php

namespace App\Http\Controllers;

use App\Models\ContactSubmission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'service' => 'nullable|string|max:255',
            'message' => 'nullable|string',
            'industry' => 'nullable|string|max:255',
            'bottleneck' => 'nullable|string|max:255',
            'team_size' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:50',
            'sms_consent' => 'sometimes|accepted',
        ]);

        // Consent only counts when the box was ticked AND a number was given.
        // The stored wording comes from config, not the request, so the record
        // shows exactly what the visitor saw.
        $smsConsent = $request->boolean('sms_consent') && ! empty($validated['phone']);

        try {
            $service = $validated['service'] ?? 'Operations Audit';
            $message = $validated['message'] ?? 'Homepage operations audit request';

            ContactSubmission::create([
                'sms_consent' => $smsConsent,
                'sms_consent_at' => $smsConsent ? now() : null,
                'sms_consent_ip' => $smsConsent ? $request->ip() : null,
                'sms_consent_url' => $smsConsent ? substr(url()->previous(), 0, 2048) : null,
                'sms_consent_text' => $smsConsent ? config('company.sms_consent_text') : null,
                'name' => $validated['name'],
                'email' => $validated['email'],
                'service' => $service,
                'message' => $message,
                'industry' => $validated['industry'] ?? null,
                'bottleneck' => $validated['bottleneck'] ?? null,
                'team_size' => $validated['team_size'] ?? null,
                'phone' => $validated['phone'] ?? null,
            ]);

            $emailContent = "
                You have received a new message from the Cloud Dextra website.\n\n
                Name: {$validated['name']}\n
                Email: {$validated['email']}\n
                Service Requested: {$service}\n
                Details:\n{$message}\n
                Industry: " . ($validated['industry'] ?? 'Not provided') . "\n
                Main Bottleneck: " . ($validated['bottleneck'] ?? 'Not provided') . "\n
                Team Size: " . ($validated['team_size'] ?? 'Not provided') . "\n
                Phone: " . ($validated['phone'] ?? 'Not provided') . "\n
                SMS Consent: " . ($smsConsent ? 'YES (opted in ' . now()->toDateTimeString() . ' UTC)' : 'NO - do not text this lead') . "\n
            ";

            Mail::raw($emailContent, function ($message) use ($validated, $service) {
                $message->to('info@clouddextra.com')
                    ->subject('New Website Lead: ' . $service)
                    ->replyTo($validated['email']);
            });

            return back()->with('success', 'Thank you! Your message has been sent successfully.');
        } catch (\Exception $e) {
            Log::error('Contact submission email failed after database save.', [
                'email' => $validated['email'],
                'exception' => $e,
            ]);

            return back()->with(
                'error',
                'The notification email could not be sent. We will still follow up with you.'
            );
        }
    }
}
