@extends('layouts.admin')

@section('content')
<div class="flex justify-between items-center mb-10">
    <div>
        <h1 class="text-4xl font-serif font-bold text-gray-900">Welcome Back, Admin!</h1>
        <p class="text-gray-500">Berikut adalah ringkasan bisnis Velato hari ini.</p>
    </div>
    <div class="glass p-3 rounded-full flex items-center gap-4 px-6">
        @auth
<div class="flex items-center gap-3">
    <div class="text-right">
        <p class="text-[10px] font-bold text-slate-400 uppercase leading-none">Administrator</p>
        <p class="text-sm font-bold text-slate-800">{{ Auth::user()->name }}</p>
    </div>
    
    <form action="{{ route('logout') }}" method="POST" class="inline">
        @csrf
        <button type="submit" class="p-2 bg-red-50 text-red-500 rounded-lg hover:bg-red-500 hover:text-white transition-all shadow-sm" title="Logout">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
            </svg>
        </button>
    </form>
</div>
@endauth
        <div class="w-10 h-10 bg-pink-200 rounded-full"></div>
    </div>
</div>

<div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
    <div class="glass p-8 rounded-[2.5rem] relative overflow-hidden group hover:scale-105 transition-all">
        <div class="absolute -top-10 -right-10 w-32 h-32 bg-pink-100 rounded-full opacity-50 group-hover:scale-150 transition-all"></div>
        <p class="text-gray-500 font-medium mb-1">Total Penjualan ($s$)</p>
        <h2 class="text-4xl font-bold text-gray-900">Rp {{ number_format($totalSales ?? 12540000, 0, ',', '.') }}</h2>
        <p class="text-green-500 text-sm font-bold mt-4">+12% dari bulan lalu</p>
    </div>

    <div class="glass p-8 rounded-[2.5rem] relative overflow-hidden group hover:scale-105 transition-all">
        <p class="text-gray-500 font-medium mb-1">Pesanan Aktif</p>
        <h2 class="text-4xl font-bold text-gray-900">42</h2>
        <p class="text-pink-500 text-sm font-bold mt-4">5 pesanan baru masuk</p>
    </div>

    <div class="glass p-8 rounded-[2.5rem] relative overflow-hidden group hover:scale-105 transition-all">
        <p class="text-gray-500 font-medium mb-1">Total Produk</p>
        <h2 class="text-4xl font-bold text-gray-900">18</h2>
        <p class="text-blue-500 text-sm font-bold mt-4">3 kategori tersedia</p>
    </div>
</div>

<h2 class="text-2xl font-serif font-bold mb-6">Best Selling Gelato</h2>
<div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
    <div class="glass p-6 rounded-[3rem] flex gap-6 items-center">
        <div class="w-32 h-32 rounded-[2rem] overflow-hidden shadow-lg">
            <img src="https://i.gojekapi.com/darkroom/gofood-indonesia/v2/images/uploads/c284773a-f019-487c-853c-219326379f6a_Go-Food-Merchant_20251228_181757.jpeg" class="w-full h-full object-cover" alt="Matcha">
        </div>
        <div>
            <h3 class="text-xl font-bold">Matcha Velvet</h3>
            <p class="text-gray-500 text-sm mb-3">Terjual 150+ scoop minggu ini</p>
            <span class="bg-pink-100 text-pink-500 px-4 py-1 rounded-full text-xs font-bold uppercase tracking-widest">Best Seller</span>
        </div>
    </div>

    <div class="glass p-6 rounded-[3rem] flex gap-6 items-center">
        <div class="w-32 h-32 rounded-[2rem] overflow-hidden shadow-lg">
            <img src="https://www.connoisseurusveg.com/wp-content/uploads/2025/07/mango-sorbet-square.jpg" class="w-full h-full object-cover" alt="Mango">
        </div>
        <div>
            <h3 class="text-xl font-bold">Mango Sorbet</h3>
            <p class="text-gray-500 text-sm mb-3">Terjual 120+ scoop minggu ini</p>
            <span class="bg-blue-100 text-blue-500 px-4 py-1 rounded-full text-xs font-bold uppercase tracking-widest">Trending</span>
        </div>
    </div>
</div>
@endsection