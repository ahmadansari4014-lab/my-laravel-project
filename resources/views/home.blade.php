@extends('layouts.app')

@section('content')
<div x-data="{ activeHomeModal: null }" class="relative">

    <div class="relative w-full h-[90vh] min-h-[700px] flex items-center justify-center rounded-3xl overflow-hidden mb-24 shadow-2xl group">
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?q=80&w=2000&auto=format&fit=crop" class="w-full h-full object-cover transition-transform duration-[20s] group-hover:scale-110" alt="Tech Background">
            <div class="absolute inset-0 bg-gradient-to-r from-slate-900 via-slate-900/90 to-transparent"></div>
        </div>
        
        <div class="relative z-10 w-full max-w-7xl mx-auto px-6 lg:px-8 text-left">
            <span class="text-blue-400 font-bold tracking-widest uppercase text-sm mb-4 block flex items-center gap-2">
                <span class="w-8 h-0.5 bg-blue-400"></span> Premium IT & Virtual Assistance
            </span>
            <h1 class="text-5xl md:text-7xl lg:text-8xl font-extrabold text-white tracking-tight mb-6 drop-shadow-lg leading-tight">
                Scale Faster with <br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-cyan-300">Cloud Dextra</span>
            </h1>
            <p class="mt-4 text-xl md:text-2xl text-slate-300 max-w-2xl font-light leading-relaxed mb-10">
                We handle the heavy lifting of digital marketing, technical web management, and daily operations so you can focus exclusively on closing deals and growing your revenue.
            </p>
            <div class="flex flex-wrap gap-6">
                <a href="#solutions" class="px-8 py-4 text-lg font-bold rounded-full text-white bg-blue-600 hover:bg-blue-500 transition-all duration-300 shadow-[0_0_20px_rgba(37,99,235,0.4)] hover:shadow-[0_0_30px_rgba(37,99,235,0.7)] transform hover:-translate-y-1">
                    Explore Our Solutions
                </a>
                <a href="{{ route('contact') }}" class="px-8 py-4 text-lg font-bold rounded-full text-white border border-white/30 backdrop-blur-sm hover:bg-white hover:text-slate-900 transition-all duration-300 transform hover:-translate-y-1">
                    Schedule a Consultation
                </a>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-6 mb-32 text-center opacity-70 hover:opacity-100 transition-opacity duration-700">
        <p class="text-sm font-bold text-slate-400 uppercase tracking-widest mb-8">Trusted by modern professionals and industry leaders</p>
        <div class="flex flex-wrap justify-center items-center gap-12 md:gap-24 grayscale">
            <h3 class="text-2xl font-black text-slate-800">Horizon<span class="font-light">Estates</span></h3>
            <h3 class="text-2xl font-black text-slate-800">Apex<span class="text-blue-600">Consulting</span></h3>
            <h3 class="text-2xl font-black text-slate-800">Vanguard<span class="font-light">Tech</span></h3>
            <h3 class="text-2xl font-black text-slate-800">Elevate<span class="text-blue-600">Partners</span></h3>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-6 mb-32">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-extrabold text-slate-900 mb-6 tracking-tight">The Cost of Doing It All Yourself</h2>
            <p class="text-xl text-slate-600 max-w-3xl mx-auto">
                Modern businesses fail not from a lack of vision, but from operational burnout. Cloud Dextra provides the architecture to automate, delegate, and dominate your industry.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
            <div @click="activeHomeModal = 'time'" class="bg-white rounded-3xl p-10 shadow-lg border border-slate-100 hover:border-blue-300 hover:shadow-2xl hover:shadow-blue-500/20 hover:-translate-y-2 transition-all duration-500 cursor-pointer group relative overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-br from-blue-50/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 z-0"></div>
                <div class="relative z-10">
                    <div class="text-blue-600 mb-6 bg-blue-50 w-16 h-16 rounded-2xl flex items-center justify-center group-hover:bg-blue-600 group-hover:text-white transition-colors duration-500 shadow-sm">
                        <svg class="w-8 h-8 transform group-hover:scale-110 transition-transform duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-800 mb-4 group-hover:text-blue-700 transition-colors duration-300">Time Recaptured</h3>
                    <p class="text-slate-600 leading-relaxed mb-6">The average business owner loses 15+ hours a week to inbox management, scheduling, and CRM data entry. We turn your chaotic workflow into a streamlined machine.</p>
                    <span class="text-blue-600 font-semibold flex items-center gap-2 text-sm opacity-0 group-hover:opacity-100 transform translate-y-2 group-hover:translate-y-0 transition-all duration-300">View Details <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg></span>
                </div>
            </div>

            <div @click="activeHomeModal = 'dominance'" class="bg-white rounded-3xl p-10 shadow-lg border border-slate-100 hover:border-blue-300 hover:shadow-2xl hover:shadow-blue-500/20 hover:-translate-y-2 transition-all duration-500 cursor-pointer group relative overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-br from-blue-50/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 z-0"></div>
                <div class="relative z-10">
                    <div class="text-blue-600 mb-6 bg-blue-50 w-16 h-16 rounded-2xl flex items-center justify-center group-hover:bg-blue-600 group-hover:text-white transition-colors duration-500 shadow-sm">
                        <svg class="w-8 h-8 transform group-hover:scale-110 transition-transform duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-800 mb-4 group-hover:text-blue-700 transition-colors duration-300">Digital Dominance</h3>
                    <p class="text-slate-600 leading-relaxed mb-6">A website that doesn't convert is just a digital business card. We build high-performance web platforms backed by aggressive SEO to keep your pipeline full.</p>
                    <span class="text-blue-600 font-semibold flex items-center gap-2 text-sm opacity-0 group-hover:opacity-100 transform translate-y-2 group-hover:translate-y-0 transition-all duration-300">View Details <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg></span>
                </div>
            </div>

            <div @click="activeHomeModal = 'clarity'" class="bg-white rounded-3xl p-10 shadow-lg border border-slate-100 hover:border-blue-300 hover:shadow-2xl hover:shadow-blue-500/20 hover:-translate-y-2 transition-all duration-500 cursor-pointer group relative overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-br from-blue-50/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 z-0"></div>
                <div class="relative z-10">
                    <div class="text-blue-600 mb-6 bg-blue-50 w-16 h-16 rounded-2xl flex items-center justify-center group-hover:bg-blue-600 group-hover:text-white transition-colors duration-500 shadow-sm">
                        <svg class="w-8 h-8 transform group-hover:scale-110 transition-transform duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-800 mb-4 group-hover:text-blue-700 transition-colors duration-300">Financial Clarity</h3>
                    <p class="text-slate-600 leading-relaxed mb-6">Scale with confidence knowing your numbers are accurate. Our QuickBooks specialists handle the tedious reconciliation process, giving you real-time visibility.</p>
                    <span class="text-blue-600 font-semibold flex items-center gap-2 text-sm opacity-0 group-hover:opacity-100 transform translate-y-2 group-hover:translate-y-0 transition-all duration-300">View Details <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg></span>
                </div>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-6 mb-32">
        <div class="flex flex-col lg:flex-row items-center gap-16">
            <div class="w-full lg:w-1/2 relative group">
                <div class="absolute inset-0 bg-blue-600 rounded-3xl transform translate-x-4 translate-y-4 transition-transform duration-700 group-hover:translate-x-6 group-hover:translate-y-6"></div>
                <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?q=80&w=1200&auto=format&fit=crop" class="relative z-10 rounded-3xl shadow-2xl w-full h-[500px] object-cover" alt="Corporate Office">
            </div>
            <div class="w-full lg:w-1/2">
                <h4 class="text-blue-600 font-bold uppercase tracking-wider mb-2">Virtual Assistance</h4>
                <h2 class="text-4xl font-extrabold text-slate-900 mb-6">Elite Operational Support for High-Performers</h2>
                <p class="text-lg text-slate-600 mb-6 leading-relaxed">
                    Whether you are managing a massive real estate portfolio on SkySlope or consulting for Fortune 500s, administrative drag slows down your revenue generation. 
                </p>
                <ul class="space-y-4 mb-8">
                    <li class="flex items-center text-slate-700 font-medium hover:text-blue-600 transition-colors">
                        <span class="w-6 h-6 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center mr-4">✓</span> BoldTrail & CRM Management
                    </li>
                    <li class="flex items-center text-slate-700 font-medium hover:text-blue-600 transition-colors">
                        <span class="w-6 h-6 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center mr-4">✓</span> Calendar & Priority Inbox Routing
                    </li>
                    <li class="flex items-center text-slate-700 font-medium hover:text-blue-600 transition-colors">
                        <span class="w-6 h-6 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center mr-4">✓</span> Contract & Document Preparation
                    </li>
                </ul>
                <a href="#solutions" class="text-blue-600 font-bold hover:text-blue-800 flex items-center gap-2 transition-colors group">Discover Core Solutions <svg class="w-5 h-5 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg></a>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-6 mb-32">
        <div class="flex flex-col-reverse lg:flex-row items-center gap-16">
            <div class="w-full lg:w-1/2">
                <h4 class="text-blue-600 font-bold uppercase tracking-wider mb-2">Digital Growth</h4>
                <h2 class="text-4xl font-extrabold text-slate-900 mb-6">Architecting Your Digital Footprint</h2>
                <p class="text-lg text-slate-600 mb-6 leading-relaxed">
                    We do not just build websites; we build digital ecosystems. By combining enterprise-grade web development with surgical SEO and Meta Ad strategies, we turn your online presence into a 24/7 lead generation engine.
                </p>
                <ul class="space-y-4 mb-8">
                    <li class="flex items-center text-slate-700 font-medium hover:text-blue-600 transition-colors">
                        <span class="w-6 h-6 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center mr-4">✓</span> WordPress & Custom Laravel Frameworks
                    </li>
                    <li class="flex items-center text-slate-700 font-medium hover:text-blue-600 transition-colors">
                        <span class="w-6 h-6 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center mr-4">✓</span> Meta Business Suite Ad Campaigns
                    </li>
                    <li class="flex items-center text-slate-700 font-medium hover:text-blue-600 transition-colors">
                        <span class="w-6 h-6 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center mr-4">✓</span> Technical SEO Auditing & Execution
                    </li>
                </ul>
                <a href="#solutions" class="text-blue-600 font-bold hover:text-blue-800 flex items-center gap-2 transition-colors group">See Detailed Data <svg class="w-5 h-5 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg></a>
            </div>
            <div class="w-full lg:w-1/2 relative group">
                <div class="absolute inset-0 bg-slate-900 rounded-3xl transform -translate-x-4 translate-y-4 transition-transform duration-700 group-hover:-translate-x-6 group-hover:translate-y-6"></div>
                <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=1200&auto=format&fit=crop" class="relative z-10 rounded-3xl shadow-2xl w-full h-[500px] object-cover" alt="Data Analytics">
            </div>
        </div>
    </div>

    <div id="solutions" class="bg-slate-900 py-32 mb-32 relative overflow-hidden rounded-[3rem] mx-6">
        <div class="absolute top-0 left-0 w-[500px] h-[500px] bg-blue-600 rounded-full mix-blend-multiply filter blur-[150px] opacity-30"></div>
        <div class="relative z-10 max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-extrabold text-white mb-6">Our Core Solutions</h2>
                <p class="text-xl text-blue-100 max-w-2xl mx-auto">Click any tablet below to view detailed deliverables and operational data.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div @click="activeHomeModal = 'va'" class="bg-slate-800/80 backdrop-blur-sm border border-slate-700/50 p-10 rounded-3xl hover:bg-slate-800 hover:border-blue-500/50 hover:shadow-[0_0_30px_rgba(37,99,235,0.15)] transition-all duration-500 cursor-pointer group relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-blue-500/10 rounded-full filter blur-2xl group-hover:scale-150 transition-transform duration-700"></div>
                    <h3 class="text-3xl font-bold text-white mb-4 group-hover:text-blue-400 transition-colors relative z-10">Virtual Assistance Desk</h3>
                    <p class="text-slate-400 mb-6 relative z-10">Elite administrative support, CRM handling, and daily operational management.</p>
                    <span class="text-blue-400 font-semibold flex items-center gap-2 relative z-10">View Data <svg class="w-4 h-4 transform group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg></span>
                </div>

                <div @click="activeHomeModal = 'marketing'" class="bg-slate-800/80 backdrop-blur-sm border border-slate-700/50 p-10 rounded-3xl hover:bg-slate-800 hover:border-blue-500/50 hover:shadow-[0_0_30px_rgba(37,99,235,0.15)] transition-all duration-500 cursor-pointer group relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-blue-500/10 rounded-full filter blur-2xl group-hover:scale-150 transition-transform duration-700"></div>
                    <h3 class="text-3xl font-bold text-white mb-4 group-hover:text-blue-400 transition-colors relative z-10">Digital Growth Division</h3>
                    <p class="text-slate-400 mb-6 relative z-10">Aggressive SEO, content strategies, and high-converting paid ad campaigns.</p>
                    <span class="text-blue-400 font-semibold flex items-center gap-2 relative z-10">View Data <svg class="w-4 h-4 transform group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg></span>
                </div>

                <div @click="activeHomeModal = 'finance'" class="bg-slate-800/80 backdrop-blur-sm border border-slate-700/50 p-10 rounded-3xl hover:bg-slate-800 hover:border-blue-500/50 hover:shadow-[0_0_30px_rgba(37,99,235,0.15)] transition-all duration-500 cursor-pointer group relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-blue-500/10 rounded-full filter blur-2xl group-hover:scale-150 transition-transform duration-700"></div>
                    <h3 class="text-3xl font-bold text-white mb-4 group-hover:text-blue-400 transition-colors relative z-10">Financial Bookkeeping</h3>
                    <p class="text-slate-400 mb-6 relative z-10">Precise QuickBooks management, account reconciliation, and P&L reporting.</p>
                    <span class="text-blue-400 font-semibold flex items-center gap-2 relative z-10">View Data <svg class="w-4 h-4 transform group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg></span>
                </div>

                <div @click="activeHomeModal = 'web'" class="bg-slate-800/80 backdrop-blur-sm border border-slate-700/50 p-10 rounded-3xl hover:bg-slate-800 hover:border-blue-500/50 hover:shadow-[0_0_30px_rgba(37,99,235,0.15)] transition-all duration-500 cursor-pointer group relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-blue-500/10 rounded-full filter blur-2xl group-hover:scale-150 transition-transform duration-700"></div>
                    <h3 class="text-3xl font-bold text-white mb-4 group-hover:text-blue-400 transition-colors relative z-10">Technical Web Management</h3>
                    <p class="text-slate-400 mb-6 relative z-10">Custom framework development, daily security patching, and server maintenance.</p>
                    <span class="text-blue-400 font-semibold flex items-center gap-2 relative z-10">View Data <svg class="w-4 h-4 transform group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg></span>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-slate-900 py-24 mb-32 relative overflow-hidden">
        <div class="absolute top-0 right-0 w-96 h-96 bg-blue-600 rounded-full mix-blend-multiply filter blur-[100px] opacity-40"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-cyan-400 rounded-full mix-blend-multiply filter blur-[100px] opacity-30"></div>
        
        <div class="relative z-10 max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 text-center">
                <div>
                    <h3 class="text-5xl font-extrabold text-white mb-2">98%</h3>
                    <p class="text-blue-300 font-medium uppercase tracking-wide">Client Retention</p>
                </div>
                <div>
                    <h3 class="text-5xl font-extrabold text-white mb-2">50k+</h3>
                    <p class="text-blue-300 font-medium uppercase tracking-wide">Hours Saved</p>
                </div>
                <div>
                    <h3 class="text-5xl font-extrabold text-white mb-2">300+</h3>
                    <p class="text-blue-300 font-medium uppercase tracking-wide">Projects Launched</p>
                </div>
                <div>
                    <h3 class="text-5xl font-extrabold text-white mb-2">24/7</h3>
                    <p class="text-blue-300 font-medium uppercase tracking-wide">Operational Support</p>
                </div>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-6 mb-32">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-extrabold text-slate-900 mb-6 tracking-tight">Client Experiences</h2>
            <p class="text-xl text-slate-600 max-w-3xl mx-auto">Don't just take our word for it. Hear from the founders and operators who have scaled with us.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-10 rounded-3xl shadow-lg border border-slate-100 hover:shadow-2xl hover:shadow-blue-500/10 hover:-translate-y-2 transition-all duration-500 relative group">
                <div class="text-blue-200 mb-6 transform group-hover:scale-110 transition-transform duration-500 group-hover:text-blue-500">
                    <svg class="w-12 h-12" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" /></svg>
                </div>
                <p class="text-slate-600 leading-relaxed mb-8 italic">"Cloud Dextra completely transformed how our real estate team operates. By taking over our BoldTrail CRM and inbox management, I personally got 20 hours back every single week to focus exclusively on closing deals."</p>
                <div class="flex items-center gap-4 border-t border-slate-100 pt-6">
                    <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?q=80&w=200&auto=format&fit=crop" class="w-14 h-14 rounded-full object-cover shadow-sm ring-2 ring-slate-100 group-hover:ring-blue-400 transition-all" alt="Client 1">
                    <div>
                        <h4 class="font-bold text-slate-900 group-hover:text-blue-700 transition-colors">Marcus T.</h4>
                        <p class="text-sm text-slate-500">Managing Broker, Horizon Estates</p>
                    </div>
                </div>
            </div>

            <div class="bg-white p-10 rounded-3xl shadow-lg border border-slate-100 hover:shadow-2xl hover:shadow-blue-500/10 hover:-translate-y-2 transition-all duration-500 relative group">
                <div class="text-blue-200 mb-6 transform group-hover:scale-110 transition-transform duration-500 group-hover:text-blue-500">
                    <svg class="w-12 h-12" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" /></svg>
                </div>
                <p class="text-slate-600 leading-relaxed mb-8 italic">"Our organic traffic tripled within 6 months of them taking over. Their web architecture team didn't just build us a fast website; they built a lead-generation machine that integrates perfectly with our sales team."</p>
                <div class="flex items-center gap-4 border-t border-slate-100 pt-6">
                    <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?q=80&w=200&auto=format&fit=crop" class="w-14 h-14 rounded-full object-cover shadow-sm ring-2 ring-slate-100 group-hover:ring-blue-400 transition-all" alt="Client 2">
                    <div>
                        <h4 class="font-bold text-slate-900 group-hover:text-blue-700 transition-colors">Sarah J.</h4>
                        <p class="text-sm text-slate-500">Founder, Apex Consulting</p>
                    </div>
                </div>
            </div>

            <div class="bg-white p-10 rounded-3xl shadow-lg border border-slate-100 hover:shadow-2xl hover:shadow-blue-500/10 hover:-translate-y-2 transition-all duration-500 relative group">
                <div class="text-blue-200 mb-6 transform group-hover:scale-110 transition-transform duration-500 group-hover:text-blue-500">
                    <svg class="w-12 h-12" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" /></svg>
                </div>
                <p class="text-slate-600 leading-relaxed mb-8 italic">"Having a dedicated QuickBooks specialist means our P&L is always accurate and tax season is completely stress-free. The financial clarity they provide is worth ten times what we pay them."</p>
                <div class="flex items-center gap-4 border-t border-slate-100 pt-6">
                    <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?q=80&w=200&auto=format&fit=crop" class="w-14 h-14 rounded-full object-cover shadow-sm ring-2 ring-slate-100 group-hover:ring-blue-400 transition-all" alt="Client 3">
                    <div>
                        <h4 class="font-bold text-slate-900 group-hover:text-blue-700 transition-colors">David L.</h4>
                        <p class="text-sm text-slate-500">CEO, Vanguard Tech</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="max-w-5xl mx-auto px-6 mb-24">
        <div class="bg-gradient-to-br from-blue-600 to-blue-900 rounded-[3rem] p-12 md:p-20 text-center shadow-2xl relative overflow-hidden">
            <div class="relative z-10">
                <h2 class="text-4xl md:text-5xl font-extrabold text-white mb-6 tracking-tight">Ready to Delegate and Dominate?</h2>
                <p class="text-xl text-blue-100 mb-10 max-w-2xl mx-auto font-light">
                    Stop working *in* your business and start working *on* it. Let our experts handle the operations while you scale the revenue.
                </p>
                <a href="{{ route('contact') }}" class="inline-block px-10 py-5 text-xl font-bold rounded-full text-blue-900 bg-white hover:bg-slate-100 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    Start Your Project Today
                </a>
            </div>
        </div>
    </div>

    <div x-show="activeHomeModal === 'time'" class="fixed inset-0 z-[100] flex items-center justify-center p-4 sm:p-6" x-cloak style="display: none;">
        <div x-show="activeHomeModal === 'time'" x-transition.opacity class="fixed inset-0 bg-slate-900/90 backdrop-blur-sm" @click="activeHomeModal = null"></div>
        <div x-show="activeHomeModal === 'time'" x-transition.scale class="relative bg-white rounded-3xl shadow-2xl overflow-hidden w-full max-w-4xl z-10 flex flex-col md:flex-row h-auto md:h-[500px]">
            <div class="w-full md:w-1/2 relative h-48 md:h-full">
                <img src="https://images.unsplash.com/photo-1499750310107-5fef28a66643?q=80&w=800&auto=format&fit=crop" class="absolute inset-0 w-full h-full object-cover" alt="Clean Desk Workflow">
            </div>
            <div class="w-full md:w-1/2 p-10 overflow-y-auto relative">
                <button @click="activeHomeModal = null" class="absolute top-6 right-6 text-slate-400 hover:text-slate-900 bg-slate-100 p-2 rounded-full"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg></button>
                <h2 class="text-3xl font-extrabold text-slate-900 mb-6">Reclaiming Your Schedule</h2>
                <p class="text-slate-600 mb-4 leading-relaxed">Every minute spent on repetitive administrative work is a minute stolen from scaling your business. By integrating our specialists, you immediately reclaim 15 to 20 hours per week.</p>
                <div class="bg-blue-50 border border-blue-100 p-5 rounded-2xl mb-4">
                    <h4 class="font-bold text-blue-800 mb-2">The "Inbox Zero" Guarantee</h4>
                    <p class="text-sm text-blue-600">Our routing systems ensure you only see emails that require your explicit executive decision.</p>
                </div>
            </div>
        </div>
    </div>

    <div x-show="activeHomeModal === 'dominance'" class="fixed inset-0 z-[100] flex items-center justify-center p-4 sm:p-6" x-cloak style="display: none;">
        <div x-show="activeHomeModal === 'dominance'" x-transition.opacity class="fixed inset-0 bg-slate-900/90 backdrop-blur-sm" @click="activeHomeModal = null"></div>
        <div x-show="activeHomeModal === 'dominance'" x-transition.scale class="relative bg-white rounded-3xl shadow-2xl overflow-hidden w-full max-w-4xl z-10 flex flex-col md:flex-row h-auto md:h-[500px]">
            <div class="w-full md:w-1/2 p-10 overflow-y-auto relative">
                <button @click="activeHomeModal = null" class="absolute top-6 right-6 md:right-auto md:left-6 text-slate-400 hover:text-slate-900 bg-slate-100 p-2 rounded-full z-20"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg></button>
                <h2 class="text-3xl font-extrabold text-slate-900 mb-6 mt-8 md:mt-0">Command Your Market</h2>
                <p class="text-slate-600 mb-6 leading-relaxed">It is not enough to just exist online. Your infrastructure must proactively capture leads and funnel them directly into your CRM.</p>
                <ul class="space-y-3 mb-6 text-slate-700 font-medium text-sm">
                    <li class="flex items-center gap-3"><span class="w-5 h-5 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center text-xs">✓</span> Aggressive Keyword Targeting</li>
                    <li class="flex items-center gap-3"><span class="w-5 h-5 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center text-xs">✓</span> Competitor Backlink Audits</li>
                    <li class="flex items-center gap-3"><span class="w-5 h-5 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center text-xs">✓</span> A/B Split Testing for High Conversions</li>
                </ul>
            </div>
            <div class="w-full md:w-1/2 relative h-48 md:h-full">
                <img src="https://images.unsplash.com/photo-1504868584819-f8e8b4b6d7e3?q=80&w=800&auto=format&fit=crop" class="absolute inset-0 w-full h-full object-cover" alt="Data Analytics">
            </div>
        </div>
    </div>

    <div x-show="activeHomeModal === 'clarity'" class="fixed inset-0 z-[100] flex items-center justify-center p-4 sm:p-6" x-cloak style="display: none;">
        <div x-show="activeHomeModal === 'clarity'" x-transition.opacity class="fixed inset-0 bg-slate-900/90 backdrop-blur-sm" @click="activeHomeModal = null"></div>
        <div x-show="activeHomeModal === 'clarity'" x-transition.scale class="relative bg-white rounded-3xl shadow-2xl overflow-hidden w-full max-w-4xl z-10 flex flex-col md:flex-row h-auto md:h-[500px]">
            <div class="w-full md:w-1/2 relative h-48 md:h-full">
                <img src="https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?q=80&w=800&auto=format&fit=crop" class="absolute inset-0 w-full h-full object-cover" alt="Financial Planning">
            </div>
            <div class="w-full md:w-1/2 p-10 overflow-y-auto relative">
                <button @click="activeHomeModal = null" class="absolute top-6 right-6 text-slate-400 hover:text-slate-900 bg-slate-100 p-2 rounded-full"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg></button>
                <h2 class="text-3xl font-extrabold text-slate-900 mb-6">Crystal Clear Margins</h2>
                <p class="text-slate-600 mb-6 leading-relaxed">Stop guessing at the end of the month. We implement enterprise-level bookkeeping standards so your profit and loss statements are updated in real-time.</p>
                <div class="bg-slate-50 border border-slate-200 p-5 rounded-2xl">
                    <p class="text-slate-700 font-semibold mb-2">Our Financial Stack:</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-white border border-slate-200 rounded-full text-xs font-bold text-slate-600">QuickBooks Online</span>
                        <span class="px-3 py-1 bg-white border border-slate-200 rounded-full text-xs font-bold text-slate-600">Xero</span>
                        <span class="px-3 py-1 bg-white border border-slate-200 rounded-full text-xs font-bold text-slate-600">Stripe Integration</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div x-show="activeHomeModal === 'va'" class="fixed inset-0 z-[100] flex items-center justify-center p-4 sm:p-6" x-cloak style="display: none;">
        <div x-show="activeHomeModal === 'va'" x-transition.opacity class="fixed inset-0 bg-slate-900/90 backdrop-blur-sm" @click="activeHomeModal = null"></div>
        <div x-show="activeHomeModal === 'va'" x-transition.scale class="relative bg-white rounded-3xl shadow-2xl overflow-hidden w-full max-w-5xl z-10 flex flex-col md:flex-row h-[80vh] md:h-[600px]">
            <div class="w-full md:w-1/2 relative h-64 md:h-full">
                <img src="https://images.unsplash.com/photo-1554415707-6e8cfc93fe23?q=80&w=800&auto=format&fit=crop" class="absolute inset-0 w-full h-full object-cover" alt="Virtual Assistant Team">
            </div>
            <div class="w-full md:w-1/2 p-10 md:p-14 overflow-y-auto relative">
                <button @click="activeHomeModal = null" class="absolute top-6 right-6 text-slate-400 hover:text-slate-900 bg-slate-100 p-2 rounded-full"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg></button>
                <h2 class="text-4xl font-extrabold text-slate-900 mb-6">Virtual Assistance</h2>
                <p class="text-slate-600 mb-6">Regain your time by offloading your most tedious administrative tasks to our highly trained specialists.</p>
                <h4 class="text-xl font-bold text-slate-800 mb-4">Key Responsibilities Handled:</h4>
                <ul class="space-y-3 mb-8 text-slate-600 font-medium">
                    <li class="flex items-center gap-3"><span class="text-blue-500">✓</span> BoldTrail & SkySlope CRM Data Entry</li>
                    <li class="flex items-center gap-3"><span class="text-blue-500">✓</span> Executive Calendar Management</li>
                    <li class="flex items-center gap-3"><span class="text-blue-500">✓</span> Priority Inbox Routing & Replying</li>
                </ul>
            </div>
        </div>
    </div>

    <div x-show="activeHomeModal === 'marketing'" class="fixed inset-0 z-[100] flex items-center justify-center p-4 sm:p-6" x-cloak style="display: none;">
        <div x-show="activeHomeModal === 'marketing'" x-transition.opacity class="fixed inset-0 bg-slate-900/90 backdrop-blur-sm" @click="activeHomeModal = null"></div>
        <div x-show="activeHomeModal === 'marketing'" x-transition.scale class="relative bg-white rounded-3xl shadow-2xl overflow-hidden w-full max-w-5xl z-10 flex flex-col md:flex-row h-[80vh] md:h-[600px]">
            <div class="w-full md:w-1/2 p-10 md:p-14 overflow-y-auto relative">
                <button @click="activeHomeModal = null" class="absolute top-6 right-6 md:right-auto md:left-6 text-slate-400 hover:text-slate-900 bg-slate-100 p-2 rounded-full z-20"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg></button>
                <h2 class="text-4xl font-extrabold text-slate-900 mb-6 mt-8 md:mt-0">Digital Growth</h2>
                <p class="text-slate-600 leading-relaxed mb-6">Our data-driven marketing team ensures your business is visible to high-intent buyers searching for your exact services.</p>
                <div class="bg-slate-50 p-6 rounded-2xl mb-8 border border-slate-100">
                    <h4 class="font-bold text-slate-800 mb-2">Our Metrics Drive Results:</h4>
                    <p class="text-slate-600 text-sm mb-2">• Average 300% increase in Organic Search Traffic.</p>
                    <p class="text-slate-600 text-sm">• Specialized in Google Ads & Meta Business Suite optimization.</p>
                </div>
            </div>
            <div class="w-full md:w-1/2 relative h-64 md:h-full">
                <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=800&auto=format&fit=crop" class="absolute inset-0 w-full h-full object-cover" alt="Marketing Analytics">
            </div>
        </div>
    </div>

    <div x-show="activeHomeModal === 'finance'" class="fixed inset-0 z-[100] flex items-center justify-center p-4 sm:p-6" x-cloak style="display: none;">
        <div x-show="activeHomeModal === 'finance'" x-transition.opacity class="fixed inset-0 bg-slate-900/90 backdrop-blur-sm" @click="activeHomeModal = null"></div>
        <div x-show="activeHomeModal === 'finance'" x-transition.scale class="relative bg-white rounded-3xl shadow-2xl overflow-hidden w-full max-w-5xl z-10 flex flex-col md:flex-row h-[80vh] md:h-[600px]">
            <div class="w-full md:w-1/2 relative h-64 md:h-full">
                <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?q=80&w=800&auto=format&fit=crop" class="absolute inset-0 w-full h-full object-cover" alt="Financial Bookkeeping">
            </div>
            <div class="w-full md:w-1/2 p-10 md:p-14 overflow-y-auto relative">
                <button @click="activeHomeModal = null" class="absolute top-6 right-6 text-slate-400 hover:text-slate-900 bg-slate-100 p-2 rounded-full"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg></button>
                <h2 class="text-4xl font-extrabold text-slate-900 mb-6">Financial Bookkeeping</h2>
                <p class="text-slate-600 mb-6">Scale with confidence knowing your numbers are accurate. We ensure your books are perfectly balanced and tax-ready all year round.</p>
                <ul class="space-y-3 mb-8 text-slate-600 font-medium">
                    <li class="flex items-center gap-3"><span class="text-green-500">✓</span> Certified QuickBooks Specialists</li>
                    <li class="flex items-center gap-3"><span class="text-green-500">✓</span> Monthly Profit & Loss (P&L) Generation</li>
                    <li class="flex items-center gap-3"><span class="text-green-500">✓</span> Invoicing & Accounts Receivable</li>
                </ul>
            </div>
        </div>
    </div>

    <div x-show="activeHomeModal === 'web'" class="fixed inset-0 z-[100] flex items-center justify-center p-4 sm:p-6" x-cloak style="display: none;">
        <div x-show="activeHomeModal === 'web'" x-transition.opacity class="fixed inset-0 bg-slate-900/90 backdrop-blur-sm" @click="activeHomeModal = null"></div>
        <div x-show="activeHomeModal === 'web'" x-transition.scale class="relative bg-white rounded-3xl shadow-2xl overflow-hidden w-full max-w-5xl z-10 flex flex-col md:flex-row h-[80vh] md:h-[600px]">
            <div class="w-full md:w-1/2 p-10 md:p-14 overflow-y-auto relative">
                <button @click="activeHomeModal = null" class="absolute top-6 right-6 md:right-auto md:left-6 text-slate-400 hover:text-slate-900 bg-slate-100 p-2 rounded-full z-20"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg></button>
                <h2 class="text-4xl font-extrabold text-slate-900 mb-6 mt-8 md:mt-0">Web Architecture</h2>
                <p class="text-slate-600 leading-relaxed mb-6">A website that is slow or insecure damages your brand. We build custom frameworks and maintain them daily to ensure 99.9% uptime.</p>
                <ul class="space-y-3 mb-8 text-slate-600 font-medium">
                    <li class="flex items-center gap-3"><span class="text-blue-500">✓</span> Full-Stack Custom Application Development</li>
                    <li class="flex items-center gap-3"><span class="text-blue-500">✓</span> Modern UI/UX Interactive Frontends</li>
                    <li class="flex items-center gap-3"><span class="text-blue-500">✓</span> Continuous Server Maintenance & Security Patching</li>
                </ul>
            </div>
            <div class="w-full md:w-1/2 relative h-64 md:h-full">
                <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?q=80&w=800&auto=format&fit=crop" class="absolute inset-0 w-full h-full object-cover" alt="Web Development Architecture">
            </div>
        </div>
    </div>

</div>
@endsection