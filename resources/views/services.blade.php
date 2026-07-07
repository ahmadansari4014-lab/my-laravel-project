@extends('layouts.app')

@section('content')
<div x-data="{ activeModal: null }" class="relative pb-20">
    
    <div class="relative w-full py-32 md:py-48 flex items-center justify-center rounded-[3rem] overflow-hidden mb-24 shadow-2xl mx-6 group">
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?q=80&w=2000&auto=format&fit=crop" class="w-full h-full object-cover transition-transform duration-[20s] group-hover:scale-110 grayscale" alt="Technology Background">
            <div class="absolute inset-0 bg-gradient-to-br from-slate-900/95 via-blue-900/80 to-slate-900/95 mix-blend-multiply"></div>
        </div>
        
        <div class="relative z-10 w-full max-w-5xl mx-auto px-6 text-center">
            <span class="text-blue-400 font-bold tracking-widest uppercase text-sm mb-6 inline-block border border-blue-400/30 bg-blue-400/10 px-4 py-2 rounded-full backdrop-blur-sm">
                Our Capabilities
            </span>
            <h1 class="text-5xl md:text-7xl font-extrabold text-white mb-6 tracking-tight drop-shadow-lg">
                Elite <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-cyan-300">Operational</span> Services
            </h1>
            <p class="text-xl text-slate-300 max-w-3xl mx-auto font-light leading-relaxed">
                End-to-end technical, administrative, and marketing support. We execute the complex details so you can focus exclusively on scaling your enterprise.
            </p>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-6">
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-32">
            @foreach($services as $service)
                <div class="group relative bg-slate-900 border border-slate-700/50 p-10 rounded-3xl hover:bg-slate-800 hover:border-blue-500/50 hover:shadow-[0_0_30px_rgba(37,99,235,0.15)] transition-all duration-500 cursor-pointer flex flex-col h-full overflow-hidden" @click="activeModal = '{{ $service->icon_key }}'">
                    
                    <div class="absolute top-0 right-0 w-32 h-32 bg-blue-500/10 rounded-full filter blur-2xl group-hover:scale-150 transition-transform duration-700"></div>

                    <div class="w-14 h-14 bg-slate-800 border border-slate-700 text-blue-400 rounded-2xl flex items-center justify-center mb-8 group-hover:bg-blue-600 group-hover:text-white group-hover:border-blue-500 transition-all duration-300 relative z-10 shadow-lg">
                        <svg class="w-7 h-7 transform group-hover:scale-110 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    </div>

                    <h3 class="text-2xl font-bold text-white mb-4 relative z-10 group-hover:text-blue-400 transition-colors">{{ $service->name }}</h3>
                    <p class="text-slate-400 leading-relaxed text-sm flex-grow relative z-10">{{ $service->desc }}</p>
                    
                    <div class="mt-8 pt-6 border-t border-slate-700/50 relative z-10">
                        <span class="text-blue-400 font-semibold text-sm flex items-center gap-2 group-hover:text-blue-300 transition-colors">
                            Explore Capability <svg class="w-4 h-4 transform group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </span>
                    </div>
                </div>

                <div x-show="activeModal === '{{ $service->icon_key }}'" class="fixed inset-0 z-[100] flex items-center justify-center p-4 sm:p-6" x-cloak style="display: none;">
                    <div x-show="activeModal === '{{ $service->icon_key }}'" x-transition.opacity class="fixed inset-0 bg-slate-900/90 backdrop-blur-md" @click="activeModal = null"></div>

                    <div x-show="activeModal === '{{ $service->icon_key }}'" x-transition.scale class="relative bg-white rounded-3xl shadow-2xl overflow-hidden w-full max-w-5xl z-10 flex flex-col md:flex-row h-[85vh] md:h-[600px]">
                        
                        <div class="w-full md:w-1/2 h-64 md:h-auto relative">
                            @if($service->icon_key == 'va')
                                <img src="https://images.unsplash.com/photo-1554415707-6e8cfc93fe23?q=80&w=800&auto=format&fit=crop" class="absolute inset-0 w-full h-full object-cover">
                            @elseif($service->icon_key == 'web')
                                <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?q=80&w=800&auto=format&fit=crop" class="absolute inset-0 w-full h-full object-cover">
                            @elseif($service->icon_key == 'seo' || $service->icon_key == 'marketing')
                                <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=800&auto=format&fit=crop" class="absolute inset-0 w-full h-full object-cover">
                            @else
                                <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?q=80&w=800&auto=format&fit=crop" class="absolute inset-0 w-full h-full object-cover">
                            @endif
                        </div>

                        <div class="w-full md:w-1/2 p-8 md:p-14 overflow-y-auto relative">
                            <button @click="activeModal = null" class="absolute top-6 right-6 text-slate-400 hover:text-slate-900 bg-slate-100 p-2 rounded-full z-20 transition-colors">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                            </button>
                            
                            <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 mb-4 mt-4 md:mt-0">{{ $service->name }}</h2>
                            <p class="text-slate-600 mb-8 leading-relaxed text-lg">{{ $service->desc }}</p>
                            
                            <h4 class="font-bold text-slate-900 mb-4 uppercase tracking-wider text-sm border-b border-slate-200 pb-2">Technical Deliverables:</h4>
                            <ul class="space-y-3 mb-10 text-slate-600 font-medium text-sm">
                                @if($service->icon_key == 'va')
                                    <li class="flex items-center gap-3"><span class="w-6 h-6 bg-blue-100 text-blue-600 flex justify-center items-center rounded-full">✓</span> BoldTrail & SkySlope Data Management</li>
                                    <li class="flex items-center gap-3"><span class="w-6 h-6 bg-blue-100 text-blue-600 flex justify-center items-center rounded-full">✓</span> Priority Executive Inbox Routing</li>
                                    <li class="flex items-center gap-3"><span class="w-6 h-6 bg-blue-100 text-blue-600 flex justify-center items-center rounded-full">✓</span> Real Estate Compliance Coordination</li>
                                @elseif($service->icon_key == 'web')
                                    <li class="flex items-center gap-3"><span class="w-6 h-6 bg-blue-100 text-blue-600 flex justify-center items-center rounded-full">✓</span> Full-Stack Laravel Architecture (e.g., Building Management Systems)</li>
                                    <li class="flex items-center gap-3"><span class="w-6 h-6 bg-blue-100 text-blue-600 flex justify-center items-center rounded-full">✓</span> Python-Driven Data Models & Sales Forecasting</li>
                                    <li class="flex items-center gap-3"><span class="w-6 h-6 bg-blue-100 text-blue-600 flex justify-center items-center rounded-full">✓</span> Scalable Cloud Deployment & Security</li>
                                @elseif($service->icon_key == 'seo' || $service->icon_key == 'marketing')
                                    <li class="flex items-center gap-3"><span class="w-6 h-6 bg-blue-100 text-blue-600 flex justify-center items-center rounded-full">✓</span> High-Conversion Meta Business Suite Ads</li>
                                    <li class="flex items-center gap-3"><span class="w-6 h-6 bg-blue-100 text-blue-600 flex justify-center items-center rounded-full">✓</span> Cinematic Visual Asset Processing</li>
                                    <li class="flex items-center gap-3"><span class="w-6 h-6 bg-blue-100 text-blue-600 flex justify-center items-center rounded-full">✓</span> Aggressive Technical SEO Optimization</li>
                                @elseif($service->icon_key == 'finance')
                                    <li class="flex items-center gap-3"><span class="w-6 h-6 bg-blue-100 text-blue-600 flex justify-center items-center rounded-full">✓</span> QuickBooks Enterprise Management</li>
                                    <li class="flex items-center gap-3"><span class="w-6 h-6 bg-blue-100 text-blue-600 flex justify-center items-center rounded-full">✓</span> Real-Time Profit & Loss (P&L) Statements</li>
                                    <li class="flex items-center gap-3"><span class="w-6 h-6 bg-blue-100 text-blue-600 flex justify-center items-center rounded-full">✓</span> Accounts Payable/Receivable Automation</li>
                                @else
                                    <li class="flex items-center gap-3"><span class="w-6 h-6 bg-blue-100 text-blue-600 flex justify-center items-center rounded-full">✓</span> Dedicated Elite Account Manager</li>
                                    <li class="flex items-center gap-3"><span class="w-6 h-6 bg-blue-100 text-blue-600 flex justify-center items-center rounded-full">✓</span> Custom Weekly Performance Analytics</li>
                                    <li class="flex items-center gap-3"><span class="w-6 h-6 bg-blue-100 text-blue-600 flex justify-center items-center rounded-full">✓</span> 24/7 Priority Support Desk</li>
                                @endif
                            </ul>
                            
                            <a href="{{ route('contact') }}" class="block w-full text-center bg-slate-900 text-white font-bold py-4 rounded-xl hover:bg-blue-600 transition-colors shadow-lg hover:shadow-blue-500/30 transform hover:-translate-y-1 duration-300">Integrate This Service</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mb-32">
            <div class="text-center mb-16">
                <h4 class="text-blue-600 font-bold uppercase tracking-wider mb-2">Our Process</h4>
                <h2 class="text-4xl font-extrabold text-slate-900 tracking-tight">Execution Methodology</h2>
            </div>
            
            <div class="relative">
                <div class="hidden md:block absolute top-1/2 left-0 w-full h-1 bg-gradient-to-r from-blue-100 via-blue-500 to-blue-100 transform -translate-y-1/2 z-0"></div>
                
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8 relative z-10">
                    <div class="bg-white p-8 rounded-3xl shadow-xl border border-slate-100 text-center">
                        <div class="w-16 h-16 bg-slate-900 text-white font-black text-2xl rounded-full flex items-center justify-center mx-auto mb-6 border-4 border-white shadow-lg">1</div>
                        <h3 class="font-bold text-slate-800 mb-2">Discovery Audit</h3>
                        <p class="text-slate-500 text-sm">Mapping your existing bottlenecks and technical gaps.</p>
                    </div>
                    <div class="bg-white p-8 rounded-3xl shadow-xl border border-slate-100 text-center">
                        <div class="w-16 h-16 bg-blue-600 text-white font-black text-2xl rounded-full flex items-center justify-center mx-auto mb-6 border-4 border-white shadow-lg">2</div>
                        <h3 class="font-bold text-slate-800 mb-2">Architecture</h3>
                        <p class="text-slate-500 text-sm">Designing scalable workflows and tech deployments.</p>
                    </div>
                    <div class="bg-white p-8 rounded-3xl shadow-xl border border-slate-100 text-center">
                        <div class="w-16 h-16 bg-slate-900 text-white font-black text-2xl rounded-full flex items-center justify-center mx-auto mb-6 border-4 border-white shadow-lg">3</div>
                        <h3 class="font-bold text-slate-800 mb-2">Integration</h3>
                        <p class="text-slate-500 text-sm">Deploying our specialists seamlessly into your ecosystem.</p>
                    </div>
                    <div class="bg-white p-8 rounded-3xl shadow-xl border border-slate-100 text-center">
                        <div class="w-16 h-16 bg-blue-600 text-white font-black text-2xl rounded-full flex items-center justify-center mx-auto mb-6 border-4 border-white shadow-lg">4</div>
                        <h3 class="font-bold text-slate-800 mb-2">Scale & Optimize</h3>
                        <p class="text-slate-500 text-sm">Continuous monitoring and proactive growth execution.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-gradient-to-br from-slate-900 to-blue-900 rounded-[3rem] p-12 md:p-20 text-center shadow-2xl relative overflow-hidden mb-10">
            <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-10"></div>
            <div class="relative z-10">
                <h2 class="text-3xl md:text-5xl font-extrabold text-white mb-6">Build Your Custom Solutions Package</h2>
                <p class="text-blue-100 mb-10 max-w-2xl mx-auto text-lg">Contact our architecture team today to discuss how we can integrate these services into your daily operations.</p>
                <a href="{{ route('contact') }}" class="inline-block px-10 py-4 text-lg font-bold rounded-full text-slate-900 bg-white hover:bg-blue-50 hover:shadow-[0_0_20px_rgba(255,255,255,0.3)] transition-all transform hover:-translate-y-1">
                    Request an Audit
                </a>
            </div>
        </div>

    </div>
</div>
@endsection