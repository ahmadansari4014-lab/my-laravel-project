@extends('layouts.app')

@section('title', 'Privacy Policy')
@section('meta_description', 'How Cloud Dextra LLC collects, uses and protects personal information, including mobile numbers and SMS consent.')

@section('content')
<div class="bg-slate-50 py-20">
    <div class="max-w-4xl mx-auto px-6">
        <div class="bg-white rounded-3xl shadow-xl shadow-slate-200/50 p-10 md:p-16 border border-slate-100">
            <h1 class="text-4xl font-extrabold text-slate-900 mb-6">Privacy Policy</h1>
            <p class="text-sm font-bold text-slate-400 uppercase tracking-widest mb-10">Last Updated: November 4, 2026</p>

            <div class="prose prose-slate max-w-none text-slate-600 space-y-6">
                <p>This Privacy Policy explains how {{ config('company.legal_name') }}, {{ config('company.entity_description') }} ("{{ config('company.brand') }}," "we," "us," or "our"), collects, uses, shares and protects information when you visit clouddextra.com, contact us, or use our virtual assistance, digital marketing, website and business administration services.</p>

                <h3 class="text-2xl font-bold text-slate-900 mt-10 mb-4">1. Information We Collect</h3>
                <ul class="list-disc pl-5 space-y-2">
                    <li><strong>Contact information:</strong> your name, business email address, phone number, company details, and anything else you choose to send us through our forms, email, phone or messaging.</li>
                    <li><strong>Mobile information and SMS consent:</strong> if you give us your mobile number and agree to receive text messages, we record your number, the date and time of your consent, the page where you gave it, your IP address and the consent wording you agreed to.</li>
                    <li><strong>Service data:</strong> credentials, CRM data, financial records and other operational information that clients provide to us so we can perform contracted services.</li>
                    <li><strong>Usage data:</strong> technical information collected automatically, such as IP address, browser type, device and pages visited, used to operate and improve the website.</li>
                </ul>

                <h3 class="text-2xl font-bold text-slate-900 mt-10 mb-4">2. How We Use Your Information</h3>
                <ul class="list-disc pl-5 space-y-2">
                    <li>To respond to your inquiry, schedule calls and provide customer support.</li>
                    <li>To deliver and manage the services in our agreements with clients.</li>
                    <li>To send administrative messages such as service updates, appointment reminders and invoices.</li>
                    <li>To send text messages only where you have given consent (see Section 4).</li>
                    <li>To maintain, secure and improve our website and operations.</li>
                    <li>To comply with legal obligations.</li>
                </ul>

                <h3 class="text-2xl font-bold text-slate-900 mt-10 mb-4">3. How We Share Information</h3>
                <p>We do not sell, rent or trade your personal information. We share information only with service providers who help us run our business (for example, website hosting, email, CRM and telephone or messaging providers), only as needed to provide our services, and when required by law or to protect our legal rights.</p>

                <h3 class="text-2xl font-bold text-slate-900 mt-10 mb-4">4. Text Messaging (SMS)</h3>
                <p>If you opt in, we may send you conversational and informational text messages about your inquiry, scheduled calls and our services. Consent to receive text messages is not a condition of any purchase. Message frequency may vary. Message and data rates may apply. You can reply <strong>STOP</strong> at any time to opt out, or <strong>HELP</strong> for help. See our <a href="{{ route('sms-terms') }}" class="text-blue-600 underline">SMS Terms</a> for details.</p>
                <p class="font-semibold text-slate-800">No mobile opt-in or text message consent will be shared with third parties or affiliates for marketing purposes.</p>
                <p>Text messaging originator opt-in data and consent are excluded from any information sharing described in Section 3, other than with the telecommunications providers that deliver the messages.</p>

                <h3 class="text-2xl font-bold text-slate-900 mt-10 mb-4">5. Data Security</h3>
                <p>We use reasonable technical and organizational measures to protect the information we hold. Access to client systems is limited to authorized personnel who need it to perform the services. No method of transmission or storage is completely secure, so we cannot guarantee absolute security.</p>

                <h3 class="text-2xl font-bold text-slate-900 mt-10 mb-4">6. Data Retention</h3>
                <p>We keep personal information only as long as needed for the purposes in this policy, to meet our contractual and legal obligations, and to resolve disputes. Records of SMS consent and opt-outs are kept for as long as needed to show compliance.</p>

                <h3 class="text-2xl font-bold text-slate-900 mt-10 mb-4">7. Your Choices</h3>
                <p>You can ask us to access, correct or delete your personal information, or to stop contacting you, by emailing <a href="mailto:{{ config('company.email') }}" class="text-blue-600 underline">{{ config('company.email') }}</a>. You can opt out of text messages at any time by replying STOP, and out of marketing emails by using the unsubscribe link or contacting us.</p>

                <h3 class="text-2xl font-bold text-slate-900 mt-10 mb-4">8. Children's Privacy</h3>
                <p>Our website and services are intended for businesses and are not directed to children under 13. We do not knowingly collect personal information from children.</p>

                <h3 class="text-2xl font-bold text-slate-900 mt-10 mb-4">9. Changes to This Policy</h3>
                <p>We may update this policy from time to time. The "Last Updated" date above shows when it was last changed.</p>

                <h3 class="text-2xl font-bold text-slate-900 mt-10 mb-4">10. Contact Us</h3>
                <address class="not-italic">
                    <p class="font-bold">{{ config('company.legal_name') }}</p>
                    <p>{{ config('company.address.street') }}, {{ config('company.address.suite') }}</p>
                    <p>{{ config('company.address.city') }}, {{ config('company.address.state') }} {{ config('company.address.zip') }}, {{ config('company.address.country') }}</p>
                    <p>Phone: <a href="tel:{{ config('company.phone.tel') }}" class="text-blue-600 underline">{{ config('company.phone.display') }}</a></p>
                    <p>Email: <a href="mailto:{{ config('company.email') }}" class="text-blue-600 underline">{{ config('company.email') }}</a></p>
                </address>
            </div>
        </div>
    </div>
</div>
@endsection
