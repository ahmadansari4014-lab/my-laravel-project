{{--
    Illustrative UI mock-ups for the real estate service cards.
    Pure HTML/CSS (no images to load). All names and data are fictional
    examples, and each mock-up is labelled "Example".
--}}
<div aria-hidden="true" class="relative {{ ($size ?? 'md') === 'lg' ? 'h-60 md:h-64' : 'h-56' }} overflow-hidden bg-gradient-to-br from-slate-800 via-slate-900 to-blue-950 px-6 pt-6 select-none">
    <div class="absolute -bottom-16 left-1/2 -translate-x-1/2 w-3/4 h-32 rounded-full bg-blue-500/30 blur-3xl"></div>
    <span class="absolute top-3 right-3 z-10 text-[10px] font-bold uppercase tracking-widest text-slate-300 bg-slate-950/70 border border-slate-700 px-2 py-0.5 rounded-full">Example</span>

    {{-- Browser-style window --}}
    <div class="relative h-full rounded-t-xl bg-white shadow-2xl shadow-black/50 border border-slate-600 border-b-0 overflow-hidden transition-transform duration-500 group-hover:-translate-y-1">
        <div class="flex items-center gap-1.5 px-3 py-2 border-b border-slate-100 bg-slate-50">
            <span class="w-2 h-2 rounded-full bg-red-300"></span>
            <span class="w-2 h-2 rounded-full bg-amber-300"></span>
            <span class="w-2 h-2 rounded-full bg-emerald-300"></span>
            <span class="ml-2 text-[10px] font-semibold text-slate-500">
                @switch($type)
                    @case('calendar') Calendar &middot; This week @break
                    @case('crm') CRM &middot; Buyer pipeline @break
                    @case('form') Website &middot; Home valuation form @break
                    @case('transaction') Transaction &middot; 123 Oak St @break
                    @case('listing') Listing &middot; Active @break
                    @case('social') Social &middot; Scheduled post @break
                    @case('dialer') Power dialer &middot; Expired list @break
                    @case('video') Video editor &middot; Listing tour @break
                    @case('email') Email &middot; Monthly newsletter @break
                    @case('website') yourrealty.com @break
                    @case('seo') Google search @break
                    @case('gmb') Google Business Profile @break
                @endswitch
            </span>
        </div>

        <div class="p-3 text-[10px] leading-tight text-slate-600">
            @switch($type)

                {{-- Calendar week view --}}
                @case('calendar')
                    <div class="grid grid-cols-5 gap-1.5">
                        @foreach (['Mon', 'Tue', 'Wed', 'Thu', 'Fri'] as $day)
                            <div class="text-center font-bold text-slate-400">{{ $day }}</div>
                        @endforeach
                        <div class="space-y-1">
                            <div class="rounded bg-blue-100 text-blue-700 p-1">10:00 Showing</div>
                            <div class="rounded bg-emerald-100 text-emerald-700 p-1">2:00 Call</div>
                        </div>
                        <div class="space-y-1">
                            <div class="rounded bg-amber-100 text-amber-700 p-1">9:30 Inspection</div>
                        </div>
                        <div class="space-y-1">
                            <div class="rounded bg-blue-100 text-blue-700 p-1">11:00 Showing</div>
                            <div class="rounded bg-blue-100 text-blue-700 p-1">1:30 Showing</div>
                            <div class="rounded bg-purple-100 text-purple-700 p-1">4:00 Listing appt</div>
                        </div>
                        <div class="space-y-1">
                            <div class="rounded bg-emerald-100 text-emerald-700 p-1">10:00 Closing</div>
                        </div>
                        <div class="space-y-1">
                            <div class="rounded bg-slate-100 p-1">Open house prep</div>
                            <div class="rounded bg-blue-100 text-blue-700 p-1">3:00 Showing</div>
                        </div>
                    </div>
                    @break

                {{-- CRM pipeline board --}}
                @case('crm')
                    <div class="grid grid-cols-3 gap-2">
                        @foreach ([
                            ['New', 'bg-blue-500', ['Jordan P.', 'Alicia R.', 'Ben T.']],
                            ['Contacted', 'bg-amber-500', ['Maria L.', 'Chris D.']],
                            ['Appointment', 'bg-emerald-500', ['Sam K.']],
                        ] as [$stage, $dot, $people])
                            <div class="rounded-lg bg-slate-50 p-1.5">
                                <div class="flex items-center gap-1 font-bold text-slate-700 mb-1.5">
                                    <span class="w-1.5 h-1.5 rounded-full {{ $dot }}"></span>{{ $stage }}
                                    <span class="ml-auto text-slate-400">{{ count($people) }}</span>
                                </div>
                                @foreach ($people as $person)
                                    <div class="rounded bg-white border border-slate-100 p-1.5 mb-1 shadow-sm">
                                        <div class="font-semibold text-slate-800">{{ $person }}</div>
                                        <div class="text-slate-400">Buyer &middot; Web lead</div>
                                    </div>
                                @endforeach
                            </div>
                        @endforeach
                    </div>
                    @break

                {{-- Lead capture form with incoming-lead toast --}}
                @case('form')
                    <div class="grid grid-cols-5 gap-3">
                        <div class="col-span-3 space-y-1.5">
                            <div class="font-bold text-slate-800 text-[11px]">What's my home worth?</div>
                            <div class="rounded border border-slate-200 px-2 py-1 text-slate-400">Full name</div>
                            <div class="rounded border border-slate-200 px-2 py-1 text-slate-400">Email</div>
                            <div class="rounded border border-slate-200 px-2 py-1 text-slate-400">Phone</div>
                            <div class="rounded border border-slate-200 px-2 py-1 text-slate-400">Property address</div>
                            <div class="rounded bg-blue-600 text-white text-center font-bold py-1">Get my free valuation</div>
                        </div>
                        <div class="col-span-2 flex flex-col gap-1.5 pt-4">
                            <div class="rounded-lg bg-emerald-50 border border-emerald-200 p-1.5">
                                <div class="font-bold text-emerald-700">New lead</div>
                                <div class="text-slate-600">Seller &middot; just now</div>
                            </div>
                            <div class="rounded-lg bg-blue-50 border border-blue-200 p-1.5">
                                <div class="font-bold text-blue-700">Follow-up sent</div>
                                <div class="text-slate-600">Within 5 min</div>
                            </div>
                            <div class="rounded-lg bg-slate-50 border border-slate-200 p-1.5">
                                <div class="font-bold text-slate-700">Added to CRM</div>
                            </div>
                        </div>
                    </div>
                    @break

                {{-- Contract-to-close checklist --}}
                @case('transaction')
                    <div class="mb-2">
                        <div class="flex justify-between font-semibold text-slate-700 mb-1"><span>Contract to close</span><span>60%</span></div>
                        <div class="h-1.5 rounded-full bg-slate-100"><div class="h-1.5 w-3/5 rounded-full bg-blue-600"></div></div>
                    </div>
                    <ul class="space-y-1.5">
                        @foreach ([
                            ['Earnest money received', true],
                            ['Inspection scheduled', true],
                            ['Appraisal ordered', true],
                            ['Loan approval', false],
                            ['Final walk-through', false],
                        ] as [$item, $done])
                            <li class="flex items-center gap-1.5">
                                <span class="w-3.5 h-3.5 rounded-full flex items-center justify-center {{ $done ? 'bg-emerald-500 text-white' : 'border border-slate-300' }}">
                                    @if ($done)<svg class="w-2.5 h-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>@endif
                                </span>
                                <span class="{{ $done ? 'text-slate-400 line-through' : 'text-slate-700 font-semibold' }}">{{ $item }}</span>
                            </li>
                        @endforeach
                    </ul>
                    @break

                {{-- Listing card --}}
                @case('listing')
                    <div class="flex gap-3">
                        <div class="w-2/5 h-28 rounded-lg bg-gradient-to-br from-sky-200 via-sky-100 to-emerald-100 relative overflow-hidden">
                            <svg class="absolute bottom-0 left-1/2 -translate-x-1/2 w-20 text-white" viewBox="0 0 64 48" fill="currentColor"><path d="M32 4 4 26h8v20h40V26h8L32 4z"/><rect x="27" y="32" width="10" height="14" class="text-sky-300" fill="currentColor"/></svg>
                            <span class="absolute top-1 left-1 rounded bg-emerald-500 text-white font-bold px-1.5 py-0.5">Active</span>
                        </div>
                        <div class="flex-1 space-y-1">
                            <div class="text-[13px] font-extrabold text-slate-900">$489,000</div>
                            <div class="font-semibold text-slate-700">123 Oak Street</div>
                            <div class="text-slate-400">3 bd &middot; 2 ba &middot; 1,850 sq ft</div>
                            <div class="pt-1 space-y-1">
                                <div class="rounded bg-slate-50 p-1">Photos scheduled &middot; Tue</div>
                                <div class="rounded bg-slate-50 p-1">4 showings &middot; feedback sent</div>
                            </div>
                        </div>
                    </div>
                    @break

                {{-- Social post preview --}}
                @case('social')
                    <div class="flex gap-3">
                        <div class="w-2/5 h-28 rounded-lg bg-gradient-to-br from-blue-600 to-cyan-500 flex flex-col items-center justify-center text-white text-center p-2">
                            <div class="text-[9px] font-bold tracking-widest uppercase opacity-80">Just Listed</div>
                            <div class="text-[13px] font-extrabold">123 Oak St</div>
                            <div class="mt-1 text-[9px] opacity-80">3 bd &middot; 2 ba</div>
                        </div>
                        <div class="flex-1 space-y-1.5">
                            <div class="flex items-center gap-1.5">
                                <span class="w-5 h-5 rounded-full bg-slate-200"></span>
                                <span class="font-semibold text-slate-800">Your Realty</span>
                            </div>
                            <div class="h-1.5 rounded bg-slate-100 w-full"></div>
                            <div class="h-1.5 rounded bg-slate-100 w-4/5"></div>
                            <div class="h-1.5 rounded bg-slate-100 w-3/5"></div>
                            <div class="flex gap-1 pt-1">
                                <span class="rounded bg-blue-50 text-blue-700 px-1.5 py-0.5 font-semibold">Instagram</span>
                                <span class="rounded bg-blue-50 text-blue-700 px-1.5 py-0.5 font-semibold">Facebook</span>
                            </div>
                            <div class="rounded bg-emerald-50 text-emerald-700 font-semibold px-1.5 py-0.5 inline-block">Scheduled &middot; Thu 6:00 PM</div>
                        </div>
                    </div>
                    @break

                {{-- Power dialer --}}
                @case('dialer')
                    <div class="grid grid-cols-5 gap-3">
                        <div class="col-span-2 rounded-lg bg-slate-900 text-white p-2 flex flex-col items-center justify-center text-center">
                            <div class="w-8 h-8 rounded-full bg-emerald-500 flex items-center justify-center mb-1">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M6.6 10.8a15.1 15.1 0 006.6 6.6l2.2-2.2a1 1 0 011-.25 11.4 11.4 0 003.6.57 1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1c0 1.25.2 2.45.57 3.6a1 1 0 01-.25 1z"/></svg>
                            </div>
                            <div class="font-bold">Connected</div>
                            <div class="text-slate-400">Linda W. &middot; 02:14</div>
                        </div>
                        <div class="col-span-3 space-y-1">
                            @foreach ([['Linda W.', 'Talking', 'bg-emerald-100 text-emerald-700'], ['Mark S.', 'Appointment set', 'bg-blue-100 text-blue-700'], ['Tom H.', 'Callback Fri', 'bg-amber-100 text-amber-700'], ['Kim J.', 'No answer', 'bg-slate-100 text-slate-500'], ['Ray P.', 'DNC - skipped', 'bg-red-50 text-red-600']] as [$n, $st, $c])
                                <div class="flex items-center justify-between rounded border border-slate-100 px-1.5 py-1">
                                    <span class="font-semibold text-slate-700">{{ $n }}</span>
                                    <span class="rounded px-1 {{ $c }}">{{ $st }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    @break

                {{-- Video editor timeline --}}
                @case('video')
                    <div class="rounded-lg bg-slate-900 h-20 flex items-center justify-center relative mb-2 overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-br from-sky-700/60 to-emerald-700/40"></div>
                        <div class="relative w-8 h-8 rounded-full bg-white/90 flex items-center justify-center">
                            <svg class="w-3.5 h-3.5 text-slate-900 ml-0.5" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                        </div>
                        <span class="absolute bottom-1 left-1.5 text-white font-bold">123 Oak St &middot; Tour</span>
                        <span class="absolute bottom-1 right-1.5 text-white/80">00:42 / 01:30</span>
                    </div>
                    <div class="space-y-1">
                        <div class="flex gap-0.5 h-3"><span class="w-1/4 rounded-sm bg-blue-400"></span><span class="w-1/3 rounded-sm bg-blue-500"></span><span class="w-1/5 rounded-sm bg-blue-400"></span><span class="flex-1 rounded-sm bg-blue-500"></span></div>
                        <div class="flex gap-0.5 h-2"><span class="w-1/3 ml-6 rounded-sm bg-purple-400"></span><span class="w-1/4 ml-4 rounded-sm bg-purple-400"></span></div>
                        <div class="h-2 rounded-sm bg-emerald-300"></div>
                    </div>
                    @break

                {{-- Email newsletter --}}
                @case('email')
                    <div class="grid grid-cols-5 gap-3">
                        <div class="col-span-3 rounded-lg border border-slate-200 overflow-hidden">
                            <div class="bg-blue-600 text-white font-bold px-2 py-1.5">Your Monthly Market Update</div>
                            <div class="p-2 space-y-1">
                                <div class="h-10 rounded bg-gradient-to-br from-sky-200 to-emerald-100"></div>
                                <div class="h-1.5 rounded bg-slate-100"></div>
                                <div class="h-1.5 rounded bg-slate-100 w-4/5"></div>
                                <div class="inline-block rounded bg-blue-600 text-white px-2 py-0.5 font-semibold">See new listings</div>
                            </div>
                        </div>
                        <div class="col-span-2 space-y-1.5 pt-1">
                            <div class="rounded-lg bg-slate-50 p-1.5"><div class="text-slate-400">Sent to</div><div class="font-bold text-slate-800">Past clients</div></div>
                            <div class="rounded-lg bg-slate-50 p-1.5"><div class="text-slate-400">Opens</div><div class="h-1.5 mt-1 rounded-full bg-slate-200"><div class="h-1.5 w-3/5 rounded-full bg-emerald-500"></div></div></div>
                            <div class="rounded-lg bg-slate-50 p-1.5"><div class="text-slate-400">Clicks</div><div class="h-1.5 mt-1 rounded-full bg-slate-200"><div class="h-1.5 w-1/4 rounded-full bg-blue-500"></div></div></div>
                        </div>
                    </div>
                    @break

                {{-- Agent website --}}
                @case('website')
                    <div class="rounded-lg overflow-hidden border border-slate-100">
                        <div class="flex items-center justify-between px-2 py-1 bg-white"><span class="font-extrabold text-slate-800">Your Realty</span><span class="text-slate-400">Buy &middot; Sell &middot; About &middot; Contact</span></div>
                        <div class="h-16 bg-gradient-to-br from-slate-800 to-blue-900 text-white flex flex-col items-center justify-center">
                            <div class="font-bold text-[11px]">Find your next home</div>
                            <div class="mt-1 w-2/3 rounded bg-white/90 text-slate-400 px-2 py-0.5">Search city or ZIP</div>
                        </div>
                        <div class="grid grid-cols-3 gap-1 p-1.5">
                            @foreach (['$489K', '$615K', '$372K'] as $price)
                                <div class="rounded bg-slate-50"><div class="h-7 rounded-t bg-gradient-to-br from-sky-200 to-emerald-100"></div><div class="font-bold text-slate-700 px-1">{{ $price }}</div></div>
                            @endforeach
                        </div>
                    </div>
                    @break

                {{-- Google search results --}}
                @case('seo')
                    <div class="rounded-full border border-slate-200 px-3 py-1 text-slate-500 mb-2">homes for sale in your city</div>
                    <div class="space-y-2">
                        <div class="rounded-lg border border-blue-200 bg-blue-50/50 p-1.5">
                            <div class="flex items-center justify-between"><span class="text-slate-500">yourrealty.com</span><span class="rounded bg-emerald-100 text-emerald-700 px-1 font-bold">Moving up</span></div>
                            <div class="text-blue-700 font-bold text-[11px]">Homes for Sale | Your Realty</div>
                            <div class="h-1.5 rounded bg-slate-200 w-4/5 mt-0.5"></div>
                        </div>
                        <div class="p-1.5 opacity-60"><div class="text-slate-500">othersite.com</div><div class="text-blue-700 font-bold">Search Listings</div><div class="h-1.5 rounded bg-slate-100 w-3/4 mt-0.5"></div></div>
                    </div>
                    @break

                {{-- Google Business Profile --}}
                @case('gmb')
                    <div class="flex gap-3">
                        <div class="w-2/5 h-28 rounded-lg bg-gradient-to-br from-emerald-100 to-sky-100 relative">
                            <svg class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-8 h-8 text-red-500" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2a7 7 0 00-7 7c0 5.25 7 13 7 13s7-7.75 7-13a7 7 0 00-7-7zm0 9.5a2.5 2.5 0 110-5 2.5 2.5 0 010 5z"/></svg>
                        </div>
                        <div class="flex-1 space-y-1">
                            <div class="font-extrabold text-slate-900 text-[12px]">Your Realty Group</div>
                            <div class="text-slate-500">Real estate agency &middot; Open now</div>
                            <div class="flex gap-1 pt-1"><span class="rounded bg-blue-50 text-blue-700 px-1.5 font-semibold">Call</span><span class="rounded bg-blue-50 text-blue-700 px-1.5 font-semibold">Website</span><span class="rounded bg-blue-50 text-blue-700 px-1.5 font-semibold">Directions</span></div>
                            <div class="rounded bg-slate-50 p-1 mt-1">New post &middot; Open house Sat</div>
                            <div class="rounded bg-slate-50 p-1">Review replied &middot; today</div>
                        </div>
                    </div>
                    @break


            @endswitch
        </div>
    </div>
</div>
