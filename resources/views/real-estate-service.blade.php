@extends('layouts.app')

@section('title', $service['title'] . ' for Real Estate Agents')
@section('meta_description', $service['short'] . ' ' . config('company.legal_name') . ' provides virtual assistants for US real estate agents.')

@section('content')
<div class="relative bg-slate-950 text-slate-300 overflow-hidden pb-24">
    <div aria-hidden="true" class="pointer-events-none absolute inset-0">
        <div class="absolute inset-0 opacity-[0.07] [background-image:linear-gradient(to_right,#94a3b8_1px,transparent_1px),linear-gradient(to_bottom,#94a3b8_1px,transparent_1px)] [background-size:56px_56px] [mask-image:radial-gradient(ellipse_at_top,black_30%,transparent_75%)]"></div>
        <div class="absolute -top-40 right-0 w-[700px] h-[500px] rounded-full bg-blue-600/25 blur-[140px]"></div>
        <div class="absolute top-[55%] -left-40 w-[500px] h-[500px] rounded-full bg-cyan-500/10 blur-[120px]"></div>
    </div>

    <!-- Breadcrumb -->
    <nav aria-label="Breadcrumb" class="relative max-w-7xl mx-auto px-6 pt-10 text-sm text-slate-500">
        <a href="{{ route('real-estate') }}" class="hover:text-cyan-300">Real Estate Services</a>
        <span class="mx-2">/</span>
        <span class="text-slate-200 font-semibold">{{ $service['title'] }}</span>
    </nav>

    <!-- Hero -->
    <section class="relative max-w-7xl mx-auto px-6 pt-10 pb-24 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
        <div class="reveal">
            <span class="text-cyan-400 font-bold tracking-widest uppercase text-xs">Real Estate Virtual Assistants</span>
            <h1 class="text-4xl md:text-6xl font-extrabold text-white mt-3 mb-5 tracking-tight">{{ $service['title'] }}</h1>
            <p class="text-lg text-slate-400 leading-relaxed mb-8">{{ $service['description'] }}</p>
            <div class="flex flex-col sm:flex-row gap-4">
                <a href="{{ route('contact') }}" class="px-8 py-4 rounded-xl bg-gradient-to-r from-blue-600 to-cyan-500 hover:from-blue-500 hover:to-cyan-400 text-white font-bold transition text-center shadow-lg shadow-blue-600/30">Book a Free Strategy Call</a>
                <a href="tel:{{ config('company.phone.tel') }}" class="px-8 py-4 rounded-xl border border-slate-700 bg-slate-900/60 text-white font-bold hover:border-cyan-400 hover:text-cyan-300 transition text-center">Call {{ config('company.phone.display') }}</a>
            </div>
        </div>
        <div class="reveal rounded-3xl overflow-hidden shadow-2xl shadow-blue-950/60 border border-slate-700" style="--reveal-delay:150ms">
            @include('partials.re-mockups', ['type' => $service['mock'], 'size' => 'lg'])
        </div>
    </section>

    <!-- What's included -->
    <section class="relative border-y border-slate-800/80 bg-slate-900/40 py-24 mb-24">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="reveal text-3xl md:text-5xl font-extrabold text-white mb-12 text-center">What's Included</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($service['includes'] as $item)
                    <div class="reveal rounded-2xl border border-slate-800 bg-slate-900/70 p-6 flex items-start gap-3 hover:border-blue-500/50 transition" style="--reveal-delay:{{ $loop->index * 80 }}ms">
                        <span class="w-8 h-8 rounded-lg bg-gradient-to-br from-blue-600 to-cyan-500 text-white flex items-center justify-center flex-shrink-0">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
                        </span>
                        <span class="font-semibold text-slate-200 pt-1">{{ $item }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Client videos (Video Editing page) -->
    @if (! empty($service['videos']))
        <section class="relative max-w-7xl mx-auto px-6 mb-24">
            <h2 class="reveal text-3xl md:text-5xl font-extrabold text-white mb-12 text-center">Videos We Have Edited</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($service['videos'] as $video)
                    <figure class="reveal rounded-2xl overflow-hidden border border-slate-800 bg-slate-900/70 shadow-lg">
                        <div class="aspect-video bg-slate-900">
                            @if (! empty($video['url']))
                                <iframe src="{{ $video['url'] }}" title="{{ $video['title'] }}" class="w-full h-full" loading="lazy" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture; fullscreen" allowfullscreen></iframe>
                            @else
                                <video src="{{ asset($video['file']) }}" class="w-full h-full" controls preload="metadata"></video>
                            @endif
                        </div>
                        <figcaption class="p-4 font-semibold text-white">{{ $video['title'] }}</figcaption>
                    </figure>
                @endforeach
            </div>
        </section>
    @endif

    <!-- How it works -->
    <section class="relative max-w-7xl mx-auto px-6 mb-24">
        <h2 class="reveal text-3xl md:text-5xl font-extrabold text-white mb-12 text-center">How It Works</h2>
        <ol class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach ([
                ['Free strategy call', 'We learn your business, your tools and what you want to hand off.'],
                ['Task plan', 'We agree the tasks, hours and how we report progress.'],
                ['Assistant assigned', 'Your assistant gets secure access to the tools needed.'],
                ['Ongoing check-ins', 'Regular updates and reviews as your business grows.'],
            ] as $i => [$title, $text])
                <li class="reveal rounded-3xl p-8 border border-slate-800 bg-slate-900/60 hover:border-blue-500/50 transition" style="--reveal-delay:{{ $i * 120 }}ms">
                    <span class="w-11 h-11 rounded-xl bg-gradient-to-br from-blue-600 to-cyan-500 text-white font-bold flex items-center justify-center mb-5 shadow-lg shadow-blue-600/30">{{ $i + 1 }}</span>
                    <h3 class="font-bold text-white mb-2">{{ $title }}</h3>
                    <p class="text-sm text-slate-400">{{ $text }}</p>
                </li>
            @endforeach
        </ol>
    </section>

    <!-- Other services -->
    <section class="relative max-w-7xl mx-auto px-6 mb-24 reveal">
        <h2 class="text-2xl md:text-3xl font-extrabold text-white mb-8 text-center">Other Services</h2>
        <div class="flex flex-wrap justify-center gap-2">
            @foreach (config('real-estate-services') as $otherSlug => $other)
                @continue($otherSlug === $slug)
                <a href="{{ route('real-estate.service', $otherSlug) }}" class="px-4 py-2 rounded-full border border-slate-700 bg-slate-900/70 text-slate-300 text-sm font-semibold hover:border-cyan-400 hover:text-white transition">{{ $other['title'] }}</a>
            @endforeach
        </div>
    </section>

    <!-- CTA -->
    <section class="relative max-w-5xl mx-auto px-6">
        <div class="reveal rounded-3xl bg-gradient-to-r from-blue-600 to-cyan-500 p-10 md:p-14 text-center text-white shadow-2xl shadow-blue-900/50">
            <h2 class="text-3xl md:text-4xl font-extrabold mb-4">Ready to Hand Off {{ $service['title'] }}?</h2>
            <p class="text-blue-50 text-lg mb-8">Book a free strategy call and get a clear plan for your business.</p>
            <a href="{{ route('contact') }}" class="inline-block px-8 py-4 rounded-xl bg-white text-blue-700 font-bold hover:bg-blue-50 transition">Book a Free Strategy Call</a>
        </div>
    </section>
</div>

<script type="application/ld+json">
{!! json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'Service',
    'name' => $service['title'],
    'description' => $service['description'],
    'serviceType' => $service['title'],
    'audience' => ['@type' => 'Audience', 'audienceType' => 'Real estate agents'],
    'provider' => ['@type' => 'Organization', 'name' => config('company.legal_name'), 'telephone' => config('company.phone.tel'), 'url' => url('/')],
    'areaServed' => 'US',
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
</script>
@endsection
