<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // 1. Validate the input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'service' => 'required|string',
            'message' => 'required|string',
        ]);

        // 2. Format the email
        $emailContent = "
            You have received a new message from the Cloud Dextra website.\n\n
            Name: {$validated['name']}\n
            Email: {$validated['email']}\n
            Service Requested: {$validated['service']}\n
            Details:\n{$validated['message']}
        ";

        // 3. TRY to send the email, CATCH the error if Hostinger blocks it
        try {
            Mail::raw($emailContent, function ($message) use ($validated) {
                $message->to('info@clouddextra.com')
                        ->subject('New Website Lead: ' . $validated['service'])
                        ->replyTo($validated['email']); 
            });

            return back()->with('success', 'Thank you! Your message has been sent successfully.');
            
        } catch (\Exception $e) {
            // If it fails, bring the exact error message back to the screen
            return back()->with('error', 'Mail Error: ' . $e->getMessage());
        }
    }
}