@extends('layouts.app')

@section('content')
<section class="relative min-h-screen flex items-center pt-20 overflow-hidden">
    <div class="absolute top-20 -left-20 w-96 h-96 bg-pink-200 rounded-full blur-[120px] opacity-40"></div>
    <div class="absolute bottom-0 -right-20 w-96 h-96 bg-blue-100 rounded-full blur-[120px] opacity-40"></div>

    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center relative z-10">
        <div>
            <span class="inline-block bg-pink-100 text-pink-600 px-6 py-2 rounded-full text-xs font-bold uppercase tracking-widest mb-6">Premium Gelato</span>
            <h1 class="text-6xl md:text-8xl font-serif font-black text-gray-900 leading-[0.9] mb-8">
                Pure <br> <span class="gradient-text">Happiness</span> <br> in Every Scoop.
            </h1>
            <p class="text-gray-500 text-lg mb-10 max-w-md leading-relaxed">
                Nikmati kelembutan gelato autentik dengan bahan-bahan organik pilihan. Dibuat fresh setiap hari khusus untukmu.
            </p>
            <div class="flex items-center gap-6">
               <a href="{{ route('customer.dashboard') }}" 
   <a href="{{ Auth::check() ? route('customer.dashboard') : route('login') }}" 
   class="bg-pink-500 text-white px-10 py-4 rounded-full font-bold shadow-lg hover:bg-pink-600 transition-all active:scale-95">
   Order Now
</a>
                </a>
                <div class="flex -space-x-3">
                    <img class="w-12 h-12 rounded-full border-4 border-white shadow-sm" src="https://lh3.googleusercontent.com/a/ACg8ocIPKR-byFYtv7Cqeo4BbvmMhdWF96tQ2rzM-xDXnITSnc53ZEpcXA=s360-c-no">
                    <img class="w-12 h-12 rounded-full border-4 border-white shadow-sm" src="https://lh3.googleusercontent.com/a/ACg8ocLxW-RXxqKF2vrTylsitkJzOy3wxFxB1Ac5lv94qEMqs-h-qdG6zw=s360-c-no">
                    <img class="w-12 h-12 rounded-full border-4 border-white shadow-sm" src="https://lh3.googleusercontent.com/a/ACg8ocKb8A9I7rxsttNclEdJyvDnazbkwepZujBDfQhodLTKcB2HgyQ=s360-c-no">
                    <div class="w-12 h-12 rounded-full bg-gray-900 border-4 border-white flex items-center justify-center text-[10px] text-white font-bold">+99k</div>
                </div>
            </div>
        </div>

        <div class="relative group">
            <div class="absolute inset-0 bg-pink-400 rounded-[4rem] rotate-6 group-hover:rotate-3 transition-transform duration-500"></div>
            <img src="https://images.unsplash.com/photo-1563805042-7684c019e1cb?q=80&w=800" 
                 class="relative rounded-[4rem] shadow-2xl z-10 w-full h-[600px] object-cover -rotate-3 group-hover:rotate-0 transition-transform duration-500 border-8 border-white" 
                 alt="Gelato Hero">
            
            <div class="absolute -bottom-10 -left-10 z-20 glass p-8 rounded-[2.5rem] shadow-2xl border border-white">
                <p class="text-pink-500 font-bold mb-1">Top Rated</p>
                <div class="flex items-center gap-2">
                    <span class="text-3xl font-black text-gray-900">4.9</span>
                    <span class="text-yellow-400 text-xl">★★★★★</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="flavors" class="py-32 bg-white/50">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex justify-between items-end mb-20">
            <div>
                <h2 class="text-5xl font-serif font-bold text-gray-900 mb-4">Our Signature Flavors</h2>
                <p class="text-gray-500 italic">Pilih rasa favoritmu dan biarkan hari-harimu lebih berwarna.</p>
            </div>
            <a href="#" class="text-pink-500 font-bold border-b-2 border-pink-500 pb-1 hover:text-pink-600 transition">See All Menu</a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
            <div class="group">
                <div class="relative h-[450px] rounded-[3rem] overflow-hidden mb-8 shadow-2xl shadow-pink-50 border-4 border-white">
                    <img src="https://i.gojekapi.com/darkroom/gofood-indonesia/v2/images/uploads/c284773a-f019-487c-853c-219326379f6a_Go-Food-Merchant_20251228_181757.jpeg" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity p-10 flex flex-col justify-end">
                        <a href="{{ Auth::check() ? route('customer.dashboard') : route('login') }}" 
                        class="bg-white text-gray-900 py-4 rounded-2xl font-bold hover:bg-pink-500 hover:text-white transition block text-center w-full shadow-lg">
                            Quick Add to Cart
                            </a>
                    </div>
                </div>
                <div class="flex justify-between items-start px-2">
                    <div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-1">Matcha Velvet</h3>
                        <p class="text-gray-400 text-sm">Rich Kyoto Matcha with Azuki</p>
                    </div>
                    <span class="text-xl font-bold text-pink-500">Rp 35k</span>
                </div>
            </div>

            <div class="group">
                <div class="relative h-[450px] rounded-[3rem] overflow-hidden mb-8 shadow-2xl shadow-blue-50 border-4 border-white">
                    <img src="https://www.connoisseurusveg.com/wp-content/uploads/2025/07/mango-sorbet-square.jpg" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity p-10 flex flex-col justify-end">
                    <a href="{{ Auth::check() ? route('customer.dashboard') : route('login') }}" 
                     class="bg-white text-gray-900 py-4 rounded-2xl font-bold hover:bg-pink-500 hover:text-white transition block text-center w-full shadow-lg">
                        Quick Add to Cart
                    </a>
                       
                    </div>
                </div>
                <div class="flex justify-between items-start px-2">
                    <div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-1">Mango Sorbet</h3>
                        <p class="text-gray-400 text-sm">Fresh Tropical Alphonso Mango</p>
                    </div>
                    <span class="text-xl font-bold text-pink-500">Rp 32k</span>
                </div>
            </div>

            <div class="group">
                <div class="relative h-[450px] rounded-[3rem] overflow-hidden mb-8 shadow-2xl shadow-gray-100 border-4 border-white">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZhxaCK6htA7Qey6dpwNR5R8qpOliJfUiEuA&s" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity p-10 flex flex-col justify-end">
                       <a href="{{ Auth::check() ? route('customer.dashboard') : route('login') }}" 
                         class="bg-white text-gray-900 py-4 rounded-2xl font-bold hover:bg-pink-500 hover:text-white transition block text-center w-full shadow-lg">
                            Quick Add to Cart
                        </a>
                    </div>
                </div>
                <div class="flex justify-between items-start px-2">
                    <div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-1">Choc Noir</h3>
                        <p class="text-gray-400 text-sm">70% Intense Belgian Cocoa</p>
                    </div>
                    <span class="text-xl font-bold text-pink-500">Rp 32k</span>
                </div>
            </div>
        </div>
    </div>
    <div class="relative py-20">
    <div class="absolute inset-0 flex items-center" aria-hidden="true">
        <div class="w-full border-t border-gray-200"></div>
    </div>
    <div class="relative flex justify-center">
        <span class="bg-[#FCFCFC] px-6 text-sm font-serif italic text-gray-400">
            Discover more about Velato
        </span>
    </div>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-stretch">
    </div>
    <div class="mt-32 grid grid-cols-1 md:grid-cols-2 gap-10 items-stretch">
    
    <div id="about" class="glass p-12 rounded-[3rem] border border-white shadow-xl scroll-mt-32">
        <h2 class="text-4xl font-serif font-bold text-gray-900 mb-6">Our Story</h2>
        <p class="text-gray-500 leading-relaxed mb-8">
            Velato menyajikan kebahagiaan dalam setiap sendokan. Dibuat dengan bahan-bahan organik pilihan dan resep autentik untuk menciptakan tekstur gelato yang sempurna bagi harimu.
        </p>
        <div class="flex gap-4">
            <span class="px-4 py-2 bg-pink-100 text-pink-500 rounded-full text-xs font-bold">Premium Quality</span>
            <span class="px-4 py-2 bg-blue-100 text-blue-500 rounded-full text-xs font-bold">100% Organic</span>
        </div>
    </div>

    <div id="location" class="bg-gray-900 p-12 rounded-[3rem] text-white shadow-2xl flex flex-col justify-between scroll-mt-32">
        <div>
            <h2 class="text-4xl font-serif font-bold mb-6">Visit Our Store</h2>
            <p class="text-gray-400 mb-8">
                Jl. Gelato Manis No. 4, Bandung<br>
                Buka setiap hari: 10:00 - 22:00 WIB
            </p>
        </div>
        
        <a href="https://maps.google.com" target="_blank" 
           class="inline-block w-fit bg-white text-gray-900 px-8 py-4 rounded-full font-bold hover:bg-pink-500 hover:text-white transition-all text-center shadow-lg">
            Open in Google Maps
        </a>
    </div>
</div>
</section>
@endsection