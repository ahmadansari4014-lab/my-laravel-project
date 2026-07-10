<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cloud Dextra Solution</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Alpine.js for Interactive Modals and Mobile Menu -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        /* Prevent Alpine.js elements from flashing before loading */
        [x-cloak] { display: none !important; }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 font-sans flex flex-col min-h-screen overflow-x-hidden">

    <!-- Top Navigation Bar -->
    <nav x-data="{ mobileMenuOpen: false }" class="bg-[#1d2431] text-white shadow-xl sticky top-0 z-50 border-b border-blue-500/30">
        <div class="container mx-auto px-4 md:px-6 flex justify-between items-center py-3">
            
            <!-- Left Side: Custom Image Logo -->
            <a href="{{ route('home') }}" class="flex-shrink-0 relative z-20 flex items-center gap-3 group outline-none">
                <!-- Circular Image Container with Glowing Shadow -->
                <div class="relative flex items-center justify-center w-12 h-12 md:w-14 md:h-14 bg-white rounded-full shadow-lg shadow-blue-500/20 group-hover:shadow-cyan-400/50 group-hover:scale-105 transition-all duration-300 overflow-hidden border border-slate-600">
                    <!-- Ensure the image file is saved in public/images/image_289bdd.png -->
                    <img src="{{ asset('images/image_289bdd.jpg') }}" alt="Cloud Dextra Icon" class="w-full h-full object-cover">
                </div>
                
                <!-- Stylized Typography -->
                <div class="flex flex-col justify-center">
                    <span class="font-black text-xl md:text-2xl tracking-tight text-white leading-none">
                        Cloud<span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-cyan-300">Dextra</span>
                    </span>
                    <span class="text-[0.65rem] md:text-xs font-bold text-slate-400 uppercase tracking-[0.2em] leading-none mt-1 group-hover:text-blue-300 transition-colors">
                        Solution
                    </span>
                </div>
            </a>

            <!-- Right Side: Navigation Links & Mobile Toggle -->
            <div class="flex items-center">
                <!-- Desktop Menu (Hidden on Mobile) -->
                <div class="hidden md:flex items-center space-x-8 font-semibold text-sm tracking-wide mr-4">
                    <a href="{{ route('home') }}" class="hover:text-blue-400 transition pb-1 border-b-2 border-transparent hover:border-blue-400">Home</a>
                    <a href="{{ route('about') }}" class="hover:text-blue-400 transition pb-1 border-b-2 border-transparent hover:border-blue-400">About Us</a>
                    <a href="{{ route('services') }}" class="hover:text-blue-400 transition pb-1 border-b-2 border-transparent hover:border-blue-400">Services</a>
                    <a href="{{ route('contact') }}" class="hover:text-blue-400 transition pb-1 border-b-2 border-transparent hover:border-blue-400">Contact Us</a>
                </div>

                <!-- Mobile Hamburger Button (Hidden on Desktop) -->
                <div class="md:hidden flex items-center relative z-20">
                    <button @click="mobileMenuOpen = !mobileMenuOpen" class="text-white hover:text-blue-400 focus:outline-none p-2 -mr-2 transition-colors">
                        <!-- Hamburger Icon -->
                        <svg x-show="!mobileMenuOpen" class="w-8 h-8 transition-transform transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                        </svg>
                        <!-- Close (X) Icon -->
                        <svg x-show="mobileMenuOpen" x-cloak class="w-8 h-8 transition-transform transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
            
        </div>

        <!-- Mobile Dropdown Menu -->
        <div x-show="mobileMenuOpen" 
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 -translate-y-4"
             x-transition:enter-end="opacity-100 translate-y-0"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100 translate-y-0"
             x-transition:leave-end="opacity-0 -translate-y-4"
             x-cloak 
             class="md:hidden absolute top-full left-0 w-full bg-[#161b26] border-t border-[#2a3447] shadow-2xl z-10">
            <!-- Text aligned to the right to match hamburger position -->
            <div class="flex flex-col px-6 py-6 space-y-6 font-semibold text-lg text-right">
                <a href="{{ route('home') }}" class="block text-white hover:text-blue-400 transition" @click="mobileMenuOpen = false">Home</a>
                <a href="{{ route('about') }}" class="block text-white hover:text-blue-400 transition" @click="mobileMenuOpen = false">About Us</a>
                <a href="{{ route('services') }}" class="block text-white hover:text-blue-400 transition" @click="mobileMenuOpen = false">Services</a>
                <a href="{{ route('contact') }}" class="block text-white hover:text-blue-400 transition" @click="mobileMenuOpen = false">Contact Us</a>
            </div>
        </div>
    </nav>

    <!-- Main Content Area -->
    <main class="flex-grow w-full">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-slate-900 text-slate-400 py-8 text-center mt-auto border-t border-slate-800">
        <div class="container mx-auto px-4 md:px-6">
            <p class="mb-2">&copy; {{ date('Y') }} Cloud Dextra Solution. All rights reserved.</p>
            <p class="text-xs md:text-sm">Empowering Real Estate Agents, Startups, and Consultants.</p>
        </div>
    </footer>

</body>
</html>