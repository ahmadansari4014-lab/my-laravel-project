<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Real Estate Virtual Assistants & Back-Office Support') | {{ config('company.brand') }}</title>
    <meta name="description" content="@yield('meta_description', 'Cloud Dextra LLC provides trained virtual assistants, CRM support, website management and digital marketing for real estate professionals and growing US service businesses.')">

    <link rel="icon" type="image/jpeg" href="/favicon.jpg?v=20">
    <link rel="shortcut icon" type="image/jpeg" href="/favicon.jpg?v=20">
    <link rel="apple-touch-icon" href="/favicon.jpg?v=20">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        [x-cloak] { display: none !important; }
        html { overflow-x: hidden; }
        img { max-width: 100%; }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 font-sans flex flex-col min-h-screen overflow-x-hidden">

    <!-- Top Navigation Bar -->
    <nav x-data="{ mobileMenuOpen: false }" class="bg-[#1d2431] text-white shadow-xl sticky top-0 z-50 border-b border-blue-500/30">
        <div class="container mx-auto px-4 md:px-6 flex justify-between items-center py-3">
            
            <!-- Left Side: Custom Image Logo -->
            <a href="{{ route('home') }}" class="flex-shrink-0 relative z-20 flex items-center gap-3 group outline-none">
                <div class="relative flex items-center justify-center w-12 h-12 md:w-14 md:h-14 bg-white rounded-full shadow-lg shadow-blue-500/20 group-hover:shadow-cyan-400/50 group-hover:scale-105 transition-all duration-300 overflow-hidden border border-slate-600">
                    <img src="{{ asset('Images/image_289bdd.jpg') }}" alt="Cloud Dextra Icon" class="w-full h-full object-cover">
                </div>
                
                <div class="flex flex-col justify-center">
                    <span class="font-black text-xl md:text-2xl tracking-tight text-white leading-none">
                        Cloud<span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-cyan-300">Dextra</span>
                    </span>
                    <span class="text-[0.65rem] md:text-xs font-bold text-slate-400 uppercase tracking-[0.2em] leading-none mt-1 group-hover:text-blue-300 transition-colors">
                        LLC
                    </span>
                </div>
            </a>

            <!-- Right Side: Navigation Links & Socials -->
            <div class="flex items-center">
                <div class="hidden md:flex items-center space-x-8 font-semibold text-sm tracking-wide mr-4">
                    <a href="{{ route('home') }}" class="hover:text-blue-400 transition pb-1 border-b-2 border-transparent hover:border-blue-400">Home</a>
                    <a href="{{ route('about') }}" class="hover:text-blue-400 transition pb-1 border-b-2 border-transparent hover:border-blue-400">About Us</a>
                    <a href="{{ route('services') }}" class="hover:text-blue-400 transition pb-1 border-b-2 border-transparent hover:border-blue-400">Services</a>
                    <a href="{{ route('contact') }}" class="hover:text-blue-400 transition pb-1 border-b-2 border-transparent hover:border-blue-400">Contact Us</a>
                    
                    <div class="h-5 w-px bg-slate-600 mx-1"></div>
                    
                    <div class="flex items-center space-x-4 pl-2">
                        <a href="https://www.facebook.com/share/1Bz3zMx2iD/" target="_blank" class="text-slate-300 hover:text-blue-400 transition-colors"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.469h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.469h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg></a>
                        <a href="https://www.instagram.com/clouddextraofficial/" target="_blank" class="text-slate-300 hover:text-pink-500 transition-colors"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.07M12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg></a>
                    </div>
                </div>

                <div class="md:hidden flex items-center relative z-20">
                    <button @click="mobileMenuOpen = !mobileMenuOpen" class="text-white hover:text-blue-400 focus:outline-none p-2 -mr-2 transition-colors">
                        <svg x-show="!mobileMenuOpen" class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
                        <svg x-show="mobileMenuOpen" x-cloak class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Dropdown -->
        <div x-show="mobileMenuOpen" x-cloak class="md:hidden absolute top-full left-0 w-full bg-[#161b26] border-t border-[#2a3447] shadow-2xl z-10">
            <div class="flex flex-col px-6 py-6 space-y-6 font-semibold text-lg text-right">
                <a href="{{ route('home') }}" class="block text-white hover:text-blue-400 transition" @click="mobileMenuOpen = false">Home</a>
                <a href="{{ route('about') }}" class="block text-white hover:text-blue-400 transition" @click="mobileMenuOpen = false">About Us</a>
                <a href="{{ route('services') }}" class="block text-white hover:text-blue-400 transition" @click="mobileMenuOpen = false">Services</a>
                <a href="{{ route('contact') }}" class="block text-white hover:text-blue-400 transition" @click="mobileMenuOpen = false">Contact Us</a>
                
                <div class="flex justify-end gap-6 pt-4 border-t border-slate-700/50">
                     <a href="https://www.facebook.com/share/1Bz3zMx2iD/" target="_blank" class="text-slate-300 hover:text-blue-400"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.469h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.469h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg></a>
                     <a href="https://www.instagram.com/clouddextraofficial/" target="_blank" class="text-slate-300 hover:text-pink-500"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.07M12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg></a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-grow w-full">
        @yield('content')
    </main>

    <footer class="bg-[#161b26] text-white pt-24 pb-14 mt-auto border-t border-slate-800 relative">
        <div class="max-w-7xl mx-auto px-6 lg:px-12">

            <div class="mb-14 flex items-center">
                <div class="flex items-center gap-3.5">
                    <span class="text-3xl font-black tracking-tight text-white leading-none">
                        Cloud<span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 via-cyan-300 to-teal-200">Dextra</span>
                    </span>
                    <span class="h-7 w-px bg-slate-700"></span>
                    <span class="text-xs font-bold uppercase tracking-[0.2em] text-cyan-400">
                        Virtual Operations
                    </span>
                </div>
            </div>

            <div class="border-t border-slate-700/60 pt-8 pb-8 mb-10 flex flex-col md:flex-row md:items-center justify-between gap-6">
                <h3 class="text-3xl md:text-4xl font-serif text-white tracking-tight">Get in Touch</h3>
                
                <div class="flex flex-wrap items-center gap-8 md:gap-14">
                    <div class="flex items-center gap-3">
                        <div class="p-2.5 rounded-xl bg-slate-800/80 border border-slate-700/60 text-cyan-400">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        </div>
                        <div>
                            <span class="block text-[10px] font-bold text-slate-400 uppercase tracking-widest leading-tight">EMAIL</span>
                            <a href="mailto:info@clouddextra.com" class="text-xs font-medium text-slate-200 hover:text-cyan-400 transition-colors underline underline-offset-4 decoration-slate-600 hover:decoration-cyan-400">info@clouddextra.com</a>
                        </div>
                    </div>

                    <div class="flex items-center gap-3">
                        <div class="p-2.5 rounded-xl bg-slate-800/80 border border-slate-700/60 text-cyan-400">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        </div>
                        <div>
                            <span class="block text-[10px] font-bold text-slate-400 uppercase tracking-widest leading-tight">US PHONE</span>
                            <a href="tel:{{ config('company.phone.tel') }}" class="text-xs font-medium text-slate-200 hover:text-cyan-400 transition-colors underline underline-offset-4 decoration-slate-600 hover:decoration-cyan-400">{{ config('company.phone.display') }}</a>
                        </div>
                    </div>

                    <div class="flex items-center gap-3">
                        <div class="p-2.5 rounded-xl bg-slate-800/80 border border-slate-700/60 text-cyan-400">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                        </div>
                        <div>
                            <span class="block text-[10px] font-bold text-slate-400 uppercase tracking-widest leading-tight">WHATSAPP</span>
                            <a href="{{ config('company.whatsapp.link') }}" target="_blank" rel="noopener" class="text-xs font-medium text-slate-200 hover:text-cyan-400 transition-colors underline underline-offset-4 decoration-slate-600 hover:decoration-cyan-400">{{ config('company.whatsapp.display') }}</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start pb-10 border-b border-slate-700/60 mb-10">
                <div class="lg:col-span-4">
                    <h4 class="text-3xl md:text-4xl font-bold tracking-tight text-white leading-tight font-serif italic">{{ config('company.brand') }}</h4>
                    <p class="text-sm text-slate-400 font-medium mt-1">Virtual assistants &amp; back-office support for US businesses</p>
                </div>

                <address class="lg:col-span-5 not-italic text-xs text-slate-300 leading-relaxed space-y-1">
                    <p class="font-bold text-white text-sm">{{ config('company.legal_name') }}</p>
                    <p class="text-slate-400">{{ config('company.address.street') }}, {{ config('company.address.suite') }}</p>
                    <p class="text-slate-400">{{ config('company.address.city') }}, {{ config('company.address.state') }} {{ config('company.address.zip') }}</p>
                    <p class="text-slate-400">
                        <a href="tel:{{ config('company.phone.tel') }}" class="hover:text-cyan-400">{{ config('company.phone.display') }}</a>
                        &middot;
                        <a href="mailto:{{ config('company.email') }}" class="hover:text-cyan-400">{{ config('company.email') }}</a>
                    </p>
                </address>
            </div>

            <div class="flex flex-col sm:flex-row items-center justify-between gap-6">
                <div class="flex flex-col items-center sm:items-start gap-3">
                    <div class="flex flex-wrap justify-center items-center gap-x-8 gap-y-2 text-xs font-bold tracking-widest text-slate-400 uppercase">
                        <a href="{{ route('privacy') }}" class="hover:text-cyan-400 transition-colors">PRIVACY POLICY</a>
                        <a href="{{ route('terms') }}" class="hover:text-cyan-400 transition-colors">TERMS OF SERVICE</a>
                        <a href="{{ route('sms-terms') }}" class="hover:text-cyan-400 transition-colors">SMS TERMS</a>
                    </div>
                    <p class="text-[11px] text-slate-500">&copy; {{ date('Y') }} {{ config('company.legal_name') }}. All rights reserved.</p>
                </div>

                <div class="flex items-center gap-3">
                    <a href="https://www.facebook.com/share/1Bz3zMx2iD/" target="_blank" class="w-9 h-9 rounded-full bg-white text-slate-900 hover:bg-cyan-400 hover:text-slate-950 transition-all duration-200 flex items-center justify-center shadow-md">
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                    </a>
                    <a href="https://www.instagram.com/clouddextraofficial/" target="_blank" class="w-9 h-9 rounded-full bg-white text-slate-900 hover:bg-cyan-400 hover:text-slate-950 transition-all duration-200 flex items-center justify-center shadow-md">
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                    </a>
                    <a href="https://www.linkedin.com/in/ahmad-ansari-277b16409/" aria-label="LinkedIn" target="_blank" class="w-9 h-9 rounded-full bg-white text-slate-900 hover:bg-cyan-400 hover:text-slate-950 transition-all duration-200 flex items-center justify-center shadow-md">
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.28 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93h2.75M6.46 10.9v8.37H9.25V10.9H6.46M7.86 6.74a1.63 1.63 0 1 0 0 3.26 1.63 1.63 0 0 0 0-3.26z"/></svg>
                    </a>
                </div>
            </div>

        </div>

        <a href="tel:{{ config('company.phone.tel') }}" aria-label="Call {{ config('company.legal_name') }}" class="fixed bottom-6 right-6 w-12 h-12 bg-cyan-500 hover:bg-cyan-400 text-slate-950 font-bold rounded-full shadow-lg shadow-cyan-500/20 flex items-center justify-center transition-all hover:scale-110 z-50">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
        </a>
    </footer>

</body>
</html>