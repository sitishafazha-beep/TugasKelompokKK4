@extends('layouts.app')

@section('content')
<div class="pt-24 pb-20 px-6 max-w-3xl mx-auto min-h-screen">
    <div class="bg-white p-10 rounded-[3rem] shadow-2xl shadow-pink-100/50 border border-pink-50 text-center relative overflow-hidden mt-10">
        
        <div class="absolute top-0 left-0 w-full h-32 bg-gradient-to-r from-pink-100 to-pink-50"></div>

        <div class="relative z-10 mx-auto w-32 h-32 bg-white rounded-full p-2 shadow-lg mb-6 mt-4">
            <div class="w-full h-full bg-pink-500 rounded-full flex items-center justify-center text-white text-5xl font-bold">
                {{ substr(Auth::user()->name, 0, 1) }}
            </div>
        </div>

        <h1 class="text-4xl font-serif font-bold text-gray-900 mb-2">{{ Auth::user()->name }}</h1>
        <p class="text-pink-500 font-medium bg-pink-50 inline-block px-4 py-1 rounded-full text-sm mb-8 uppercase tracking-widest">
            {{ Auth::user()->role }} Account
        </p>

        <div class="bg-gray-50 rounded-3xl p-6 text-left space-y-4 max-w-md mx-auto border border-gray-100">
            <div>
                <label class="text-xs text-gray-400 font-bold uppercase tracking-wider block mb-1">Email Address</label>
                <p class="text-gray-800 font-medium text-lg">{{ Auth::user()->email }}</p>
            </div>
            <div>
                <label class="text-xs text-gray-400 font-bold uppercase tracking-wider block mb-1">Account Created</label>
                <p class="text-gray-800 font-medium text-lg">{{ Auth::user()->created_at->format('d F Y') }}</p>
            </div>
        </div>

        <div class="mt-10">
            <a href="{{ route('menu') }}" class="inline-block bg-gray-900 text-white px-8 py-3 rounded-full font-bold hover:bg-pink-500 transition-colors duration-300">
                Kembali ke Menu
            </a>
        </div>
    </div>
</div>
@endsection