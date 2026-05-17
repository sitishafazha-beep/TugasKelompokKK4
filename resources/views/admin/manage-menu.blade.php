@extends('layouts.admin')

@section('content')
<div class="bg-white rounded-[2.5rem] p-8 shadow-sm border border-slate-50">
    <div class="flex justify-between items-center mb-8">
        <div>
            <h1 class="text-2xl font-black text-slate-900">Manage Menu</h1>
            <p class="text-slate-400 text-sm">Update daftar rasa gelato kamu di sini.</p>
        </div>
        <button class="bg-pink-500 text-white px-6 py-3 rounded-2xl font-bold hover:bg-pink-600 transition-all">
            + Tambah Menu
        </button>
    </div>

    <table class="w-full text-left">
        <thead>
            <tr class="text-slate-400 text-xs uppercase tracking-widest border-b border-slate-50">
                <th class="pb-4">Produk</th>
                <th class="pb-4">Kategori</th>
                <th class="pb-4">Harga</th>
                <th class="pb-4 text-right">Aksi</th>
            </tr>
        </thead>
        <tbody class="text-slate-700">
            <tr class="border-b border-slate-50 hover:bg-slate-50 transition-all">
                <td class="py-4 flex items-center gap-3">
                    <div class="w-12 h-12 bg-pink-100 rounded-xl">
                  <img src="https://i.gojekapi.com/darkroom/gofood-indonesia/v2/images/uploads/c284773a-f019-487c-853c-219326379f6a_Go-Food-Merchant_20251228_181757.jpeg">
                    </div>
                    <span class="font-bold">Matcha Velvet</span>
                </td>
                <td class="py-4 text-sm">Best Seller</td>
                <td class="py-4 font-bold">Rp 35.000</td>
                <td class="py-4 text-right">
                    <button class="text-blue-500 font-bold mr-3">Edit</button>
                    <button class="text-red-500 font-bold">Hapus</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection