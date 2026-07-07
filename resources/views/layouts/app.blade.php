<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cloud Dextra Solution</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-slate-50 text-slate-800 font-sans flex flex-col min-h-screen">

    <nav class="bg-slate-900/95 backdrop-blur-md text-white shadow-xl sticky top-0 z-50 border-b border-blue-500/30">
        <div class="container mx-auto px-6 flex justify-between items-center py-2">
            
            <a href="{{ route('home') }}" class="flex-shrink-0">
                <img src="{{ asset('images/dextra.png') }}" alt="Cloud Dextra Solution Logo" class="h-16 w-auto object-contain">
            </a>
            
            <div class="flex items-center space-x-8">
                <div class="hidden md:flex space-x-6 font-semibold text-sm">
                    <a href="{{ route('home') }}" class="hover:text-blue-400 transition pb-1">Home</a>
                    <a href="{{ route('about') }}" class="hover:text-blue-400 transition pb-1">About Us</a>
                    <a href="{{ route('services') }}" class="hover:text-blue-400 transition pb-1">Services</a>
                    <a href="{{ route('contact') }}" class="hover:text-blue-400 transition pb-1">Contact Us</a>
                </div>
            </div>
            
        </div>
    </nav>

    <main class="flex-grow w-full mt-6">
        @yield('content')
    </main>

    <footer class="bg-slate-900 text-slate-400 py-8 text-center mt-auto border-t border-slate-800">
        <div class="container mx-auto px-6">
            <p class="mb-2">&copy; {{ date('Y') }} Cloud Dextra Solution. All rights reserved.</p>
            <p class="text-sm">Empowering Real Estate Agents, Startups, and Consultants.</p>
        </div>
    </footer>

</body>
</html>