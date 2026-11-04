@extends('layouts.app')

@section('content')

<!-- Global Alpine State Wrap for Entire Homepage -->
<div x-data="{
    // Modal State
    isModalOpen: false,
    currentStep: 1,
    formData: {
        industry: 'Real Estate',
        bottleneck: 'CRM & Lead Follow-ups',
        teamSize: 'Solo / Independent',
        name: '',
        email: '',
        phone: ''
    },
    selectStepOption(field, value) {
        this.formData[field] = value;
        if(this.currentStep < 4) this.currentStep++;
    },
    resetModal() {
        this.currentStep = 1;
        this.formData.name = '';
        this.formData.email = '';
        this.formData.phone = '';
    },

}">

    <!-- 1. HOMEPAGE HERO SECTION -->
    <div class="relative w-full py-28 md:py-44 flex items-center justify-center overflow-hidden bg-slate-900 border-b border-slate-800">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?q=80&w=2000&auto=format&fit=crop" class="w-full h-full object-cover opacity-25 mix-blend-overlay grayscale" alt="Cloud Dextra Remote Team">
            <div class="absolute inset-0 bg-gradient-to-b from-slate-900/95 via-slate-900/90 to-slate-900"></div>
        </div>

        <div class="relative z-10 w-full max-w-5xl mx-auto px-6 text-center mt-4">
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-slate-800/80 border border-slate-700/80 backdrop-blur-md mb-8">
                <span class="flex h-2 w-2 rounded-full bg-cyan-400 animate-pulse"></span>
                <span class="text-xs font-semibold text-slate-300 tracking-wider uppercase">Top-Rated Operations Partner</span>
            </div>

            <h1 class="text-4xl sm:text-6xl md:text-7xl font-extrabold text-white mb-6 tracking-tight leading-[1.15]">
                Get More Done Without Hiring a <br class="hidden sm:inline" />
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 via-cyan-300 to-teal-200">Full In-House Team</span>
            </h1>
            
            <p class="text-base sm:text-lg md:text-xl text-slate-300 max-w-3xl mx-auto font-normal leading-relaxed mb-10">
                Cloud Dextra provides trained virtual assistants, digital marketing support, and website management for real estate professionals and growing service businesses.
            </p>

            <div class="flex flex-col sm:flex-row items-center justify-center gap-4 mb-14">
                <button @click="isModalOpen = true; resetModal();" class="w-full sm:w-auto inline-flex items-center justify-center px-7 py-3.5 border border-transparent text-base font-bold rounded-full text-slate-950 bg-white hover:bg-slate-100 active:bg-slate-200 focus:outline-none transition-all duration-200 shadow-lg shadow-cyan-500/10 hover:shadow-cyan-500/20 transform hover:-translate-y-0.5">
                    Book a Free Operations Audit
                </button>
               
            </div>

            <div class="flex flex-wrap items-center justify-center gap-y-3 gap-x-6 sm:gap-x-8 text-xs sm:text-sm font-medium text-slate-400">
                <span class="flex items-center gap-2"><svg class="w-4 h-4 text-cyan-400 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg> No long-term contracts</span>
                <span class="hidden sm:inline text-slate-800">|</span>
                <span class="flex items-center gap-2"><svg class="w-4 h-4 text-cyan-400 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg> Dedicated account manager</span>
                <span class="hidden sm:inline text-slate-800">|</span>
                <span class="flex items-center gap-2"><svg class="w-4 h-4 text-cyan-400 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg> Customized around your tools</span>
            </div>
        </div>
    </div>

    <!-- 2. TRUST BAR: Software Logos -->
    <div class="bg-white py-12 border-b border-slate-100">
        <div class="max-w-6xl mx-auto px-6 text-center">
            <p class="text-xs font-bold text-slate-400 uppercase tracking-widest mb-8">Experienced with the tools your business already uses</p>
            <div class="flex flex-wrap justify-center items-center gap-8 md:gap-14 opacity-75">
                <span class="text-lg font-bold text-slate-700">WordPress</span>
                <span class="text-lg font-bold text-slate-700">QuickBooks</span>
                <span class="text-lg font-bold text-slate-700">HubSpot</span>
                <span class="text-lg font-bold text-slate-700">BoldTrail</span>
                <span class="text-lg font-bold text-slate-700">SkySlope</span>
                <span class="text-lg font-bold text-slate-700">Google Workspace</span>
            </div>
        </div>
    </div>

    

    <!-- 3. CORE SERVICES PILLARS -->
    <div class="bg-slate-50 py-24">
        <div class="max-w-6xl mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 mb-4 tracking-tight">Your Best Hours Should Not Be Spent on Repetitive Tasks</h2>
                <p class="text-base md:text-lg text-slate-600 font-normal">Cloud Dextra builds a support system around your business so essential work gets completed consistently, allowing you to focus on growth.</p>
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
                <!-- Pillar 2 -->
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

    <!-- 3.5. TESTIMONIALS SECTION (TRUE INFINITE SCROLL + NATIVE DRAG/SWIPE ENABLED) -->
    <div class="bg-white py-24 border-t border-slate-100 overflow-hidden relative">
        
        <div class="max-w-6xl mx-auto px-6 mb-16 text-center select-none">
            <span class="text-xs font-bold text-cyan-600 uppercase tracking-widest bg-cyan-50 px-3.5 py-1.5 rounded-full border border-cyan-100/80">Client Success Stories</span>
            <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 mt-4 mb-3 tracking-tight">Real Results for Real Businesses</h2>
            <p class="text-slate-600 text-base md:text-lg">Here is what happened when business owners handed over their back-office operations to us.</p>
        </div>

        <!-- Carousel Container with Fade Mask -->
        <div class="relative w-full py-4 overflow-hidden" 
             x-data="{
                speed: 0.8, // Adjust constant scrolling speed
                init() {
                    const el = this.$refs.scrollBox;
                    
                    // Set initial position to the middle clone set
                    const setWidth = el.scrollWidth / 3;
                    el.scrollLeft = setWidth;

                    const step = () => {
                        // Constant linear auto-scroll increment
                        el.scrollLeft += this.speed;

                        // Seamless loop boundary check without visual snap
                        if (el.scrollLeft >= setWidth * 2) {
                            el.scrollLeft -= setWidth;
                        } else if (el.scrollLeft <= 0) {
                            el.scrollLeft += setWidth;
                        }

                        requestAnimationFrame(step);
                    };

                    requestAnimationFrame(step);
                }
             }">

            <!-- Side Gradient Shadows for Soft Blend -->
            <div class="absolute left-0 top-0 bottom-0 w-16 sm:w-32 bg-gradient-to-r from-white to-transparent z-10 pointer-events-none"></div>
            <div class="absolute right-0 top-0 bottom-0 w-16 sm:w-32 bg-gradient-to-l from-white to-transparent z-10 pointer-events-none"></div>

            <!-- Scrollable Track -->
            <div x-ref="scrollBox" 
                 class="flex gap-8 overflow-x-auto scrollbar-none py-2 px-6 active:cursor-grabbing cursor-grab will-change-transform"
                 style="scrollbar-width: none; -ms-overflow-style: none;">
                
                <!-- ================= SET 1 ================= -->
                <!-- CARD 1 (David Miller) -->
                <div class="w-[320px] sm:w-[450px] md:w-[500px] bg-slate-50/80 border border-slate-200/80 rounded-3xl p-8 shadow-sm hover:shadow-xl hover:border-cyan-300 transition-all duration-300 flex flex-col justify-between relative overflow-hidden group shrink-0 select-none">
                    <div class="absolute top-0 right-0 w-28 h-28 bg-cyan-500/5 rounded-bl-full pointer-events-none group-hover:scale-110 transition-transform duration-300"></div>
                    <div>
                        <div class="flex items-center justify-between mb-6">
                            <div class="flex text-amber-400 gap-1">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            </div>
                            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-emerald-50 text-emerald-700 border border-emerald-200/80">
                                <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                                Verified Client
                            </span>
                        </div>
                        <p class="text-slate-700 text-base md:text-lg leading-relaxed mb-8 italic font-normal">
                            "Bookkeeping backlog was my biggest headache every month. Cloud Dextra took over our QuickBooks categorization and weekly invoice reconciliation. Taxes are stress-free now, and I save at least 20 hours of manual work every single month."
                        </p>
                    </div>
                    <div class="flex items-center gap-4 pt-6 border-t border-slate-200/60">
                        <div>
                            <h4 class="font-bold text-slate-900 text-base leading-tight">David Miller</h4>
                        </div>
                    </div>
                </div>

                <!-- CARD 2 -->
                <div class="w-[320px] sm:w-[450px] md:w-[500px] bg-slate-50/80 border border-slate-200/80 rounded-3xl p-8 shadow-sm hover:shadow-xl hover:border-cyan-300 transition-all duration-300 flex flex-col justify-between relative overflow-hidden group shrink-0 select-none">
                    <div class="absolute top-0 right-0 w-28 h-28 bg-cyan-500/5 rounded-bl-full pointer-events-none group-hover:scale-110 transition-transform duration-300"></div>
                    <div>
                        <div class="flex items-center justify-between mb-6">
                            <div class="flex text-amber-400 gap-1">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            </div>
                            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-emerald-50 text-emerald-700 border border-emerald-200/80">
                                <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                                Verified Client
                            </span>
                        </div>
                        <p class="text-slate-700 text-base md:text-lg leading-relaxed mb-8 italic font-normal">
                            "Finding reliable specialists for client WordPress updates and local citations was a constant bottleneck. Cloud Dextra assigned us a trained operations team that handles technical updates cleanly. Their communication is proactive, structured, and reliable."
                        </p>
                    </div>
                    <div class="flex items-center gap-4 pt-6 border-t border-slate-200/60">
                        <div>
                            <h4 class="font-bold text-slate-900 text-base leading-tight">Sarah Jenkins</h4>
                        </div>
                    </div>
                </div>

                <!-- CARD 3 (Shane Paiz) -->
                <div class="w-[320px] sm:w-[450px] md:w-[500px] bg-slate-50/80 border border-slate-200/80 rounded-3xl p-8 shadow-sm hover:shadow-xl hover:border-cyan-300 transition-all duration-300 flex flex-col justify-between relative overflow-hidden group shrink-0 select-none">
                    <div class="absolute top-0 right-0 w-28 h-28 bg-cyan-500/5 rounded-bl-full pointer-events-none group-hover:scale-110 transition-transform duration-300"></div>
                    <div>
                        <div class="flex items-center justify-between mb-6">
                            <div class="flex text-amber-400 gap-1">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            </div>
                            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-emerald-50 text-emerald-700 border border-emerald-200/80">
                                <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                                Verified Client
                            </span>
                        </div>
                        <p class="text-slate-700 text-base md:text-lg leading-relaxed mb-8 italic font-normal">
                            "Managing 12+ active property listings meant I was constantly dropping the ball on CRM follow-ups in BoldTrail. Cloud Dextra stepped in and organized our entire pipeline within a week. Lead response times dropped from 4 hours to under 15 minutes."
                        </p>
                    </div>
                    <div class="flex items-center gap-4 pt-6 border-t border-slate-200/60">
                        <img src="{{ asset('Images/shane-paiz.png') }}" class="w-11 h-11 rounded-full object-cover ring-2 ring-slate-200 pointer-events-none" alt="Shane Paiz">
                        <div>
                            <h4 class="font-bold text-slate-900 text-base leading-tight">Shane Paiz</h4>
                            <p class="text-xs text-slate-500 font-medium mt-0.5">eXp Realty (USA)</p>
                        </div>
                    </div>
                </div>

                <!-- CARD 4 -->
                <div class="w-[320px] sm:w-[450px] md:w-[500px] bg-slate-50/80 border border-slate-200/80 rounded-3xl p-8 shadow-sm hover:shadow-xl hover:border-cyan-300 transition-all duration-300 flex flex-col justify-between relative overflow-hidden group shrink-0 select-none">
                    <div class="absolute top-0 right-0 w-28 h-28 bg-cyan-500/5 rounded-bl-full pointer-events-none group-hover:scale-110 transition-transform duration-300"></div>
                    <div>
                        <div class="flex items-center justify-between mb-6">
                            <div class="flex text-amber-400 gap-1">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            </div>
                            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-emerald-50 text-emerald-700 border border-emerald-200/80">
                                <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                                Verified Client
                            </span>
                        </div>
                        <p class="text-slate-700 text-base md:text-lg leading-relaxed mb-8 italic font-normal">
                            "What stood out to us was how easily they integrated with SkySlope and Google Workspace. Instead of spending money on local hiring overhead, we got a dedicated virtual operations team that works within our exact time zone."
                        </p>
                    </div>
                    <div class="flex items-center gap-4 pt-6 border-t border-slate-200/60">
                        <div>
                            <h4 class="font-bold text-slate-900 text-base leading-tight">Elena Rostova</h4>
                        </div>
                    </div>
                </div>

                <!-- ================= SET 2 (CLONE 1) ================= -->
                <!-- CARD 1 (David Miller) -->
                <div class="w-[320px] sm:w-[450px] md:w-[500px] bg-slate-50/80 border border-slate-200/80 rounded-3xl p-8 shadow-sm hover:shadow-xl hover:border-cyan-300 transition-all duration-300 flex flex-col justify-between relative overflow-hidden group shrink-0 select-none">
                    <div class="absolute top-0 right-0 w-28 h-28 bg-cyan-500/5 rounded-bl-full pointer-events-none group-hover:scale-110 transition-transform duration-300"></div>
                    <div>
                        <div class="flex items-center justify-between mb-6">
                            <div class="flex text-amber-400 gap-1">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            </div>
                            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-emerald-50 text-emerald-700 border border-emerald-200/80">
                                <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                                Verified Client
                            </span>
                        </div>
                        <p class="text-slate-700 text-base md:text-lg leading-relaxed mb-8 italic font-normal">
                            "Bookkeeping backlog was my biggest headache every month. Cloud Dextra took over our QuickBooks categorization and weekly invoice reconciliation. Taxes are stress-free now, and I save at least 20 hours of manual work every single month."
                        </p>
                    </div>
                    <div class="flex items-center gap-4 pt-6 border-t border-slate-200/60">
                        <div>
                            <h4 class="font-bold text-slate-900 text-base leading-tight">David Miller</h4>
                        </div>
                    </div>
                </div>

                <!-- CARD 2 -->
                <div class="w-[320px] sm:w-[450px] md:w-[500px] bg-slate-50/80 border border-slate-200/80 rounded-3xl p-8 shadow-sm hover:shadow-xl hover:border-cyan-300 transition-all duration-300 flex flex-col justify-between relative overflow-hidden group shrink-0 select-none">
                    <div class="absolute top-0 right-0 w-28 h-28 bg-cyan-500/5 rounded-bl-full pointer-events-none group-hover:scale-110 transition-transform duration-300"></div>
                    <div>
                        <div class="flex items-center justify-between mb-6">
                            <div class="flex text-amber-400 gap-1">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            </div>
                            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-emerald-50 text-emerald-700 border border-emerald-200/80">
                                <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                                Verified Client
                            </span>
                        </div>
                        <p class="text-slate-700 text-base md:text-lg leading-relaxed mb-8 italic font-normal">
                            "Finding reliable specialists for client WordPress updates and local citations was a constant bottleneck. Cloud Dextra assigned us a trained operations team that handles technical updates cleanly. Their communication is proactive, structured, and reliable."
                        </p>
                    </div>
                    <div class="flex items-center gap-4 pt-6 border-t border-slate-200/60">
                        <div>
                            <h4 class="font-bold text-slate-900 text-base leading-tight">Sarah Jenkins</h4>
                        </div>
                    </div>
                </div>

                <!-- CARD 3 (Shane Paiz) -->
                <div class="w-[320px] sm:w-[450px] md:w-[500px] bg-slate-50/80 border border-slate-200/80 rounded-3xl p-8 shadow-sm hover:shadow-xl hover:border-cyan-300 transition-all duration-300 flex flex-col justify-between relative overflow-hidden group shrink-0 select-none">
                    <div class="absolute top-0 right-0 w-28 h-28 bg-cyan-500/5 rounded-bl-full pointer-events-none group-hover:scale-110 transition-transform duration-300"></div>
                    <div>
                        <div class="flex items-center justify-between mb-6">
                            <div class="flex text-amber-400 gap-1">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            </div>
                            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-emerald-50 text-emerald-700 border border-emerald-200/80">
                                <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                                Verified Client
                            </span>
                        </div>
                        <p class="text-slate-700 text-base md:text-lg leading-relaxed mb-8 italic font-normal">
                            "Managing 12+ active property listings meant I was constantly dropping the ball on CRM follow-ups in BoldTrail. Cloud Dextra stepped in and organized our entire pipeline within a week. Lead response times dropped from 4 hours to under 15 minutes."
                        </p>
                    </div>
                    <div class="flex items-center gap-4 pt-6 border-t border-slate-200/60">
                        <img src="{{ asset('Images/shane-paiz.png') }}" class="w-11 h-11 rounded-full object-cover ring-2 ring-slate-200 pointer-events-none" alt="Shane Paiz">
                        <div>
                            <h4 class="font-bold text-slate-900 text-base leading-tight">Shane Paiz</h4>
                            <p class="text-xs text-slate-500 font-medium mt-0.5">eXp Realty (USA)</p>
                        </div>
                    </div>
                </div>

                <!-- CARD 4 -->
                <div class="w-[320px] sm:w-[450px] md:w-[500px] bg-slate-50/80 border border-slate-200/80 rounded-3xl p-8 shadow-sm hover:shadow-xl hover:border-cyan-300 transition-all duration-300 flex flex-col justify-between relative overflow-hidden group shrink-0 select-none">
                    <div class="absolute top-0 right-0 w-28 h-28 bg-cyan-500/5 rounded-bl-full pointer-events-none group-hover:scale-110 transition-transform duration-300"></div>
                    <div>
                        <div class="flex items-center justify-between mb-6">
                            <div class="flex text-amber-400 gap-1">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            </div>
                            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-emerald-50 text-emerald-700 border border-emerald-200/80">
                                <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                                Verified Client
                            </span>
                        </div>
                        <p class="text-slate-700 text-base md:text-lg leading-relaxed mb-8 italic font-normal">
                            "What stood out to us was how easily they integrated with SkySlope and Google Workspace. Instead of spending money on local hiring overhead, we got a dedicated virtual operations team that works within our exact time zone."
                        </p>
                    </div>
                    <div class="flex items-center gap-4 pt-6 border-t border-slate-200/60">
                        <div>
                            <h4 class="font-bold text-slate-900 text-base leading-tight">Elena Rostova</h4>
                        </div>
                    </div>
                </div>

                <!-- ================= SET 3 (CLONE 2) ================= -->
                <!-- CARD 1 (David Miller) -->
                <div class="w-[320px] sm:w-[450px] md:w-[500px] bg-slate-50/80 border border-slate-200/80 rounded-3xl p-8 shadow-sm hover:shadow-xl hover:border-cyan-300 transition-all duration-300 flex flex-col justify-between relative overflow-hidden group shrink-0 select-none">
                    <div class="absolute top-0 right-0 w-28 h-28 bg-cyan-500/5 rounded-bl-full pointer-events-none group-hover:scale-110 transition-transform duration-300"></div>
                    <div>
                        <div class="flex items-center justify-between mb-6">
                            <div class="flex text-amber-400 gap-1">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            </div>
                            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-emerald-50 text-emerald-700 border border-emerald-200/80">
                                <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                                Verified Client
                            </span>
                        </div>
                        <p class="text-slate-700 text-base md:text-lg leading-relaxed mb-8 italic font-normal">
                            "Bookkeeping backlog was my biggest headache every month. Cloud Dextra took over our QuickBooks categorization and weekly invoice reconciliation. Taxes are stress-free now, and I save at least 20 hours of manual work every single month."
                        </p>
                    </div>
                    <div class="flex items-center gap-4 pt-6 border-t border-slate-200/60">
                        <div>
                            <h4 class="font-bold text-slate-900 text-base leading-tight">David Miller</h4>
                        </div>
                    </div>
                </div>

                <!-- CARD 2 -->
                <div class="w-[320px] sm:w-[450px] md:w-[500px] bg-slate-50/80 border border-slate-200/80 rounded-3xl p-8 shadow-sm hover:shadow-xl hover:border-cyan-300 transition-all duration-300 flex flex-col justify-between relative overflow-hidden group shrink-0 select-none">
                    <div class="absolute top-0 right-0 w-28 h-28 bg-cyan-500/5 rounded-bl-full pointer-events-none group-hover:scale-110 transition-transform duration-300"></div>
                    <div>
                        <div class="flex items-center justify-between mb-6">
                            <div class="flex text-amber-400 gap-1">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            </div>
                            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-emerald-50 text-emerald-700 border border-emerald-200/80">
                                <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                                Verified Client
                            </span>
                        </div>
                        <p class="text-slate-700 text-base md:text-lg leading-relaxed mb-8 italic font-normal">
                            "Finding reliable specialists for client WordPress updates and local citations was a constant bottleneck. Cloud Dextra assigned us a trained operations team that handles technical updates cleanly. Their communication is proactive, structured, and reliable."
                        </p>
                    </div>
                    <div class="flex items-center gap-4 pt-6 border-t border-slate-200/60">
                        <div>
                            <h4 class="font-bold text-slate-900 text-base leading-tight">Sarah Jenkins</h4>
                        </div>
                    </div>
                </div>

                <!-- CARD 3 (Shane Paiz) -->
                <div class="w-[320px] sm:w-[450px] md:w-[500px] bg-slate-50/80 border border-slate-200/80 rounded-3xl p-8 shadow-sm hover:shadow-xl hover:border-cyan-300 transition-all duration-300 flex flex-col justify-between relative overflow-hidden group shrink-0 select-none">
                    <div class="absolute top-0 right-0 w-28 h-28 bg-cyan-500/5 rounded-bl-full pointer-events-none group-hover:scale-110 transition-transform duration-300"></div>
                    <div>
                        <div class="flex items-center justify-between mb-6">
                            <div class="flex text-amber-400 gap-1">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            </div>
                            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-emerald-50 text-emerald-700 border border-emerald-200/80">
                                <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                                Verified Client
                            </span>
                        </div>
                        <p class="text-slate-700 text-base md:text-lg leading-relaxed mb-8 italic font-normal">
                            "Managing 12+ active property listings meant I was constantly dropping the ball on CRM follow-ups in BoldTrail. Cloud Dextra stepped in and organized our entire pipeline within a week. Lead response times dropped from 4 hours to under 15 minutes."
                        </p>
                    </div>
                    <div class="flex items-center gap-4 pt-6 border-t border-slate-200/60">
                        <img src="{{ asset('Images/shane-paiz.png') }}" class="w-11 h-11 rounded-full object-cover ring-2 ring-slate-200 pointer-events-none" alt="Shane Paiz">
                        <div>
                            <h4 class="font-bold text-slate-900 text-base leading-tight">Shane Paiz</h4>
                            <p class="text-xs text-slate-500 font-medium mt-0.5">eXp Realty (USA)</p>
                        </div>
                    </div>
                </div>

                <!-- CARD 4 -->
                <div class="w-[320px] sm:w-[450px] md:w-[500px] bg-slate-50/80 border border-slate-200/80 rounded-3xl p-8 shadow-sm hover:shadow-xl hover:border-cyan-300 transition-all duration-300 flex flex-col justify-between relative overflow-hidden group shrink-0 select-none">
                    <div class="absolute top-0 right-0 w-28 h-28 bg-cyan-500/5 rounded-bl-full pointer-events-none group-hover:scale-110 transition-transform duration-300"></div>
                    <div>
                        <div class="flex items-center justify-between mb-6">
                            <div class="flex text-amber-400 gap-1">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            </div>
                            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-emerald-50 text-emerald-700 border border-emerald-200/80">
                                <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                                Verified Client
                            </span>
                        </div>
                        <p class="text-slate-700 text-base md:text-lg leading-relaxed mb-8 italic font-normal">
                            "What stood out to us was how easily they integrated with SkySlope and Google Workspace. Instead of spending money on local hiring overhead, we got a dedicated virtual operations team that works within our exact time zone."
                        </p>
                    </div>
                    <div class="flex items-center gap-4 pt-6 border-t border-slate-200/60">
                        <div>
                            <h4 class="font-bold text-slate-900 text-base leading-tight">Elena Rostova</h4>
                        </div>
                    </div>
                </div>

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
<div x-data="{ active: null }" class="flex flex-col gap-4">
    <!-- 4. FREQUENTLY ASKED QUESTIONS -->
    <div class="bg-slate-50 py-24 border-t border-slate-100">
        <div class="max-w-4xl mx-auto px-6">
            <div class="text-center mb-16">
                <span class="text-xs font-bold text-cyan-600 uppercase tracking-widest bg-cyan-50 px-3.5 py-1.5 rounded-full border border-cyan-100/80">Got Questions?</span>
                <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 mt-4 mb-3 tracking-tight">Frequently Asked Questions</h2>
                <p class="text-base md:text-lg text-slate-600 max-w-2xl mx-auto">Everything you need to know about how we work, security, and getting started.</p>
            </div>

            <div x-data="{ activeFaq: null }" class="space-y-4">
                 <!-- FAQ Item 1 -->
            <div class="bg-white border border-slate-200 rounded-2xl overflow-hidden transition-all duration-300 hover:border-cyan-300 hover:shadow-md">
                <button @click="active = (active === 1 ? null : 1)" class="w-full flex items-center justify-between p-6 text-left focus:outline-none">
                    <span class="text-lg font-bold text-slate-900">Where is your team located and what time zones do you cover?</span>
                    <svg class="w-6 h-6 text-cyan-500 transform transition-transform duration-300" :class="{ 'rotate-180': active === 1 }" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
                <div x-show="active === 1" x-collapse x-cloak>
                    <div class="p-6 pt-0 text-slate-600 leading-relaxed border-t border-slate-50 mt-2">
                        Cloud Dextra LLC is a US company registered in New Mexico, and our delivery team works from Islamabad, Pakistan. By centralizing our team, we maintain strict quality control and data security. We align our working hours to seamlessly cover US, Canadian, and UK time zones, ensuring your dedicated specialist is online when your business needs them.
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
            
            <div class="mt-12 text-center">
                <p class="text-slate-600 mb-3 font-medium">Still have questions?</p>
                <a href="{{ route('contact') }}" class="text-blue-600 font-bold hover:text-blue-800 transition-colors inline-flex items-center gap-2 group text-base">
                    Ask our team <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
            </div>
        </div>
    </div>

    <!-- FEATURE B: MULTI-STEP AUDIT WIZARD MODAL -->
    <div x-show="isModalOpen" 
         x-cloak 
         class="fixed inset-0 z-50 flex items-center justify-center p-4 sm:p-6 overflow-y-auto"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0">
        
        <div class="fixed inset-0 bg-slate-950/80 backdrop-blur-sm" @click="isModalOpen = false"></div>

        <div class="relative bg-slate-900 border border-slate-800 rounded-3xl w-full max-w-2xl p-6 sm:p-10 shadow-2xl z-10 text-left overflow-hidden">
            <button @click="isModalOpen = false" class="absolute top-6 right-6 text-slate-400 hover:text-white transition-colors p-2 rounded-full hover:bg-slate-800">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>

            <div class="mb-8">
                <div class="flex justify-between items-center text-xs font-bold text-slate-400 uppercase tracking-widest mb-2">
                    <span>Operations Audit</span>
                    <span x-text="'Step ' + currentStep + ' of 4'"></span>
                </div>
                <div class="w-full bg-slate-800 h-2 rounded-full overflow-hidden">
                    <div class="bg-gradient-to-r from-blue-500 to-cyan-400 h-full transition-all duration-300" :style="'width: ' + (currentStep * 25) + '%'"></div>
                </div>
            </div>

            <!-- STEP 1 -->
            <div x-show="currentStep === 1">
                <h3 class="text-2xl font-bold text-white mb-2">What is your primary business field?</h3>
                <p class="text-sm text-slate-400 mb-6">Select your sector so we can align our specialist expertise.</p>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <button @click="selectStepOption('industry', 'Real Estate Agent / Broker')" class="p-5 rounded-2xl border text-left transition-all hover:-translate-y-0.5" :class="formData.industry === 'Real Estate Agent / Broker' ? 'bg-cyan-950/40 border-cyan-500 text-white' : 'bg-slate-950 border-slate-800 text-slate-300 hover:border-slate-700'">
                        <span class="block font-bold text-base mb-1">Real Estate</span>
                        <span class="text-xs text-slate-400">Agents, brokers, transaction coordination & CRM</span>
                    </button>
                    <button @click="selectStepOption('industry', 'Small Business Owner')" class="p-5 rounded-2xl border text-left transition-all hover:-translate-y-0.5" :class="formData.industry === 'Small Business Owner' ? 'bg-cyan-950/40 border-cyan-500 text-white' : 'bg-slate-950 border-slate-800 text-slate-300 hover:border-slate-700'">
                        <span class="block font-bold text-base mb-1">Service Business</span>
                        <span class="text-xs text-slate-400">Local services, bookkeeping & admin back-office</span>
                    </button>
                    <button @click="selectStepOption('industry', 'Digital Agency / Founder')" class="p-5 rounded-2xl border text-left transition-all hover:-translate-y-0.5" :class="formData.industry === 'Digital Agency / Founder' ? 'bg-cyan-950/40 border-cyan-500 text-white' : 'bg-slate-950 border-slate-800 text-slate-300 hover:border-slate-700'">
                        <span class="block font-bold text-base mb-1">Agency / Marketing</span>
                        <span class="text-xs text-slate-400">SEO execution, web support & content creation</span>
                    </button>
                    <button @click="selectStepOption('industry', 'Other')" class="p-5 rounded-2xl border text-left transition-all hover:-translate-y-0.5" :class="formData.industry === 'Other' ? 'bg-cyan-950/40 border-cyan-500 text-white' : 'bg-slate-950 border-slate-800 text-slate-300 hover:border-slate-700'">
                        <span class="block font-bold text-base mb-1">Other Professional Services</span>
                        <span class="text-xs text-slate-400">Custom virtual administrative support</span>
                    </button>
                </div>
            </div>

            <!-- STEP 2 -->
            <div x-show="currentStep === 2">
                <h3 class="text-2xl font-bold text-white mb-2">What is your biggest operational bottleneck?</h3>
                <p class="text-sm text-slate-400 mb-6">Where are you losing most of your productive hours?</p>

                <div class="space-y-3">
                    <button @click="selectStepOption('bottleneck', 'CRM & Lead Follow-ups')" class="w-full p-4 rounded-2xl border text-left transition-all flex justify-between items-center" :class="formData.bottleneck === 'CRM & Lead Follow-ups' ? 'bg-cyan-950/40 border-cyan-500 text-white' : 'bg-slate-950 border-slate-800 text-slate-300 hover:border-slate-700'">
                        <span class="font-bold text-sm">CRM Unorganized & Slow Lead Follow-up</span>
                        <svg class="w-4 h-4 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </button>
                    <button @click="selectStepOption('bottleneck', 'Bookkeeping & QuickBooks')" class="w-full p-4 rounded-2xl border text-left transition-all flex justify-between items-center" :class="formData.bottleneck === 'Bookkeeping & QuickBooks' ? 'bg-cyan-950/40 border-cyan-500 text-white' : 'bg-slate-950 border-slate-800 text-slate-300 hover:border-slate-700'">
                        <span class="font-bold text-sm">Bookkeeping & QuickBooks Data Reconciliation</span>
                        <svg class="w-4 h-4 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </button>
                    <button @click="selectStepOption('bottleneck', 'Web Maintenance & Local SEO')" class="w-full p-4 rounded-2xl border text-left transition-all flex justify-between items-center" :class="formData.bottleneck === 'Web Maintenance & Local SEO' ? 'bg-cyan-950/40 border-cyan-500 text-white' : 'bg-slate-950 border-slate-800 text-slate-300 hover:border-slate-700'">
                        <span class="font-bold text-sm">Website Updates & Local SEO Management</span>
                        <svg class="w-4 h-4 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </button>
                    <button @click="selectStepOption('bottleneck', 'General Admin & Inbox')" class="w-full p-4 rounded-2xl border text-left transition-all flex justify-between items-center" :class="formData.bottleneck === 'General Admin & Inbox' ? 'bg-cyan-950/40 border-cyan-500 text-white' : 'bg-slate-950 border-slate-800 text-slate-300 hover:border-slate-700'">
                        <span class="font-bold text-sm">Overwhelmed Email Inbox & Daily Scheduling</span>
                        <svg class="w-4 h-4 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </button>
                </div>
            </div>

            <!-- STEP 3 -->
            <div x-show="currentStep === 3">
                <h3 class="text-2xl font-bold text-white mb-2">How many people are in your team?</h3>
                <p class="text-sm text-slate-400 mb-6">Helps us structure dedicated vs shared management support.</p>

                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                    <button @click="selectStepOption('teamSize', 'Solo / Independent')" class="p-6 rounded-2xl border text-center transition-all hover:-translate-y-0.5" :class="formData.teamSize === 'Solo / Independent' ? 'bg-cyan-950/40 border-cyan-500 text-white' : 'bg-slate-950 border-slate-800 text-slate-300 hover:border-slate-700'">
                        <span class="block font-extrabold text-xl mb-1">Solo</span>
                        <span class="text-xs text-slate-400">Independent Pro</span>
                    </button>
                    <button @click="selectStepOption('teamSize', '2 - 5 Team Members')" class="p-6 rounded-2xl border text-center transition-all hover:-translate-y-0.5" :class="formData.teamSize === '2 - 5 Team Members' ? 'bg-cyan-950/40 border-cyan-500 text-white' : 'bg-slate-950 border-slate-800 text-slate-300 hover:border-slate-700'">
                        <span class="block font-extrabold text-xl mb-1">2 - 5</span>
                        <span class="text-xs text-slate-400">Growing Team</span>
                    </button>
                    <button @click="selectStepOption('teamSize', '6+ Team Members')" class="p-6 rounded-2xl border text-center transition-all hover:-translate-y-0.5" :class="formData.teamSize === '6+ Team Members' ? 'bg-cyan-950/40 border-cyan-500 text-white' : 'bg-slate-950 border-slate-800 text-slate-700'">
                        <span class="block font-extrabold text-xl mb-1">6+</span>
                        <span class="text-xs text-slate-400">Established Agency</span>
                    </button>
                </div>
            </div>

            <!-- STEP 4 -->
            <div x-show="currentStep === 4">
                <h3 class="text-2xl font-bold text-white mb-2">Where should we send your customized audit plan?</h3>
                <p class="text-sm text-slate-400 mb-6">We will prepare a 48-hour workflow action plan based on your selections.</p>

                <form action="{{ route('contact.send') }}" method="POST" class="space-y-4">
                    @csrf
                    <input type="hidden" name="industry" :value="formData.industry">
                    <input type="hidden" name="bottleneck" :value="formData.bottleneck">
                    <input type="hidden" name="team_size" :value="formData.teamSize">

                    <div>
                        <label class="block text-xs font-bold text-slate-300 uppercase tracking-wider mb-2">Full Name *</label>
                        <input type="text" name="name" x-model="formData.name" required placeholder="Marcus Vance" class="w-full bg-slate-950 border border-slate-800 rounded-xl px-4 py-3 text-white text-sm focus:outline-none focus:border-cyan-400 transition-colors">
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-slate-300 uppercase tracking-wider mb-2">Work Email *</label>
                        <input type="email" name="email" x-model="formData.email" required placeholder="marcus@premierrealty.com" class="w-full bg-slate-950 border border-slate-800 rounded-xl px-4 py-3 text-white text-sm focus:outline-none focus:border-cyan-400 transition-colors">
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-slate-300 uppercase tracking-wider mb-2">Phone / WhatsApp (Optional)</label>
                        <input type="tel" name="phone" x-model="formData.phone" placeholder="+1 (555) 000-0000" class="w-full bg-slate-950 border border-slate-800 rounded-xl px-4 py-3 text-white text-sm focus:outline-none focus:border-cyan-400 transition-colors">
                    </div>

                    @include('partials.sms-consent', ['theme' => 'dark', 'id' => 'sms_consent_audit'])

                    <button type="submit" class="w-full py-4 rounded-full font-bold text-slate-950 bg-gradient-to-r from-cyan-400 to-teal-300 hover:from-cyan-300 hover:to-teal-200 transition-all duration-200 shadow-lg shadow-cyan-500/20 text-base mt-2">
                        Get Free 48-Hour Operations Audit Plan
                    </button>
                </form>

                <div class="mt-4 flex justify-between items-center text-xs text-slate-500">
                    <span class="flex items-center gap-1"><svg class="w-3.5 h-3.5 text-emerald-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg> Strict NDA Protected</span>
                    <span>No Credit Card Required</span>
                </div>
            </div>

            <!-- Back Step Navigation -->
            <div class="mt-8 pt-4 border-t border-slate-800/80 flex justify-between items-center" x-show="currentStep > 1 && currentStep < 4">
                <button @click="currentStep--" class="text-xs font-bold text-slate-400 hover:text-white transition-colors flex items-center gap-1">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg> Previous Step
                </button>
            </div>
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
                    "A local real estate team had 6,500 unorganized CRM contacts and an average lead-response time of five hours. Cloud Dextra cleaned the database, created routing rules, and implemented daily follow-up workflows."
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

</div>
<!-- /Global Alpine State Wrap -->

@endsection