<a href="{{ route('real-estate.service', $slug) }}"
   class="group bg-white rounded-3xl border border-slate-100 shadow-lg shadow-slate-200/50 overflow-hidden flex flex-col hover:-translate-y-1 hover:shadow-2xl hover:border-blue-200 transition duration-300">
    @include('partials.re-mockups', ['type' => $service['mock']])
    <div class="p-8 flex flex-col flex-1">
        <h3 class="text-2xl font-bold text-slate-900 mb-2 group-hover:text-blue-700 transition">{{ $service['title'] }}</h3>
        <p class="text-slate-600 mb-5">{{ $service['short'] }}</p>
        <ul class="grid grid-cols-1 sm:grid-cols-2 gap-x-4 gap-y-2 text-sm text-slate-700 mb-6">
            @foreach (array_slice($service['includes'], 0, 4) as $item)
                <li class="flex items-start gap-2">
                    <svg class="w-5 h-5 text-blue-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    <span>{{ $item }}</span>
                </li>
            @endforeach
        </ul>
        <span class="mt-auto text-blue-600 font-bold inline-flex items-center gap-2">
            View service details
            <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
        </span>
    </div>
</a>
