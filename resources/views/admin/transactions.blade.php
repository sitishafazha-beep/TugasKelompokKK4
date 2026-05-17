@extends('layouts.admin')

@section('content')
<div class="bg-white rounded-[2.5rem] p-8 shadow-sm border border-slate-50">
    <h1 class="text-2xl font-black text-slate-900 mb-2">Transactions</h1>
    <p class="text-slate-400 text-sm mb-8">Pantau semua pesanan Foodies Velato.</p>

    <div class="grid grid-cols-1 gap-4">
        <div class="flex justify-between items-center p-6 bg-slate-50 rounded-3xl border border-slate-100">
            <div class="flex gap-4 items-center">
                <div class="p-3 bg-white rounded-2xl shadow-sm italic font-black text-pink-500">V.</div>
                <div>
                    <p class="font-black text-slate-900">#ORD-2026-001</p>
                    <p class="text-xs text-slate-400">Customer Velato • 29 April 2026</p>
                </div>
            </div>
            <div class="text-right">
                <p class="font-black text-slate-900">Rp 120.000</p>
                <span class="text-[10px] bg-green-100 text-green-600 px-3 py-1 rounded-full font-bold uppercase">Selesai</span>
            </div>
        </div>
    </div>
</div>
@endsection