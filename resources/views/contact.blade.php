@extends('layouts.app')

@section('content')
<div class="relative pb-20">

    <!-- 1. Cinematic Hero Section -->
    <div class="relative w-full py-32 md:py-48 flex items-center justify-center rounded-[3rem] overflow-hidden mb-24 shadow-2xl mx-6 group">
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1596524430615-b4661858a36c?q=80&w=2000&auto=format&fit=crop" class="w-full h-full object-cover transition-transform duration-[20s] group-hover:scale-110 grayscale" alt="Contact Us">
            <div class="absolute inset-0 bg-gradient-to-br from-slate-900/95 via-blue-900/80 to-slate-900/95 mix-blend-multiply"></div>
        </div>
        
        <div class="relative z-10 w-full max-w-5xl mx-auto px-6 text-center">
            <h1 class="text-5xl md:text-7xl font-extrabold text-white mb-6 tracking-tight drop-shadow-lg">
                Let's Build <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-cyan-300">Something Great</span>
            </h1>
            <p class="text-xl text-slate-300 max-w-3xl mx-auto font-light leading-relaxed">
                Ready to delegate, optimize, and dominate? Reach out to our architecture team today.
            </p>
        </div>
    </div>

    <!-- 2. Contact Container -->
    <div class="max-w-6xl mx-auto px-6">
        <div class="bg-white rounded-[3rem] shadow-2xl overflow-hidden border border-slate-100 flex flex-col lg:flex-row">
            
            <!-- Form Section -->
            <div class="w-full lg:w-3/5 p-10 md:p-16">
                <h2 class="text-3xl font-extrabold text-slate-900 mb-2">Send a Message</h2>
                <p class="text-slate-600 mb-10">Fill out the form below and an account manager will contact you within 24 hours.</p>
                
                <form action="#" method="POST" class="space-y-6">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-2">Full Name</label>
                            <input type="text" class="w-full px-5 py-4 rounded-xl border border-slate-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 outline-none transition" placeholder="John Doe">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-2">Work Email</label>
                            <input type="email" class="w-full px-5 py-4 rounded-xl border border-slate-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 outline-none transition" placeholder="john@company.com">
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-slate-700 mb-2">Service Interest</label>
                        <select class="w-full px-5 py-4 rounded-xl border border-slate-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 outline-none transition bg-white">
                            <option>Virtual Assistance</option>
                            <option>Digital Growth & SEO</option>
                            <option>Financial Bookkeeping</option>
                            <option>Web Architecture</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-slate-700 mb-2">Project Details</label>
                        <textarea rows="4" class="w-full px-5 py-4 rounded-xl border border-slate-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 outline-none transition" placeholder="How can we help you scale?"></textarea>
                    </div>
                    <button type="submit" class="w-full bg-slate-900 text-white font-bold py-5 rounded-xl hover:bg-blue-600 transition shadow-lg hover:shadow-blue-500/30 transform hover:-translate-y-1">
                        Send Message
                    </button>
                </form>
            </div>

            <!-- Contact Info Section -->
            <div class="w-full lg:w-2/5 bg-slate-50 p-10 md:p-16 border-l border-slate-100 flex flex-col justify-center">
                <div class="space-y-10">
                    <div>
                        <h3 class="text-2xl font-bold text-slate-900 mb-6">Let's Talk</h3>
                        <p class="text-slate-600 mb-8">Whether you have a question about our services or are ready to get started, our team is standing by.</p>
                        
                        <!-- Updated Clickable Email -->
                        <a href="mailto:info@clouddextra.com" class="flex items-center gap-4 text-blue-600 hover:text-blue-800 transition-colors font-bold text-lg mb-6 group">
                            <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center shadow-md group-hover:bg-blue-600 group-hover:text-white transition">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            </div>
                            info@clouddextra.com
                        </a>

                        <!-- Updated Clickable Website -->
                        <a href="https://clouddextra.com" target="_blank" class="flex items-center gap-4 text-blue-600 hover:text-blue-800 transition-colors font-bold text-lg group">
                            <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center shadow-md group-hover:bg-blue-600 group-hover:text-white transition">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path></svg>
                            </div>
                            clouddextra.com
                        </a>
                    </div>

                    <div class="border-t border-slate-200 pt-10">
                        <h4 class="font-bold text-slate-900 mb-4">Office Hours</h4>
                        <p class="text-slate-600">Monday – Friday: 9:00 AM – 6:00 PM</p>
                        <p class="text-slate-600">Weekend support available via email.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection