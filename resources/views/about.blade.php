@extends('layouts.app')

@section('content')
<!-- Setup Alpine Data if needed for future interactions -->
<div x-data="{}" class="relative pb-20">

    <!-- 1. Cinematic Hero Section -->
    <div class="relative w-full py-32 md:py-48 flex items-center justify-center rounded-[3rem] overflow-hidden mb-20 shadow-2xl mx-6 group">
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?q=80&w=2000&auto=format&fit=crop" class="w-full h-full object-cover transition-transform duration-[20s] group-hover:scale-110" alt="Corporate Headquarters">
            <!-- Sleek Dark Gradient Overlay -->
            <div class="absolute inset-0 bg-gradient-to-b from-slate-900/90 via-slate-900/80 to-slate-900"></div>
        </div>
        
        <div class="relative z-10 w-full max-w-5xl mx-auto px-6 text-center">
            <span class="text-blue-400 font-bold tracking-widest uppercase text-sm mb-6 inline-block border border-blue-400/30 bg-blue-400/10 px-4 py-2 rounded-full backdrop-blur-sm">
                About Cloud Dextra
            </span>
            <h1 class="text-5xl md:text-7xl font-extrabold text-white mb-6 tracking-tight drop-shadow-lg">
                The Engine Behind <br> Your <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-cyan-300">Growth</span>
            </h1>
            <p class="text-xl text-slate-300 max-w-3xl mx-auto font-light leading-relaxed">
                We don't just complete tasks; we architect scalable workflows, build high-performance web platforms, and manage the daily operations that give industry leaders their time back.
            </p>
        </div>
    </div>

    <!-- 2. By The Numbers (Data Ribbon) -->
    <div class="max-w-7xl mx-auto px-6 mb-32 relative z-20 -mt-32">
        <div class="bg-white/10 backdrop-blur-xl border border-white/20 rounded-3xl p-10 shadow-2xl grid grid-cols-1 md:grid-cols-4 gap-8 text-center divide-y md:divide-y-0 md:divide-x divide-slate-700/50">
            <div class="pt-4 md:pt-0">
                <h3 class="text-4xl font-black text-white mb-2">2018</h3>
                <p class="text-slate-400 text-sm uppercase tracking-wider font-semibold">Year Established</p>
            </div>
            <div class="pt-4 md:pt-0">
                <h3 class="text-4xl font-black text-white mb-2">99.9%</h3>
                <p class="text-slate-400 text-sm uppercase tracking-wider font-semibold">Server Uptime</p>
            </div>
            <div class="pt-4 md:pt-0">
                <h3 class="text-4xl font-black text-white mb-2">150+</h3>
                <p class="text-slate-400 text-sm uppercase tracking-wider font-semibold">Active Clients</p>
            </div>
            <div class="pt-4 md:pt-0">
                <h3 class="text-4xl font-black text-white mb-2">24/7</h3>
                <p class="text-slate-400 text-sm uppercase tracking-wider font-semibold">Global Monitoring</p>
            </div>
        </div>
    </div>

    <!-- 3. Our Origins (Image & Text) -->
    <div class="max-w-7xl mx-auto px-6 mb-32">
        <div class="flex flex-col lg:flex-row items-center gap-16">
            <div class="w-full lg:w-1/2 relative group">
                <!-- Sleek shadow offset -->
                <div class="absolute inset-0 bg-blue-600 rounded-3xl transform translate-x-4 translate-y-4 group-hover:translate-x-6 group-hover:translate-y-6 transition-transform duration-700"></div>
                <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=1000&auto=format&fit=crop" alt="Team Collaboration" class="relative z-10 rounded-3xl shadow-2xl w-full h-[600px] object-cover transition-transform duration-700 group-hover:scale-[1.02] grayscale hover:grayscale-0">
            </div>

            <div class="w-full lg:w-1/2">
                <h4 class="text-blue-600 font-bold uppercase tracking-wider mb-2 flex items-center gap-2">
                    <span class="w-6 h-0.5 bg-blue-600"></span> Our Origins
                </h4>
                <h2 class="text-4xl md:text-5xl font-extrabold text-slate-900 mb-6 tracking-tight">Bridging Strategy and Execution</h2>
                <p class="text-lg text-slate-600 leading-relaxed mb-6">
                    Cloud Dextra Solution was founded on a simple, irrefutable premise: highly capable professionals are spending entirely too much time on tasks that do not generate revenue. 
                </p>
                <p class="text-lg text-slate-600 leading-relaxed mb-8">
                    Whether it is real estate agents bogged down by BoldTrail CRM updates, consultants buried in email logistics, or startups struggling to maintain their technical digital presence—we step in. By providing a comprehensive suite of IT and Virtual Assistance services under one roof, we become the unseen gears turning your daily operations.
                </p>
                <div class="flex gap-4 border-l-4 border-blue-600 pl-6 py-2 bg-slate-50 rounded-r-xl">
                    <p class="text-slate-800 font-medium italic">"We handle the friction so you can handle the growth."</p>
                </div>
            </div>
        </div>
    </div>

    <!-- 4. The Dextra Framework (Interactive Cards) -->
    <div class="max-w-7xl mx-auto px-6 mb-32">
        <div class="bg-slate-50 rounded-[3rem] p-12 md:p-20 shadow-inner border border-slate-200">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-extrabold text-slate-900 tracking-tight mb-4">The Dextra Framework</h2>
                <p class="text-slate-500 text-lg max-w-2xl mx-auto">A proven, three-step methodology to eliminate operational drag and scale your infrastructure.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Step 1 -->
                <div class="bg-white p-10 rounded-3xl shadow-sm hover:shadow-2xl hover:shadow-blue-500/10 transition-all duration-500 border border-slate-100 hover:border-blue-300 relative overflow-hidden group cursor-default transform hover:-translate-y-2">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-blue-50/50 rounded-bl-full -z-0 group-hover:scale-150 transition-transform duration-700"></div>
                    <h1 class="text-7xl font-black text-slate-50 absolute -top-2 -right-2 z-0 group-hover:text-blue-50 transition-colors">01</h1>
                    <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-xl flex items-center justify-center mb-6 relative z-10 group-hover:bg-blue-600 group-hover:text-white transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path></svg>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-800 mb-4 relative z-10 group-hover:text-blue-700">Audit & Analyze</h3>
                    <p class="text-slate-600 relative z-10 leading-relaxed">We begin by mapping out your current operational bottlenecks, identifying exactly where your time and money are leaking in your daily workflow.</p>
                </div>

                <!-- Step 2 -->
                <div class="bg-white p-10 rounded-3xl shadow-sm hover:shadow-2xl hover:shadow-blue-500/10 transition-all duration-500 border border-slate-100 hover:border-blue-300 relative overflow-hidden group cursor-default transform hover:-translate-y-2">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-blue-50/50 rounded-bl-full -z-0 group-hover:scale-150 transition-transform duration-700"></div>
                    <h1 class="text-7xl font-black text-slate-50 absolute -top-2 -right-2 z-0 group-hover:text-blue-50 transition-colors">02</h1>
                    <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-xl flex items-center justify-center mb-6 relative z-10 group-hover:bg-blue-600 group-hover:text-white transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path></svg>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-800 mb-4 relative z-10 group-hover:text-blue-700">System Integration</h3>
                    <p class="text-slate-600 relative z-10 leading-relaxed">We integrate our top-tier personnel into your existing ecosystem—syncing perfectly with your custom databases, HubSpot, or SkySlope software.</p>
                </div>

                <!-- Step 3 -->
                <div class="bg-white p-10 rounded-3xl shadow-sm hover:shadow-2xl hover:shadow-blue-500/10 transition-all duration-500 border border-slate-100 hover:border-blue-300 relative overflow-hidden group cursor-default transform hover:-translate-y-2">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-blue-50/50 rounded-bl-full -z-0 group-hover:scale-150 transition-transform duration-700"></div>
                    <h1 class="text-7xl font-black text-slate-50 absolute -top-2 -right-2 z-0 group-hover:text-blue-50 transition-colors">03</h1>
                    <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-xl flex items-center justify-center mb-6 relative z-10 group-hover:bg-blue-600 group-hover:text-white transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-800 mb-4 relative z-10 group-hover:text-blue-700">Automate & Scale</h3>
                    <p class="text-slate-600 relative z-10 leading-relaxed">With the administration handled, we execute technical web deployments and SEO campaigns designed specifically to multiply your inbound leads.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- 5. Elite Operator Structure (Now with Photo Backgrounds) -->
    <div class="max-w-7xl mx-auto px-6 mb-32">
        <div class="text-center mb-16">
            <h4 class="text-blue-600 font-bold uppercase tracking-wider mb-2">Our Personnel</h4>
            <h2 class="text-4xl md:text-5xl font-extrabold text-slate-900 tracking-tight">The Elite Operator Structure</h2>
            <p class="text-slate-500 text-lg max-w-2xl mx-auto mt-4">You aren't just hiring an assistant; you are unlocking an entire department of vetted specialists.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Team 1: Developers -->
            <div class="group relative rounded-3xl hover:shadow-[0_0_30px_rgba(37,99,235,0.3)] hover:-translate-y-2 transition-all duration-500 flex flex-col h-full overflow-hidden border border-slate-700/50 shadow-lg min-h-[300px]">
                <div class="absolute inset-0 z-0">
                    <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?q=80&w=600&auto=format&fit=crop" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Developers">
                    <div class="absolute inset-0 bg-slate-900/80 group-hover:bg-slate-900/70 transition-colors duration-500 mix-blend-multiply"></div>
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/70 to-transparent opacity-90"></div>
                </div>
                <div class="relative z-10 flex flex-col h-full p-8">
                    <div class="h-2 w-12 bg-blue-500 rounded-full mb-6 group-hover:w-full transition-all duration-500 shadow-[0_0_10px_rgba(59,130,246,0.5)]"></div>
                    <h4 class="text-xl font-bold text-white mb-2 group-hover:text-blue-300 transition-colors">Technical Developers</h4>
                    <p class="text-slate-300 text-sm leading-relaxed flex-grow group-hover:text-white transition-colors">Full-stack engineers managing your Laravel, WordPress, and custom server architecture. Responsible for maintaining 99.9% uptime.</p>
                </div>
            </div>
            
            <!-- Team 2: Account Managers -->
            <div class="group relative rounded-3xl hover:shadow-[0_0_30px_rgba(37,99,235,0.3)] hover:-translate-y-2 transition-all duration-500 flex flex-col h-full overflow-hidden border border-slate-700/50 shadow-lg min-h-[300px]">
                <div class="absolute inset-0 z-0">
                    <img src="https://images.unsplash.com/photo-1554415707-6e8cfc93fe23?q=80&w=600&auto=format&fit=crop" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Account Managers">
                    <div class="absolute inset-0 bg-slate-900/80 group-hover:bg-slate-900/70 transition-colors duration-500 mix-blend-multiply"></div>
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/70 to-transparent opacity-90"></div>
                </div>
                <div class="relative z-10 flex flex-col h-full p-8">
                    <div class="h-2 w-12 bg-blue-500 rounded-full mb-6 group-hover:w-full transition-all duration-500 shadow-[0_0_10px_rgba(59,130,246,0.5)]"></div>
                    <h4 class="text-xl font-bold text-white mb-2 group-hover:text-blue-300 transition-colors">Account Managers</h4>
                    <p class="text-slate-300 text-sm leading-relaxed flex-grow group-hover:text-white transition-colors">Your dedicated point of contact. They route priority emails, manage CRM pipelines, and handle daily operational logistics seamlessly.</p>
                </div>
            </div>

            <!-- Team 3: Marketing Analysts -->
            <div class="group relative rounded-3xl hover:shadow-[0_0_30px_rgba(37,99,235,0.3)] hover:-translate-y-2 transition-all duration-500 flex flex-col h-full overflow-hidden border border-slate-700/50 shadow-lg min-h-[300px]">
                <div class="absolute inset-0 z-0">
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=600&auto=format&fit=crop" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Marketing Analysts">
                    <div class="absolute inset-0 bg-slate-900/80 group-hover:bg-slate-900/70 transition-colors duration-500 mix-blend-multiply"></div>
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/70 to-transparent opacity-90"></div>
                </div>
                <div class="relative z-10 flex flex-col h-full p-8">
                    <div class="h-2 w-12 bg-blue-500 rounded-full mb-6 group-hover:w-full transition-all duration-500 shadow-[0_0_10px_rgba(59,130,246,0.5)]"></div>
                    <h4 class="text-xl font-bold text-white mb-2 group-hover:text-blue-300 transition-colors">Marketing Analysts</h4>
                    <p class="text-slate-300 text-sm leading-relaxed flex-grow group-hover:text-white transition-colors">SEO and data specialists focused entirely on optimizing your Meta Ad spend and pushing your domain to the top of Google search rankings.</p>
                </div>
            </div>

            <!-- Team 4: Certified Bookkeepers -->
            <div class="group relative rounded-3xl hover:shadow-[0_0_30px_rgba(37,99,235,0.3)] hover:-translate-y-2 transition-all duration-500 flex flex-col h-full overflow-hidden border border-slate-700/50 shadow-lg min-h-[300px]">
                <div class="absolute inset-0 z-0">
                    <img src="https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?q=80&w=600&auto=format&fit=crop" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Bookkeepers">
                    <div class="absolute inset-0 bg-slate-900/80 group-hover:bg-slate-900/70 transition-colors duration-500 mix-blend-multiply"></div>
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/70 to-transparent opacity-90"></div>
                </div>
                <div class="relative z-10 flex flex-col h-full p-8">
                    <div class="h-2 w-12 bg-blue-500 rounded-full mb-6 group-hover:w-full transition-all duration-500 shadow-[0_0_10px_rgba(59,130,246,0.5)]"></div>
                    <h4 class="text-xl font-bold text-white mb-2 group-hover:text-blue-300 transition-colors">Certified Bookkeepers</h4>
                    <p class="text-slate-300 text-sm leading-relaxed flex-grow group-hover:text-white transition-colors">Financial experts executing daily Profit & Loss updates, secure invoicing, and complex account reconciliation inside QuickBooks.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- 6. Technical Arsenal (Dark Mode Stack Showcase) -->
    <div class="bg-slate-900 py-24 mb-10 rounded-[3rem] mx-6 relative overflow-hidden">
        <div class="absolute top-0 right-0 w-96 h-96 bg-blue-600 rounded-full mix-blend-multiply filter blur-[120px] opacity-20"></div>
        <div class="relative z-10 max-w-7xl mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold text-white mb-12 tracking-tight">Our Technical Arsenal</h2>
            
            <div class="flex flex-wrap justify-center gap-4 md:gap-6 opacity-80">
                <span class="px-6 py-3 bg-slate-800 border border-slate-700 text-slate-300 rounded-full font-semibold hover:border-blue-400 hover:text-white transition-colors cursor-default">Laravel Framework</span>
                <span class="px-6 py-3 bg-slate-800 border border-slate-700 text-slate-300 rounded-full font-semibold hover:border-blue-400 hover:text-white transition-colors cursor-default">Tailwind CSS</span>
                <span class="px-6 py-3 bg-slate-800 border border-slate-700 text-slate-300 rounded-full font-semibold hover:border-blue-400 hover:text-white transition-colors cursor-default">BoldTrail CRM</span>
                <span class="px-6 py-3 bg-slate-800 border border-slate-700 text-slate-300 rounded-full font-semibold hover:border-blue-400 hover:text-white transition-colors cursor-default">SkySlope</span>
                <span class="px-6 py-3 bg-slate-800 border border-slate-700 text-slate-300 rounded-full font-semibold hover:border-blue-400 hover:text-white transition-colors cursor-default">QuickBooks Enterprise</span>
                <span class="px-6 py-3 bg-slate-800 border border-slate-700 text-slate-300 rounded-full font-semibold hover:border-blue-400 hover:text-white transition-colors cursor-default">HubSpot</span>
                <span class="px-6 py-3 bg-slate-800 border border-slate-700 text-slate-300 rounded-full font-semibold hover:border-blue-400 hover:text-white transition-colors cursor-default">AWS Cloud Services</span>
            </div>
        </div>
    </div>

</div>
@endsection