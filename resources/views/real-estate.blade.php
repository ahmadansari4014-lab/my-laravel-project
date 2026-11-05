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
<div x-data="{ openFaq: null }" class="relative bg-slate-950 text-slate-300 overflow-hidden">

    {{-- Background decoration --}}
    <div aria-hidden="true" class="pointer-events-none absolute inset-0">
        <div class="absolute inset-0 opacity-[0.07] [background-image:linear-gradient(to_right,#94a3b8_1px,transparent_1px),linear-gradient(to_bottom,#94a3b8_1px,transparent_1px)] [background-size:56px_56px] [mask-image:radial-gradient(ellipse_at_top,black_30%,transparent_75%)]"></div>
        <div class="absolute -top-40 left-1/2 -translate-x-1/2 w-[900px] h-[600px] rounded-full bg-blue-600/25 blur-[140px]"></div>
        <div class="absolute top-[45%] -right-40 w-[500px] h-[500px] rounded-full bg-cyan-500/10 blur-[120px]"></div>
        <div class="absolute bottom-40 -left-40 w-[500px] h-[500px] rounded-full bg-blue-700/15 blur-[120px]"></div>
    </div>

    <!-- Hero -->
    <section class="relative max-w-5xl mx-auto px-6 pt-24 pb-20 md:pt-32 md:pb-28 text-center">
        <span class="reveal text-cyan-300 font-bold tracking-widest uppercase text-xs sm:text-sm mb-6 inline-block border border-cyan-400/30 bg-cyan-400/10 px-4 py-2 rounded-full">
            For Real Estate Agents &amp; Teams
        </span>
        <h1 class="reveal text-4xl sm:text-5xl md:text-7xl font-extrabold text-white mb-6 tracking-tight" style="--reveal-delay:100ms">
            Real Estate <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-cyan-300">Virtual Assistants</span>
        </h1>
        <p class="reveal text-base sm:text-xl text-slate-400 max-w-3xl mx-auto leading-relaxed mb-10" style="--reveal-delay:200ms">
            Hand off social media, admin, CRM, calls, listings and paperwork to a dedicated assistant, so you can spend your time with clients.
        </p>
        <div class="reveal flex flex-col sm:flex-row items-center justify-center gap-4" style="--reveal-delay:300ms">
            <a href="{{ route('contact') }}" class="w-full sm:w-auto px-8 py-4 rounded-xl bg-gradient-to-r from-blue-600 to-cyan-500 hover:from-blue-500 hover:to-cyan-400 text-white font-bold transition shadow-lg shadow-blue-600/30">
                Book a Free Strategy Call
            </a>
            <a href="tel:{{ config('company.phone.tel') }}" class="w-full sm:w-auto px-8 py-4 rounded-xl border border-slate-700 bg-slate-900/60 text-white font-bold hover:border-cyan-400 hover:text-cyan-300 transition">
                Call {{ config('company.phone.display') }}
            </a>
        </div>
    </section>

    <!-- Core services -->
    <section class="relative max-w-7xl mx-auto px-6 pb-24">
        <div class="text-center max-w-3xl mx-auto mb-10 reveal">
            <span class="text-cyan-400 font-bold uppercase tracking-widest text-xs">What we handle</span>
            <h2 class="text-3xl md:text-5xl font-extrabold text-white mt-3 mb-4">Core Real Estate Services</h2>
            <p class="text-slate-400 text-lg">Pick one service or combine several. Click any service to see exactly what is included.</p>
        </div>

        <nav aria-label="Services on this page" class="reveal flex flex-wrap justify-center gap-2 mb-14">
            @foreach ($core as $slug => $service)
                <a href="{{ route('real-estate.service', $slug) }}" class="px-4 py-2 rounded-full border border-slate-700 bg-slate-900/70 text-slate-300 text-sm font-semibold hover:border-cyan-400 hover:text-white transition">{{ $service['title'] }}</a>
            @endforeach
        </nav>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            @foreach ($core as $slug => $service)
                @include('partials.re-service-card', ['slug' => $slug, 'service' => $service, 'delay' => ($loop->index % 2) * 120])
            @endforeach
        </div>
    </section>

    <!-- More services -->
    <section class="relative border-y border-slate-800/80 bg-slate-900/40 py-24">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-12 reveal">
                <span class="text-cyan-400 font-bold uppercase tracking-widest text-xs">And much more</span>
                <h2 class="text-3xl md:text-5xl font-extrabold text-white mt-3 mb-4">More Ways We Can Help</h2>
                <p class="text-slate-400 text-lg">Websites, search visibility and anything else your business needs. If it can be done remotely, your assistant can help.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                @foreach ($more as $slug => $service)
                    @include('partials.re-service-card', ['slug' => $slug, 'service' => $service, 'delay' => ($loop->index % 2) * 120])
                @endforeach
            </div>
            <div class="reveal mt-10 rounded-3xl border border-slate-700/70 bg-gradient-to-r from-slate-900 to-blue-950/60 p-8 md:p-10 flex flex-col md:flex-row md:items-center md:justify-between gap-6">
                <div>
                    <h3 class="text-xl font-bold text-white mb-2">Need something not listed?</h3>
                    <p class="text-slate-400">Tell us where your week goes. We will suggest the first tasks to hand off.</p>
                </div>
                <a href="{{ route('contact') }}" class="flex-shrink-0 px-6 py-3 rounded-xl bg-white text-slate-900 hover:bg-cyan-100 font-bold transition text-center">Get a Free Task Plan</a>
            </div>
        </div>
    </section>

    <!-- How it works -->
    <section class="relative max-w-7xl mx-auto px-6 py-24">
        <div class="text-center max-w-3xl mx-auto mb-14 reveal">
            <span class="text-cyan-400 font-bold uppercase tracking-widest text-xs">Simple start</span>
            <h2 class="text-3xl md:text-5xl font-extrabold text-white mt-3">How It Works</h2>
        </div>
        <ol class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach ($steps as $i => $step)
                <li class="reveal relative rounded-3xl p-8 border border-slate-800 bg-slate-900/60 hover:border-blue-500/50 transition" style="--reveal-delay:{{ $i * 120 }}ms">
                    <span class="w-11 h-11 rounded-xl bg-gradient-to-br from-blue-600 to-cyan-500 text-white font-bold flex items-center justify-center mb-5 shadow-lg shadow-blue-600/30">{{ $i + 1 }}</span>
                    <h3 class="font-bold text-white mb-2">{{ $step['title'] }}</h3>
                    <p class="text-sm text-slate-400">{{ $step['text'] }}</p>
                </li>
            @endforeach
        </ol>
    </section>

    <!-- FAQ -->
    <section class="relative max-w-4xl mx-auto px-6 pb-24">
        <h2 class="reveal text-3xl md:text-5xl font-extrabold text-white mb-12 text-center">Real Estate VA Questions</h2>
        <div class="space-y-4">
            @foreach ($faqs as $i => $faq)
                <div class="reveal rounded-2xl border border-slate-800 bg-slate-900/60" style="--reveal-delay:{{ $i * 60 }}ms">
                    <button type="button" class="w-full flex items-center justify-between gap-4 text-left p-6 font-bold text-white"
                            @click="openFaq = openFaq === {{ $i }} ? null : {{ $i }}" :aria-expanded="openFaq === {{ $i }}">
                        <span>{{ $faq['q'] }}</span>
                        <svg class="w-5 h-5 flex-shrink-0 text-cyan-400 transition-transform" :class="openFaq === {{ $i }} && 'rotate-180'" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div x-show="openFaq === {{ $i }}" x-cloak class="px-6 pb-6 text-slate-400">{{ $faq['a'] }}</div>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Final CTA -->
    <section class="relative max-w-5xl mx-auto px-6 pb-24">
        <div class="reveal relative overflow-hidden rounded-3xl bg-gradient-to-r from-blue-600 to-cyan-500 p-10 md:p-14 text-center text-white shadow-2xl shadow-blue-900/50">
            <div aria-hidden="true" class="absolute -top-20 -right-20 w-72 h-72 rounded-full bg-white/10 blur-2xl"></div>
            <h2 class="relative text-3xl md:text-4xl font-extrabold mb-4">Get Your Time Back This Month</h2>
            <p class="relative text-blue-50 text-lg mb-8">Book a free strategy call and leave with a clear list of tasks to delegate.</p>
            <div class="relative flex flex-col sm:flex-row items-center justify-center gap-4">
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
