<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cloud Dextra Solution</title>
    
    <link rel="icon" type="image/jpeg" href="{{ asset('Images/image_289bdd.jpg') }}?v=10">
<link rel="shortcut icon" type="image/jpeg" href="{{ asset('Images/image_289bdd.jpg') }}?v=10">
<link rel="apple-touch-icon" href="{{ asset('Images/image_289bdd.jpg') }}?v=10">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>[x-cloak] { display: none !important; }</style>
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
                        Solution
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
                        <a href="https://www.instagram.com/clouddextra.ai?igsh=YTB2MXJ0MnBtM2V3" target="_blank" class="text-slate-300 hover:text-pink-500 transition-colors"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.07M12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg></a>
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
                     <a href="https://www.instagram.com/clouddextra.ai?igsh=YTB2MXJ0MnBtM2V3" target="_blank" class="text-slate-300 hover:text-pink-500"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.07M12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg></a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-grow w-full">
        @yield('content')
    </main>

    <!-- Global Footer & Call to Action -->
    <footer class="bg-slate-900 text-white mt-auto">
        <div class="bg-gradient-to-r from-blue-900 to-slate-900 border-b border-slate-800">
            <div class="max-w-7xl mx-auto px-6 py-16 lg:flex lg:items-center lg:justify-between text-center lg:text-left">
                <div class="mb-8 lg:mb-0">
                    <h2 class="text-3xl font-extrabold tracking-tight text-white sm:text-4xl">Ready to scale your enterprise?</h2>
                    <p class="mt-4 text-lg text-blue-200">Get in touch today and let our elite operators handle the rest.</p>
                </div>
                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-end">
                    <a href="{{ route('contact') }}" class="inline-flex items-center justify-center px-8 py-4 border border-transparent text-base font-bold rounded-full text-slate-900 bg-white hover:bg-blue-50 transition-colors shadow-lg hover:shadow-blue-500/30">Contact Us Today</a>
                    <!-- CHANGED: Replaced mailto with direct Gmail Compose link -->
                    <a href="https://mail.google.com/mail/?view=cm&fs=1&to=info@clouddextra.com" target="_blank" class="inline-flex items-center justify-center px-8 py-4 border border-slate-600 text-base font-bold rounded-full text-white hover:bg-slate-800 transition-colors">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        Email Us
                    </a>
                </div>
            </div>
        </div>

        <!-- Footer Links & Socials -->
        <div class="max-w-7xl mx-auto px-6 py-12">
            <div class="md:flex md:items-center md:justify-between">
                <div class="flex justify-center md:justify-start space-x-6 md:order-2">
                    <a href="https://www.facebook.com/share/1Bz3zMx2iD/" target="_blank" class="text-slate-400 hover:text-blue-400 transition-colors"><span class="sr-only">Facebook</span><svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.469h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.469h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg></a>
                    <a href="https://www.instagram.com/clouddextra.ai?igsh=YTB2MXJ0MnBtM2V3" target="_blank" class="text-slate-400 hover:text-pink-500 transition-colors"><span class="sr-only">Instagram</span><svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.07M12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg></a>
                    
                    <a href="https://www.linkedin.com/in/ahmad-ansari-277b16409/" target="_blank" class="text-slate-400 hover:text-blue-500 transition-colors">
                        <span class="sr-only">LinkedIn</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                    </a>
                </div>
                <div class="mt-8 md:mt-0 md:order-1 flex flex-col items-center md:items-start gap-3">
                    <!-- CHANGED: Removed the year dynamic tag entirely -->
                    <p class="text-slate-400 text-sm">
                        &copy; Cloud Dextra Solution. All rights reserved.
                    </p>
                    
                    <div class="flex items-center gap-4 text-sm text-slate-500 font-medium">
                        <a href="{{ route('privacy') }}" class="hover:text-blue-400 transition-colors">Privacy Policy</a>
                        <span>|</span>
                        <a href="{{ route('terms') }}" class="hover:text-blue-400 transition-colors">Terms of Service</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>