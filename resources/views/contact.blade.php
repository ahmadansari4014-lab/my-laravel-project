@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-6 py-12">
    <div class="bg-white rounded-3xl shadow-xl border border-slate-100 overflow-hidden flex flex-col lg:flex-row">
        
        <div class="w-full lg:w-1/2 p-10 lg:p-16">
            <h1 class="text-4xl font-extrabold text-slate-900 mb-4 tracking-tight">Get In Touch</h1>
            <p class="text-lg text-slate-500 mb-10">Ready to delegate to the right people? Send us a message and we will respond shortly.</p>

            @if(session('success'))
                <div class="mb-8 p-5 bg-green-50 border-l-4 border-green-500 text-green-700 rounded-r-lg shadow-sm font-semibold">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
                @csrf
                <div class="group">
                    <label class="block text-sm font-semibold text-slate-700 mb-2 transition-colors group-focus-within:text-blue-600">Full Name</label>
                    <input type="text" name="name" value="{{ old('name') }}" class="w-full bg-slate-50 border border-slate-200 px-5 py-4 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 focus:bg-white transition-all duration-300 outline-none shadow-sm" placeholder="John Doe" required>
                </div>
                
                <div class="group">
                    <label class="block text-sm font-semibold text-slate-700 mb-2 transition-colors group-focus-within:text-blue-600">Email Address</label>
                    <input type="email" name="email" value="{{ old('email') }}" class="w-full bg-slate-50 border border-slate-200 px-5 py-4 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 focus:bg-white transition-all duration-300 outline-none shadow-sm" placeholder="john@example.com" required>
                </div>
                
                <div class="group">
                    <label class="block text-sm font-semibold text-slate-700 mb-2 transition-colors group-focus-within:text-blue-600">How can we help?</label>
                    <textarea name="message" rows="5" class="w-full bg-slate-50 border border-slate-200 px-5 py-4 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 focus:bg-white transition-all duration-300 outline-none shadow-sm" placeholder="Tell us about your project requirements..." required>{{ old('message') }}</textarea>
                </div>
                
                <button type="submit" class="w-full bg-blue-600 text-white font-bold py-4 rounded-xl hover:bg-blue-700 transition-all duration-300 shadow-lg hover:shadow-blue-500/40 transform hover:-translate-y-1">
                    Send Message
                </button>
            </form>
        </div>

        <div class="w-full lg:w-1/2 relative min-h-[400px] lg:min-h-full">
            <div class="absolute inset-0 bg-blue-900/20 mix-blend-multiply z-10"></div>
            <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?q=80&w=1000&auto=format&fit=crop" alt="Customer Support" class="absolute inset-0 w-full h-full object-cover">
            
            <div class="absolute bottom-10 left-10 z-20 bg-slate-900/80 backdrop-blur-md border border-white/20 p-8 rounded-2xl text-white max-w-sm shadow-2xl">
                <h3 class="text-2xl font-bold mb-4 text-blue-400">Let's Talk</h3>
                <p class="mb-4 flex items-center gap-3">
                    ✉️ <a href="mailto:hello@clouddextrasolution.com" class="text-slate-200 hover:text-white hover:underline transition-colors">hello@clouddextrasolution.com</a>
                </p>
                <p class="flex items-center gap-3">
                    🌐 <a href="https://clouddextrasolution.com" target="_blank" class="text-slate-200 hover:text-white hover:underline transition-colors">clouddextrasolution.com</a>
                </p>
            </div>
        </div>

    </div>
</div>
@endsection