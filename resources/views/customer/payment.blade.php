@extends('layouts.customer')

@section('content')
<div class="pt-32 pb-20 px-6 max-w-5xl mx-auto min-h-screen" x-data="{ 
    selectedPrice: 0, 
    qty: 1,
    updatePrice(e) {
        this.selectedPrice = e.target.options[e.target.selectedIndex].dataset.price;
    }
}">
    
    <div class="mb-10">
        <h1 class="text-4xl font-serif font-bold text-gray-900">Payment Checkout 💸</h1>
        <p class="text-gray-500">Pilih menu favoritmu dan selesaikan pembayaran tunai di kasir.</p>
    </div>

    @if(session('success'))
        <div class="mb-6 p-4 bg-green-100 border border-green-200 text-green-700 rounded-2xl flex items-center">
            <span class="mr-2">✅</span> {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="mb-6 p-4 bg-red-100 border border-red-200 text-red-700 rounded-2xl flex items-center">
            <span class="mr-2">❌</span> {{ session('error') }}
        </div>
    @endif

    <div class="grid lg:grid-cols-3 gap-8">
        <div class="lg:col-span-2">
            <form action="{{ route('processPayment') }}" method="POST" class="bg-white p-8 rounded-[2.5rem] shadow-xl shadow-pink-50 border border-pink-50 space-y-8">
                
                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-4 ml-2">Pilih Menu Es Krim</label>
                    <select name="menu_id" @change="updatePrice($event)" required
                        class="w-full px-6 py-4 rounded-2xl bg-pink-50/50 border border-pink-100 focus:border-pink-400 focus:ring-4 focus:ring-pink-100 transition-all outline-none appearance-none">
                        <option value="" disabled selected>-- Klik untuk memilih menu --</option>
                        @foreach($menus as $menu)
                            <option value="{{ $menu->id }}" data-price="{{ $menu->price }}">
                                {{ $item->name }} (Stok: {{ $menu->stock }})
                            </option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-4 ml-2">Jumlah Pembelian (Qty)</label>
                    <input type="number" name="quantity" x-model="qty" min="1" required
                        class="w-full px-6 py-4 rounded-2xl bg-pink-50/50 border border-pink-100 focus:border-pink-400 focus:ring-4 focus:ring-pink-100 transition-all outline-none shadow-sm"
                        placeholder="Masukkan jumlah...">
                </div>

                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-4 ml-2">Metode Pembayaran</label>
                    <div class="flex items-center p-4 bg-white border-2 border-pink-400 rounded-2xl">
                        <div class="w-10 h-10 bg-pink-500 rounded-full flex items-center justify-center text-white mr-4">
                            💵
                        </div>
                        <span class="font-bold text-gray-800">CASH (Bayar Tunai)</span>
                    </div>
                </div>

                <button type="submit" 
                    class="w-full bg-gradient-to-r from-pink-500 to-rose-500 text-white font-bold py-5 rounded-2xl shadow-lg shadow-pink-200 hover:shadow-pink-400 hover:-translate-y-1 active:scale-95 transition-all duration-300 text-lg">
                    Proses Pembayaran Sekarang
                </button>
            </form>
        </div>

        <div class="lg:col-span-1">
            <div class="bg-gray-900 text-white p-8 rounded-[2.5rem] shadow-2xl sticky top-32">
                <h3 class="text-xl font-serif font-bold mb-6 border-b border-gray-700 pb-4">Order Summary</h3>
                
                <div class="space-y-4">
                    <div class="flex justify-between text-gray-400">
                        <span>Harga Satuan</span>
                        <span class="text-white">Rp <span x-text="new Int32Array([selectedPrice]).toLocaleString('id-ID')"></span></span>
                    </div>
                    <div class="flex justify-between text-gray-400">
                        <span>Jumlah</span>
                        <span class="text-white" x-text="qty + ' Pcs'"></span>
                    </div>
                    <div class="pt-4 border-t border-gray-700 flex justify-between items-end">
                        <div>
                            <p class="text-xs text-pink-400 font-bold uppercase tracking-widest">Total Bayar</p>
                            <p class="text-3xl font-bold text-white mt-1">
                                Rp <span x-text="(selectedPrice * qty).toLocaleString('id-ID')"></span>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="mt-10 p-4 bg-gray-800 rounded-2xl border border-gray-700 text-xs text-gray-400 leading-relaxed">
                    ℹ️ Silahkan tunjukkan nomor invoice setelah ini kepada kasir Velato untuk mendapatkan struk fisik.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection