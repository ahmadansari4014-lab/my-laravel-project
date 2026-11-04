@extends('layouts.app')

@section('title', 'SMS Terms')
@section('meta_description', 'Terms for text messages sent by Cloud Dextra LLC, including message types, frequency, rates and how to opt out.')

@section('content')
<div class="bg-slate-50 py-20">
    <div class="max-w-4xl mx-auto px-6">
        <div class="bg-white rounded-3xl shadow-xl shadow-slate-200/50 p-10 md:p-16 border border-slate-100">
            <h1 class="text-4xl font-extrabold text-slate-900 mb-6">SMS Terms</h1>
            <p class="text-sm font-bold text-slate-400 uppercase tracking-widest mb-10">Last Updated: November 4, 2026</p>

            <div class="prose prose-slate max-w-none text-slate-600 space-y-6">
                <p>These SMS Terms apply to text messages sent by {{ config('company.legal_name') }} ("{{ config('company.brand') }}," "we," "us") to people who opt in to receive them.</p>

                <h3 class="text-2xl font-bold text-slate-900 mt-10 mb-4">1. Program Description</h3>
                <p>If you consent to receive conversational and informational SMS from {{ config('company.legal_name') }}, you agree to receive text messages related to your inquiry, such as replies to your questions, scheduling and confirmation of calls or audits, appointment reminders, and updates about the services you requested.</p>

                <h3 class="text-2xl font-bold text-slate-900 mt-10 mb-4">2. How You Opt In</h3>
                <p>You opt in by checking the SMS consent box on a form on our website, or by texting us first. The consent box is optional and is never pre-checked. Consent to receive text messages is not a condition of any purchase.</p>

                <h3 class="text-2xl font-bold text-slate-900 mt-10 mb-4">3. Message Frequency and Cost</h3>
                <p>Message frequency may vary. Message and data rates may apply, depending on your mobile carrier and plan.</p>

                <h3 class="text-2xl font-bold text-slate-900 mt-10 mb-4">4. How to Opt Out</h3>
                <p>Reply <strong>STOP</strong> to any message to stop receiving texts. We will send one final message confirming that you have been unsubscribed, and you will receive no further texts unless you opt in again.</p>

                <h3 class="text-2xl font-bold text-slate-900 mt-10 mb-4">5. Help</h3>
                <p>Reply <strong>HELP</strong> to any message for help, or contact us at <a href="tel:{{ config('company.phone.tel') }}" class="text-blue-600 underline">{{ config('company.phone.display') }}</a> or <a href="mailto:{{ config('company.email') }}" class="text-blue-600 underline">{{ config('company.email') }}</a>.</p>

                <h3 class="text-2xl font-bold text-slate-900 mt-10 mb-4">6. Carriers</h3>
                <p>Mobile carriers are not liable for delayed or undelivered messages.</p>

                <h3 class="text-2xl font-bold text-slate-900 mt-10 mb-4">7. Privacy</h3>
                <p>No mobile opt-in or text message consent will be shared with third parties or affiliates for marketing purposes. Visit our <a href="{{ route('privacy') }}" class="text-blue-600 underline">Privacy Policy</a> to see how we handle your information, and our <a href="{{ route('terms') }}" class="text-blue-600 underline">Terms of Service</a>.</p>

                <h3 class="text-2xl font-bold text-slate-900 mt-10 mb-4">8. Contact</h3>
                <address class="not-italic">
                    <p class="font-bold">{{ config('company.legal_name') }}</p>
                    <p>{{ config('company.address.street') }}, {{ config('company.address.suite') }}, {{ config('company.address.city') }}, {{ config('company.address.state') }} {{ config('company.address.zip') }}</p>
                </address>
            </div>
        </div>
    </div>
</div>
@endsection
