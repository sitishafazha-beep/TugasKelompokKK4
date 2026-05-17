@extends('layouts.admin')

@section('content')
<div class="bg-white rounded-[2.5rem] p-8 shadow-sm border border-slate-50">
    <h1 class="text-2xl font-black text-slate-900 mb-8">User Management</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="p-6 border border-slate-100 rounded-[2rem] hover:shadow-lg transition-all text-center">
            <div class="w-20 h-20 bg-pink-500 rounded-full mx-auto mb-4 flex items-center justify-center text-white text-2xl font-black shadow-lg">
                C
            </div>
            <h3 class="font-black text-slate-900">Customer Velato</h3>
            <p class="text-xs text-slate-400 mb-4">khalifahjatuhdarimotor@gmail.com</p>
            <button class="text-pink-500 text-sm font-bold hover:underline">Detail Profil</button>
        </div>
    </div>
</div>
@endsection