<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // 1. Validate the form inputs
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // 2. Send the email (Replace with your actual company recipient email)
        Mail::to('hello@clouddextrasolution.com')->send(new ContactFormMail($validatedData));

        // 3. Go back to the form with a success alert
        return back()->with('success', 'Thank you! Your message has been sent successfully.');
    }
}