@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-[#FFF5F7] px-6 relative overflow-hidden">
    <div class="absolute -top-24 -left-24 w-96 h-96 bg-pink-200 rounded-full mix-blend-multiply filter blur-3xl opacity-50 animate-blob"></div>
    <div class="absolute -bottom-24 -right-24 w-96 h-96 bg-purple-200 rounded-full mix-blend-multiply filter blur-3xl opacity-50 animate-blob animation-delay-2000"></div>

    <div class="max-w-md w-full bg-white/70 backdrop-blur-xl p-10 rounded-[3rem] shadow-2xl border border-white/50 relative z-10 transform transition-all duration-500 hover:scale-[1.01]">
        
        <div class="text-center mb-10">
            <h2 class="text-4xl font-serif font-bold text-pink-500 mb-2">Welcome Back!</h2>
            <p class="text-gray-500 font-medium">Masuk untuk menikmati kelezatan Velato.</p>
        </div>

        <form action="{{ route('login') }}" method="POST" class="space-y-6">
            @csrf
            
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2 ml-1">Email Address</label>
                <input type="email" name="email" value="{{ old('email') }}" required
                    class="w-full px-6 py-4 rounded-2xl bg-white border border-pink-100 focus:border-pink-400 focus:ring-4 focus:ring-pink-100 transition-all duration-300 outline-none text-gray-700 placeholder-gray-400 shadow-sm"
                    placeholder="nama@email.com">
                @error('email')
                    <p class="text-red-400 text-xs mt-2 ml-2 font-medium">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2 ml-1">Password</label>
                <input type="password" name="password" required
                    class="w-full px-6 py-4 rounded-2xl bg-white border border-pink-100 focus:border-pink-400 focus:ring-4 focus:ring-pink-100 transition-all duration-300 outline-none text-gray-700 placeholder-gray-400 shadow-sm"
                    placeholder="••••••••">
            </div>

            <div class="flex items-center justify-between px-1">
                <label class="flex items-center text-sm text-gray-500 cursor-pointer group">
                    <input type="checkbox" class="w-4 h-4 rounded border-pink-200 text-pink-500 focus:ring-pink-400 mr-2 transition cursor-pointer">
                    <span class="group-hover:text-pink-400 transition">Ingat saya</span>
                </label>
            </div>

            <button type="submit" 
                class="w-full bg-gradient-to-r from-pink-400 to-rose-400 text-white font-bold py-4 rounded-2xl shadow-lg shadow-pink-200 hover:shadow-pink-300 hover:-translate-y-1 active:scale-95 transition-all duration-300">
                Sign In to Velato
            </button>
        </form>

        <p class="text-sm text-gray-500 text-center mt-8">
            Belum punya akun? 
            <a href="{{ route('register') }}" class="text-pink-500 font-bold hover:text-pink-600 transition-colors">
        Daftar Sekarang
    </a>
</p>
        </div>
    </div>
</div>

<style>
    /* Tambahan animasi khusus untuk login page */
    @keyframes blob {
        0% { transform: translate(0px, 0px) scale(1); }
        33% { transform: translate(30px, -50px) scale(1.1); }
        66% { transform: translate(-20px, 20px) scale(0.9); }
        100% { transform: translate(0px, 0px) scale(1); }
    }
    .animate-blob {
        animation: blob 7s infinite;
    }
    .animation-delay-2000 {
        animation-delay: 2s;
    }
</style>
@endsection