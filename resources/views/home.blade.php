@extends('layouts.app')

@section('content')

<!-- 1. HOMEPAGE HERO SECTION -->
<div class="relative w-full py-32 md:py-48 flex items-center justify-center overflow-hidden bg-slate-900 border-b border-slate-800">
    <!-- Background Image & Gradient Overlay -->
    <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?q=80&w=2000&auto=format&fit=crop" class="w-full h-full object-cover opacity-30 mix-blend-overlay grayscale" alt="Cloud Dextra Remote Team">
        <div class="absolute inset-0 bg-gradient-to-b from-slate-900/95 via-[#1d2431]/90 to-slate-900/95"></div>
    </div>

    <!-- Main Content Container -->
    <div class="relative z-10 w-full max-w-5xl mx-auto px-6 text-center mt-10">
        <!-- Trust Badge -->
        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-slate-800/50 border border-slate-700 backdrop-blur-sm mb-8">
            <span class="flex h-2 w-2 rounded-full bg-cyan-400"></span>
            <span class="text-xs font-bold text-slate-300 uppercase tracking-widest">Top-Rated Operations Partner</span>
        </div>

        <!-- Headline -->
        <h1 class="text-5xl md:text-7xl font-extrabold text-white mb-6 tracking-tight drop-shadow-lg leading-tight">
            Get More Done Without Hiring a <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-cyan-300">Full In-House Team</span>
        </h1>
        
        <!-- Subheadline -->
        <p class="text-lg md:text-xl text-slate-300 max-w-3xl mx-auto font-light leading-relaxed mb-10">
            Cloud Dextra Solutions provides trained virtual assistants, digital marketing support, and website management for real estate professionals and growing service businesses.
        </p>

        <!-- CTA Buttons -->
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4 mb-12">
            <a href="{{ route('contact') }}" class="w-full sm:w-auto inline-flex items-center justify-center px-8 py-4 border border-transparent text-base md:text-lg font-bold rounded-full text-slate-900 bg-white hover:bg-blue-50 transition-colors shadow-[0_0_20px_rgba(34,211,238,0.2)] hover:shadow-[0_0_30px_rgba(34,211,238,0.4)] transform hover:-translate-y-1">
                Book a Free Operations Audit
            </a>
            <a href="{{ route('services') }}" class="w-full sm:w-auto inline-flex items-center justify-center px-8 py-4 border border-slate-600 text-base md:text-lg font-bold rounded-full text-white hover:bg-slate-800 hover:border-slate-500 transition-colors transform hover:-translate-y-1">
                Explore Our Services
            </a>
        </div>

        <!-- Trust Statements -->
        <div class="flex flex-wrap items-center justify-center gap-3 sm:gap-6 text-sm font-medium text-slate-400">
            <span class="flex items-center gap-2">
                <svg class="w-5 h-5 text-cyan-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg> 
                No long-term contracts
            </span>
            <span class="hidden sm:inline text-slate-700">|</span>
            <span class="flex items-center gap-2">
                <svg class="w-5 h-5 text-cyan-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg> 
                Dedicated account manager
            </span>
            <span class="hidden sm:inline text-slate-700">|</span>
            <span class="flex items-center gap-2">
                <svg class="w-5 h-5 text-cyan-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg> 
                Customized around your tools
            </span>
        </div>
    </div>
</div>

<!-- 2. TRUST BAR: Software & Tools -->
<div class="bg-white py-12 border-b border-slate-100">
    <div class="max-w-6xl mx-auto px-6 text-center">
        <p class="text-sm font-bold text-slate-400 uppercase tracking-widest mb-8">Experienced with the tools your business already uses</p>
        <div class="flex flex-wrap justify-center items-center gap-10 md:gap-16 opacity-70 grayscale">
            <span class="text-xl font-bold text-slate-800">WordPress</span>
            <span class="text-xl font-bold text-slate-800">QuickBooks</span>
            <span class="text-xl font-bold text-slate-800">HubSpot</span>
            <span class="text-xl font-bold text-slate-800">BoldTrail</span>
            <span class="text-xl font-bold text-slate-800">SkySlope</span>
            <span class="text-xl font-bold text-slate-800">Google Workspace</span>
        </div>
    </div>
</div>

<!-- 3. CORE SERVICES PILLARS -->
<div class="bg-slate-50 py-24">
    <div class="max-w-6xl mx-auto px-6">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-4xl font-extrabold text-slate-900 mb-6">Your Best Hours Should Not Be Spent on Repetitive Tasks</h2>
            <p class="text-lg text-slate-600">Cloud Dextra Solutions builds a support system around your business so essential work gets completed consistently, allowing you to focus on growth.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            
            <!-- Pillar 1: Virtual Operations -->
            <div class="relative rounded-3xl p-10 shadow-xl overflow-hidden hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 group border border-slate-200">
                <!-- Background Image & Overlay -->
                <div class="absolute inset-0 z-0">
                    <img src="https://images.unsplash.com/photo-1497215728101-856f4ea42174?q=80&w=800&auto=format&fit=crop" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 grayscale" alt="Virtual Operations Desk">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/90 to-slate-800/70 mix-blend-multiply"></div>
                </div>

                <!-- Content -->
                <div class="relative z-10">
                    <div class="w-14 h-14 bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl flex items-center justify-center mb-6 text-blue-400">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4">Virtual Operations</h3>
                    <p class="text-slate-300 mb-6 leading-relaxed">Delegate your CRM management, inbox organization, daily scheduling, transaction coordination, and routine administrative workflows.</p>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center text-sm font-medium text-slate-300"><svg class="w-5 h-5 text-cyan-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> CRM Database Cleanup</li>
                        <li class="flex items-center text-sm font-medium text-slate-300"><svg class="w-5 h-5 text-cyan-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Lead Routing & Follow-up</li>
                        <li class="flex items-center text-sm font-medium text-slate-300"><svg class="w-5 h-5 text-cyan-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Inbox & Calendar Management</li>
                    </ul>
                </div>
            </div>

            <!-- Pillar 2: Digital Growth -->
            <div class="relative rounded-3xl p-10 shadow-xl overflow-hidden hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 group border border-slate-200">
                <!-- Background Image & Overlay -->
                <div class="absolute inset-0 z-0">
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=800&auto=format&fit=crop" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 grayscale" alt="Digital Growth Charts">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/90 to-slate-800/70 mix-blend-multiply"></div>
                </div>

                <!-- Content -->
                <div class="relative z-10">
                    <div class="w-14 h-14 bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl flex items-center justify-center mb-6 text-cyan-400">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path></svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4">Digital Growth</h3>
                    <p class="text-slate-300 mb-6 leading-relaxed">Strengthen your online presence and attract qualified leads through managed web design, local SEO, and content support.</p>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center text-sm font-medium text-slate-300"><svg class="w-5 h-5 text-cyan-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Custom Web Architecture</li>
                        <li class="flex items-center text-sm font-medium text-slate-300"><svg class="w-5 h-5 text-cyan-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Local SEO Optimization</li>
                        <li class="flex items-center text-sm font-medium text-slate-300"><svg class="w-5 h-5 text-cyan-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Content & Social Media</li>
                    </ul>
                </div>
            </div>

            <!-- Pillar 3: Business Administration -->
            <div class="relative rounded-3xl p-10 shadow-xl overflow-hidden hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 group border border-slate-200">
                <!-- Background Image & Overlay -->
                <div class="absolute inset-0 z-0">
                    <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?q=80&w=800&auto=format&fit=crop" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 grayscale" alt="Business Admin Accounting">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/90 to-slate-800/70 mix-blend-multiply"></div>
                </div>

                <!-- Content -->
                <div class="relative z-10">
                    <div class="w-14 h-14 bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl flex items-center justify-center mb-6 text-indigo-400">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4">Business Admin</h3>
                    <p class="text-slate-300 mb-6 leading-relaxed">Keep your financials organized and your operations compliant with dedicated, experienced QuickBooks and bookkeeping support.</p>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center text-sm font-medium text-slate-300"><svg class="w-5 h-5 text-cyan-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> QuickBooks Data Entry</li>
                        <li class="flex items-center text-sm font-medium text-slate-300"><svg class="w-5 h-5 text-cyan-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Monthly Reconciliation</li>
                        <li class="flex items-center text-sm font-medium text-slate-300"><svg class="w-5 h-5 text-cyan-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Invoicing & Reporting</li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-12 relative z-10">
            <a href="{{ route('services') }}" class="text-blue-600 font-bold hover:text-blue-800 transition-colors inline-flex items-center gap-2">
                View full service details <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </a>
        </div>
    </div>
</div>

<!-- 4. HOW IT WORKS -->
<div class="bg-white py-24 border-t border-slate-100">
    <div class="max-w-6xl mx-auto px-6">
        <h2 class="text-3xl font-extrabold text-slate-900 mb-16 text-center">A Simple Process to Reclaim Your Time</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 relative">
            <div class="hidden md:block absolute top-8 left-[10%] right-[10%] h-0.5 bg-slate-100 z-0"></div>
            
            <div class="relative z-10 text-center">
                <div class="w-16 h-16 bg-slate-900 text-white rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-6 shadow-xl shadow-slate-200">1</div>
                <h4 class="text-xl font-bold text-slate-900 mb-2">Audit</h4>
                <p class="text-slate-600 text-sm">We review your current workflow to identify repetitive tasks costing you time.</p>
            </div>
            
            <div class="relative z-10 text-center">
                <div class="w-16 h-16 bg-blue-600 text-white rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-6 shadow-xl shadow-blue-200">2</div>
                <h4 class="text-xl font-bold text-slate-900 mb-2">Build Plan</h4>
                <p class="text-slate-600 text-sm">We create a customized operating plan detailing exactly what we will manage.</p>
            </div>
            
            <div class="relative z-10 text-center">
                <div class="w-16 h-16 bg-cyan-500 text-white rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-6 shadow-xl shadow-cyan-200">3</div>
                <h4 class="text-xl font-bold text-slate-900 mb-2">Assign Team</h4>
                <p class="text-slate-600 text-sm">You are assigned a dedicated specialist and account manager to execute the plan.</p>
            </div>

            <div class="relative z-10 text-center">
                <div class="w-16 h-16 bg-indigo-600 text-white rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-6 shadow-xl shadow-indigo-200">4</div>
                <h4 class="text-xl font-bold text-slate-900 mb-2">Measure</h4>
                <p class="text-slate-600 text-sm">We provide weekly reports showing exactly how much time and money you saved.</p>
            </div>
        </div>
    </div>
</div>

<!-- 4.5. FREQUENTLY ASKED QUESTIONS -->
<div class="bg-slate-50 py-24 border-t border-slate-100">
    <div class="max-w-4xl mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-extrabold text-slate-900 mb-4">Frequently Asked Questions</h2>
            <p class="text-lg text-slate-600">Everything you need to know about how we work, security, and getting started.</p>
        </div>

        <!-- Alpine.js Accordion Logic -->
        <div x-data="{ active: null }" class="space-y-4">
            
            <!-- FAQ Item 1 -->
            <div class="bg-white border border-slate-200 rounded-2xl overflow-hidden transition-all duration-300 hover:border-cyan-300 hover:shadow-md">
                <button @click="active = (active === 1 ? null : 1)" class="w-full flex items-center justify-between p-6 text-left focus:outline-none">
                    <span class="text-lg font-bold text-slate-900">Where is your team located and what time zones do you cover?</span>
                    <svg class="w-6 h-6 text-cyan-500 transform transition-transform duration-300" :class="{ 'rotate-180': active === 1 }" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
                <div x-show="active === 1" x-collapse x-cloak>
                    <div class="p-6 pt-0 text-slate-600 leading-relaxed border-t border-slate-50 mt-2">
                        Our core operational headquarters is located in Islamabad, Pakistan. By centralizing our team, we maintain strict quality control and data security. We align our working hours to seamlessly cover US, Canadian, and UK time zones, ensuring your dedicated specialist is online when your business needs them.
                    </div>
                </div>
            </div>

            <!-- FAQ Item 2 -->
            <div class="bg-white border border-slate-200 rounded-2xl overflow-hidden transition-all duration-300 hover:border-cyan-300 hover:shadow-md">
                <button @click="active = (active === 2 ? null : 2)" class="w-full flex items-center justify-between p-6 text-left focus:outline-none">
                    <span class="text-lg font-bold text-slate-900">How do you protect my passwords and sensitive business data?</span>
                    <svg class="w-6 h-6 text-cyan-500 transform transition-transform duration-300" :class="{ 'rotate-180': active === 2 }" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
                <div x-show="active === 2" x-collapse x-cloak>
                    <div class="p-6 pt-0 text-slate-600 leading-relaxed border-t border-slate-50 mt-2">
                        Data security is our top priority. We use enterprise-grade password managers (like LastPass or 1Password) so you never have to share raw passwords with us. Access is strictly granted on a least-privilege basis, and our entire team operates under strict NDAs and controlled network environments.
                    </div>
                </div>
            </div>

            <!-- FAQ Item 3 -->
            <div class="bg-white border border-slate-200 rounded-2xl overflow-hidden transition-all duration-300 hover:border-cyan-300 hover:shadow-md">
                <button @click="active = (active === 3 ? null : 3)" class="w-full flex items-center justify-between p-6 text-left focus:outline-none">
                    <span class="text-lg font-bold text-slate-900">Will I have a dedicated assistant, or a pool of random people?</span>
                    <svg class="w-6 h-6 text-cyan-500 transform transition-transform duration-300" :class="{ 'rotate-180': active === 3 }" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
                <div x-show="active === 3" x-collapse x-cloak>
                    <div class="p-6 pt-0 text-slate-600 leading-relaxed border-t border-slate-50 mt-2">
                        You will always have a <strong>dedicated specialist</strong> assigned specifically to your business, allowing them to learn your unique workflows and brand voice. Additionally, an Account Manager oversees your project to ensure quality and provide a backup layer of support if your primary specialist is ever unavailable.
                    </div>
                </div>
            </div>

            <!-- FAQ Item 4 -->
            <div class="bg-white border border-slate-200 rounded-2xl overflow-hidden transition-all duration-300 hover:border-cyan-300 hover:shadow-md">
                <button @click="active = (active === 4 ? null : 4)" class="w-full flex items-center justify-between p-6 text-left focus:outline-none">
                    <span class="text-lg font-bold text-slate-900">Am I locked into a long-term contract?</span>
                    <svg class="w-6 h-6 text-cyan-500 transform transition-transform duration-300" :class="{ 'rotate-180': active === 4 }" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
                <div x-show="active === 4" x-collapse x-cloak>
                    <div class="p-6 pt-0 text-slate-600 leading-relaxed border-t border-slate-50 mt-2">
                        No. We believe in earning your business every single month through measurable results. Our agreements are strictly month-to-month, and you can cancel or scale your services up or down with just a standard 14-day notice.
                    </div>
                </div>
            </div>

            <!-- FAQ Item 5 -->
            <div class="bg-white border border-slate-200 rounded-2xl overflow-hidden transition-all duration-300 hover:border-cyan-300 hover:shadow-md">
                <button @click="active = (active === 5 ? null : 5)" class="w-full flex items-center justify-between p-6 text-left focus:outline-none">
                    <span class="text-lg font-bold text-slate-900">How quickly can we start delegating tasks?</span>
                    <svg class="w-6 h-6 text-cyan-500 transform transition-transform duration-300" :class="{ 'rotate-180': active === 5 }" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
                <div x-show="active === 5" x-collapse x-cloak>
                    <div class="p-6 pt-0 text-slate-600 leading-relaxed border-t border-slate-50 mt-2">
                        After your initial Free Operations Audit, we will present a customized operating plan within 48 hours. Once approved, we typically complete onboarding, system access, and begin actively managing tasks within 3 to 5 business days.
                    </div>
                </div>
            </div>

        </div>
        
        <!-- FAQ Bottom CTA -->
        <div class="mt-12 text-center">
            <p class="text-slate-600 mb-4">Still have questions?</p>
            <a href="{{ route('contact') }}" class="text-blue-600 font-bold hover:text-blue-800 transition-colors inline-flex items-center gap-2">
                Ask our team <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </a>
        </div>
    </div>
</div>

<!-- 5. CASE STUDY -->
<div class="bg-slate-900 py-24 relative overflow-hidden">
    <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1550751827-4bd374c3f58b?q=80&w=2000&auto=format&fit=crop')] opacity-10 bg-cover bg-center"></div>
    <div class="max-w-6xl mx-auto px-6 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div>
                <h2 class="text-3xl md:text-4xl font-extrabold text-white mb-6">Real Results. <br><span class="text-cyan-400">Measured in Time Saved.</span></h2>
                <p class="text-slate-300 mb-8 leading-relaxed">
                    We don't just complete tasks; we fix broken systems. Here is an example of what happens when a growing business delegates their CRM and lead routing to our team.
                </p>
                <a href="{{ route('contact') }}" class="inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-bold rounded-full text-slate-900 bg-cyan-400 hover:bg-cyan-300 transition-colors shadow-lg shadow-cyan-500/30">
                    Discuss Your Project
                </a>
            </div>
            
            <div class="bg-white/10 backdrop-blur-md rounded-3xl p-8 border border-white/20">
                <div class="mb-6">
                    <span class="text-xs font-bold text-cyan-400 uppercase tracking-widest">Case Study Example</span>
                </div>
                <p class="text-white italic text-lg mb-8">
                    "A local real estate team had 6,500 unorganized CRM contacts and an average lead-response time of five hours. Cloud Dextra Solutions cleaned the database, created routing rules, and implemented daily follow-up workflows."
                </p>
                <div class="grid grid-cols-2 gap-6 border-t border-white/20 pt-6">
                    <div>
                        <div class="text-3xl font-extrabold text-white mb-1">5 Hrs <span class="text-cyan-400">→</span> 18 Min</div>
                        <div class="text-sm text-slate-400 font-medium">Lead Response Time</div>
                    </div>
                    <div>
                        <div class="text-3xl font-extrabold text-white mb-1">42</div>
                        <div class="text-sm text-slate-400 font-medium">Dormant Leads Reactivated</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection