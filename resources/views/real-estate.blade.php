@extends('layouts.app')

@section('title', 'Real Estate Virtual Assistants')
@section('meta_description', 'Virtual assistants for US real estate agents: social media, backend operations, CRM, cold calling, MLS listings, transaction coordination, video editing and email marketing. Month-to-month support from Cloud Dextra LLC.')

@php
    $services = config('real-estate-services');
    $core = array_filter($services, fn ($s) => $s['core']);
    $more = array_filter($services, fn ($s) => ! $s['core']);

    $steps = [
        ['title' => 'Free strategy call', 'text' => 'A short call to understand your business, your tools and where your time goes.'],
        ['title' => 'Task plan', 'text' => 'We map the tasks to hand off, the hours you need and how we will report progress.'],
        ['title' => 'Assistant assigned', 'text' => 'We match you with an assistant for the role and set up access to your tools securely.'],
        ['title' => 'Ongoing check-ins', 'text' => 'Regular updates and reviews so the work keeps improving as your business grows.'],
    ];

    $faqs = [
        ['q' => 'What can a real estate virtual assistant do for me?', 'a' => 'Most agents start with admin, lead follow-up, transaction coordination, listing support or marketing. We help you pick the tasks that free up the most time first.'],
        ['q' => 'Will the assistant work inside my CRM and tools?', 'a' => 'Yes. Your assistant works inside the systems you already use. Tell us your tools on the strategy call and we will confirm fit before you start.'],
        ['q' => 'Can the assistant call or text my leads?', 'a' => 'Yes, following US rules. We only text people who have opted in, honor STOP requests, and check numbers against the Do Not Call list before cold calling.'],
        ['q' => 'How do you keep my client data and logins safe?', 'a' => 'Access is limited to what the assistant needs for your tasks, and you can remove it at any time. We are happy to sign an NDA.'],
        ['q' => 'What hours will my assistant work?', 'a' => 'We schedule your assistant to cover your US business hours, so they are available when you and your clients are.'],
        ['q' => 'Who is Cloud Dextra?', 'a' => 'Cloud Dextra LLC is a US company registered in New Mexico, with a delivery team in Pakistan. You get one point of contact and a dedicated assistant.'],
    ];
@endphp

@section('content')
<div x-data="{ openFaq: null }" class="relative pb-20">

    <!-- Hero -->
    <section class="relative py-20 sm:py-28 md:py-36 flex items-center justify-center rounded-3xl sm:rounded-[3rem] overflow-hidden mb-20 shadow-2xl mx-0 sm:mx-6 bg-slate-900">
        <div class="absolute inset-0 bg-gradient-to-br from-slate-900 via-slate-900 to-blue-950"></div>
        <div class="relative z-10 w-full max-w-5xl mx-auto px-6 text-center">
            <span class="text-blue-400 font-bold tracking-widest uppercase text-xs sm:text-sm mb-6 inline-block border border-blue-400/30 bg-blue-400/10 px-4 py-2 rounded-full">
                For Real Estate Agents &amp; Teams
            </span>
            <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold text-white mb-6 tracking-tight">
                Real Estate <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-cyan-300">Virtual Assistants</span>
            </h1>
            <p class="text-base sm:text-xl text-slate-300 max-w-3xl mx-auto leading-relaxed mb-10">
                Hand off social media, admin, CRM, calls, listings and paperwork to a dedicated assistant, so you can spend your time with clients.
            </p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="{{ route('contact') }}" class="w-full sm:w-auto px-8 py-4 rounded-xl bg-blue-600 hover:bg-blue-500 text-white font-bold transition shadow-lg">
                    Book a Free Strategy Call
                </a>
                <a href="tel:{{ config('company.phone.tel') }}" class="w-full sm:w-auto px-8 py-4 rounded-xl border border-slate-600 text-white font-bold hover:border-cyan-400 hover:text-cyan-300 transition">
                    Call {{ config('company.phone.display') }}
                </a>
            </div>
        </div>
    </section>

    <!-- Core services -->
    <section class="max-w-7xl mx-auto px-6 mb-24">
        <div class="text-center max-w-3xl mx-auto mb-10">
            <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 mb-4">Core Real Estate Services</h2>
            <p class="text-slate-600 text-lg">Pick one service or combine several. Click any service to see exactly what is included.</p>
        </div>

        <nav aria-label="Services on this page" class="flex flex-wrap justify-center gap-2 mb-12">
            @foreach ($core as $slug => $service)
                <a href="{{ route('real-estate.service', $slug) }}" class="px-4 py-2 rounded-full bg-slate-100 text-slate-700 text-sm font-semibold hover:bg-blue-600 hover:text-white transition">{{ $service['title'] }}</a>
            @endforeach
        </nav>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            @foreach ($core as $slug => $service)
                @include('partials.re-service-card', ['slug' => $slug, 'service' => $service])
            @endforeach
        </div>
    </section>

    <!-- More services -->
    <section class="bg-slate-50 py-20 mb-24">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-12">
                <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 mb-4">More Ways We Can Help</h2>
                <p class="text-slate-600 text-lg">Websites, search visibility and anything else your business needs. If it can be done remotely, your assistant can help.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                @foreach ($more as $slug => $service)
                    @include('partials.re-service-card', ['slug' => $slug, 'service' => $service])
                @endforeach
            </div>
            <div class="mt-8 bg-slate-900 rounded-3xl p-8 md:p-10 flex flex-col md:flex-row md:items-center md:justify-between gap-6 text-white">
                <div>
                    <h3 class="text-xl font-bold mb-2">Need something not listed?</h3>
                    <p class="text-slate-300">Tell us where your week goes. We will suggest the first tasks to hand off.</p>
                </div>
                <a href="{{ route('contact') }}" class="flex-shrink-0 px-6 py-3 rounded-xl bg-blue-600 hover:bg-blue-500 font-bold transition text-center">Get a Free Task Plan</a>
            </div>
        </div>
    </section>

    <!-- How it works -->
    <section class="max-w-7xl mx-auto px-6 mb-24">
        <div class="text-center max-w-3xl mx-auto mb-14">
            <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 mb-4">How It Works</h2>
        </div>
        <ol class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach ($steps as $i => $step)
                <li class="bg-slate-50 rounded-3xl p-8 border border-slate-100">
                    <span class="w-10 h-10 rounded-full bg-blue-600 text-white font-bold flex items-center justify-center mb-4">{{ $i + 1 }}</span>
                    <h3 class="font-bold text-slate-900 mb-2">{{ $step['title'] }}</h3>
                    <p class="text-sm text-slate-600">{{ $step['text'] }}</p>
                </li>
            @endforeach
        </ol>
    </section>

    <!-- FAQ -->
    <section class="max-w-4xl mx-auto px-6 mb-24">
        <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 mb-10 text-center">Real Estate VA Questions</h2>
        <div class="space-y-4">
            @foreach ($faqs as $i => $faq)
                <div class="bg-white rounded-2xl border border-slate-200">
                    <button type="button" class="w-full flex items-center justify-between gap-4 text-left p-6 font-bold text-slate-900"
                            @click="openFaq = openFaq === {{ $i }} ? null : {{ $i }}" :aria-expanded="openFaq === {{ $i }}">
                        <span>{{ $faq['q'] }}</span>
                        <svg class="w-5 h-5 flex-shrink-0 transition-transform" :class="openFaq === {{ $i }} && 'rotate-180'" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div x-show="openFaq === {{ $i }}" x-cloak class="px-6 pb-6 text-slate-600">{{ $faq['a'] }}</div>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Final CTA -->
    <section class="max-w-5xl mx-auto px-6">
        <div class="rounded-3xl bg-gradient-to-r from-blue-600 to-cyan-500 p-10 md:p-14 text-center text-white shadow-2xl">
            <h2 class="text-3xl md:text-4xl font-extrabold mb-4">Get Your Time Back This Month</h2>
            <p class="text-blue-50 text-lg mb-8">Book a free strategy call and leave with a clear list of tasks to delegate.</p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="{{ route('contact') }}" class="w-full sm:w-auto px-8 py-4 rounded-xl bg-white text-blue-700 font-bold hover:bg-blue-50 transition">Book a Free Strategy Call</a>
                <a href="tel:{{ config('company.phone.tel') }}" class="w-full sm:w-auto px-8 py-4 rounded-xl border border-white/60 font-bold hover:bg-white/10 transition">Call {{ config('company.phone.display') }}</a>
            </div>
        </div>
    </section>
</div>

<script type="application/ld+json">
{!! json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'FAQPage',
    'mainEntity' => array_map(fn ($f) => [
        '@type' => 'Question',
        'name' => $f['q'],
        'acceptedAnswer' => ['@type' => 'Answer', 'text' => $f['a']],
    ], $faqs),
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
</script>
@endsection
