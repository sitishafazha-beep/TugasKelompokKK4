@extends('layouts.customer')

@section('content')
<nav class="fixed top-0 w-full z-50 px-6 py-8">
    <nav class="fixed top-6 left-1/2 -translate-x-1/2 w-[90%] max-w-7xl z-50">
        <div class="bg-white/80 backdrop-blur-md border border-white/20 px-8 py-4 rounded-[2.5rem] shadow-xl flex justify-between items-center">
            
            <a href="/" class="text-2xl font-black text-pink-500">Velato<span class="text-slate-900">.</span></a>

@auth
<div class="relative flex items-center gap-4 group">
    <button class="flex items-center gap-3 bg-white p-2 pr-4 rounded-full shadow-sm border border-slate-100 hover:bg-slate-50 transition-all">
        <div class="w-10 h-10 bg-pink-500 rounded-full flex items-center justify-center text-white font-bold shadow-inner">
            {{ substr(Auth::user()->name, 0, 1) }}
        </div>
        <div class="text-left hidden md:block">
            <p class="text-[10px] text-slate-400 font-bold uppercase tracking-wider leading-none">Customer Account</p>
            <p class="text-sm text-slate-900 font-black">{{ explode(' ', Auth::user()->name)[0] }}</p>
        </div>
    </button>

    <div class="absolute top-full right-0 mt-2 w-64 bg-white rounded-[2rem] shadow-xl border border-slate-50 p-6 invisible group-hover:visible opacity-0 group-hover:opacity-100 transition-all z-50">
        <div class="flex flex-col items-center text-center border-b border-slate-50 pb-4 mb-4">
            <div class="w-16 h-16 bg-pink-50 rounded-full flex items-center justify-center text-pink-500 text-2xl font-black mb-3">
                {{ substr(Auth::user()->name, 0, 1) }}
            </div>
            <p class="text-xs text-slate-400 mb-1">{{ Auth::user()->email }}</p>
            <h3 class="text-slate-900 font-bold">Halo, {{ Auth::user()->name }}!</h3>
        </div>
        
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="w-full py-3 bg-red-50 text-red-500 rounded-2xl font-bold hover:bg-red-500 hover:text-white transition-all flex items-center justify-center gap-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" /></svg>
                Logout
            </button>
        </form>
    </div>
</div>
@endauth

@guest
    <a href="{{ route('login') }}" class="px-8 py-3 bg-slate-900 text-white rounded-full font-bold hover:bg-pink-500 transition-all shadow-lg shadow-slate-200">Sign In</a>
@endguest
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </nav>

<div class="pt-32 pb-20 max-w-7xl mx-auto px-6 font-sans">
    
    <div class="flex justify-between items-end mb-12">
        <div>
            <h1 class="text-5xl font-serif font-bold text-gray-900 mb-2">Welcome Back, <span class="text-pink-500">Foodies!</span></h1>
            <p class="text-gray-500 italic">Mau makan Gelato apa hari ini?</p>
        </div>
        <div class="hidden md:block">
            <div class="glass p-4 rounded-3xl text-center min-w-[120px] border border-white shadow-sm">
                <p class="text-[10px] uppercase font-bold text-gray-400 tracking-widest">Points</p>
                <p class="text-xl font-bold text-pink-500">1,250</p>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
        
        <div class="lg:col-span-2 space-y-8">
            <h2 class="text-2xl font-bold text-gray-800 flex items-center gap-3">
                <span class="w-8 h-8 bg-pink-500 text-white rounded-full flex items-center justify-center text-sm shadow-lg shadow-pink-200">1</span>
                Pilih Menu Favoritmu
            </h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-white p-5 rounded-[2.5rem] shadow-xl shadow-gray-100 border border-gray-50 group transition-all hover:-translate-y-2">
                    <div class="relative h-52 rounded-[2rem] overflow-hidden mb-5">
                        <img src="https://i.gojekapi.com/darkroom/gofood-indonesia/v2/images/uploads/c284773a-f019-487c-853c-219326379f6a_Go-Food-Merchant_20251228_181757.jpeg" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <span class="absolute top-4 left-4 bg-white/90 backdrop-blur px-3 py-1 rounded-full text-[10px] font-bold text-pink-500 uppercase">Best Seller</span>
                    </div>
                    <div class="px-2">
                        <h3 class="text-xl font-bold text-gray-800">Matcha Velvet</h3>
                        <p class="text-sm text-gray-400 mt-1 line-clamp-2">Premium Kyoto matcha dengan vanilla cream.</p>
                        <div class="flex justify-between items-center mt-6">
                            <span class="text-lg font-black text-gray-900">Rp 35.000</span>
                            <button onclick="addToCart('Matcha Velvet', 35000, 'https://i.gojekapi.com/darkroom/gofood-indonesia/v2/images/uploads/c284773a-f019-487c-853c-219326379f6a_Go-Food-Merchant_20251228_181757.jpeg')" 
                                    class="bg-pink-100 text-pink-500 w-12 h-12 rounded-2xl flex items-center justify-center hover:bg-pink-500 hover:text-white transition-all font-bold shadow-sm active:scale-90">
                                +
                            </button>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-5 rounded-[2.5rem] shadow-xl shadow-gray-100 border border-gray-50 group transition-all hover:-translate-y-2">
                    <div class="relative h-52 rounded-[2rem] overflow-hidden mb-5">
                        <img src="https://www.connoisseurusveg.com/wp-content/uploads/2025/07/mango-sorbet-square.jpg" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="px-2">
                        <h3 class="text-xl font-bold text-gray-800">Mango Sorbet</h3>
                        <p class="text-sm text-gray-400 mt-1 line-clamp-2">Kesegaran mangga Alphonso asli.</p>
                        <div class="flex justify-between items-center mt-6">
                            <span class="text-lg font-black text-gray-900">Rp 32.000</span>
                            <button onclick="addToCart('Mango Sorbet', 32000, 'https://www.connoisseurusveg.com/wp-content/uploads/2025/07/mango-sorbet-square.jpg')" 
                                    class="bg-pink-100 text-pink-500 w-12 h-12 rounded-2xl flex items-center justify-center hover:bg-pink-500 hover:text-white transition-all font-bold shadow-sm active:scale-90">
                                +
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="space-y-8">
            <h2 class="text-2xl font-bold text-gray-800 flex items-center gap-3">
                <span class="w-8 h-8 bg-pink-500 text-white rounded-full flex items-center justify-center text-sm shadow-lg shadow-pink-200">2</span>
                Ringkasan Order
            </h2>

            <div class="glass p-8 rounded-[3rem] shadow-2xl border border-white sticky top-32">
                <div id="cart-list" class="space-y-4 mb-8 max-h-[250px] overflow-y-auto pr-2">
                    <p id="empty-msg" class="text-center text-gray-400 text-sm italic py-10">Keranjang masih kosong..</p>
                </div>

                <div class="mb-8 pt-4 border-t border-gray-100">
                    <label class="block text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-4">Pilih Pembayaran</label>
                    <div class="grid grid-cols-3 gap-2">
                        <label class="cursor-pointer">
                            <input type="radio" name="pay_opt" value="DANA" class="hidden peer" checked>
                            <div class="p-2 border border-gray-100 rounded-xl text-center text-[10px] font-bold text-gray-500 peer-checked:border-pink-500 peer-checked:bg-pink-50 transition-all">DANA</div>
                        </label>
                        <label class="cursor-pointer">
                            <input type="radio" name="pay_opt" value="OVO" class="hidden peer">
                            <div class="p-2 border border-gray-100 rounded-xl text-center text-[10px] font-bold text-gray-500 peer-checked:border-pink-500 peer-checked:bg-pink-50 transition-all">OVO</div>
                        </label>
                        <label class="cursor-pointer">
                            <input type="radio" name="pay_opt" value="QRIS" class="hidden peer">
                            <div class="p-2 border border-gray-100 rounded-xl text-center text-[10px] font-bold text-gray-500 peer-checked:border-pink-500 peer-checked:bg-pink-50 transition-all">QRIS</div>
                        </label>
                    </div>
                </div>

                <div class="space-y-2 mb-8">
                    <div class="flex justify-between text-xl font-serif font-bold text-gray-900 border-t border-dashed border-gray-200 pt-5">
                        <span>Total Bayar</span>
                        <span id="display-total" class="text-pink-500">Rp 0</span>
                    </div>
                </div>

                <form action="{{ route('processPayment') }}" method="POST">
                    @csrf
                    <input type="hidden" name="cart_data" id="cart-hidden">
                    <input type="hidden" name="method" id="method-hidden" value="DANA">
                    <button type="submit" id="btn-bayar" disabled 
                            class="w-full bg-gray-200 text-gray-400 py-5 rounded-[2.5rem] font-black text-lg shadow-xl cursor-not-allowed transition-all">
                        Konfirmasi & Bayar
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
let cart = [];

function addToCart(name, price, image) {
    const item = cart.find(i => i.name === name);
    if (item) { item.qty++; } else { cart.push({ name, price, image, qty: 1 }); }
    render();
}

function updateQty(idx, d) {
    cart[idx].qty += d;
    if (cart[idx].qty < 1) cart.splice(idx, 1);
    render();
}

function render() {
    const container = document.getElementById('cart-list');
    const btn = document.getElementById('btn-bayar');
    container.innerHTML = '';
    let total = 0;

    if (cart.length === 0) {
        container.innerHTML = '<p class="text-center text-gray-400 text-sm italic py-10">Keranjang masih kosong..</p>';
        btn.disabled = true;
        btn.className = "w-full bg-gray-200 text-gray-400 py-5 rounded-[2.5rem] font-black text-lg cursor-not-allowed";
        document.getElementById('display-total').innerText = "Rp 0";
        return;
    }

    btn.disabled = false;
    btn.className = "w-full bg-gray-900 text-white py-5 rounded-[2.5rem] font-black text-lg shadow-2xl hover:bg-pink-500 active:scale-95 transition-all cursor-pointer";

    cart.forEach((item, i) => {
        total += item.price * item.qty;
        container.innerHTML += `
            <div class="flex justify-between items-center bg-white/50 p-4 rounded-3xl border border-white shadow-sm">
                <div class="flex items-center gap-3">
                    <img src="${item.image}" class="w-10 h-10 rounded-xl object-cover">
                    <div class="text-[10px] font-bold text-gray-800">${item.name}<br><span class="text-pink-500">Rp ${(item.price * item.qty).toLocaleString()}</span></div>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="updateQty(${i}, -1)" class="w-6 h-6 bg-white border border-gray-100 rounded-lg text-xs">-</button>
                    <span class="text-xs font-bold w-4 text-center">${item.qty}</span>
                    <button onclick="updateQty(${i}, 1)" class="w-6 h-6 bg-white border border-gray-100 rounded-lg text-xs">+</button>
                </div>
            </div>`;
    });

    document.getElementById('display-total').innerText = "Rp " + total.toLocaleString();
    document.getElementById('cart-hidden').value = JSON.stringify(cart);
}

// Payment method listener
document.querySelectorAll('input[name="pay_opt"]').forEach(r => {
    r.addEventListener('change', (e) => { document.getElementById('method-hidden').value = e.target.value; });
});
</script>

<style>
    .glass { background: rgba(255, 255, 255, 0.8); backdrop-filter: blur(15px); -webkit-backdrop-filter: blur(15px); }
</style>
@endsection