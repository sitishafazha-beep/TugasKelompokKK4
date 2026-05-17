@extends('layouts.app')

@section('content')
<div class="pt-32 pb-20 px-6 max-w-7xl mx-auto">
    <div class="text-center mb-16">
        <h1 class="text-5xl font-serif font-bold text-gray-900 mb-4">Our Full Menu</h1>
        <p class="text-gray-500 max-w-xl mx-auto italic">"Setiap scoop adalah cerita, setiap rasa adalah kebahagiaan."</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">
        @foreach($menus as $item)
        <div class="bg-white/60 backdrop-blur p-6 rounded-[3rem] border border-white shadow-xl hover:-translate-y-2 transition-all">
            <div class="aspect-square rounded-[2.2rem] overflow-hidden mb-6">
                <img src="{{ asset('assets/img/' . $item->image) }}" 
                     onerror="this.src='https://images.unsplash.com/photo-1557142046-c704a3adf364?q=80&w=500';"
                     class="w-full h-full object-cover" alt="{{ $item->name }}">
            </div>
            <div class="px-2">
                <h3 class="text-2xl font-bold mb-2">{{ $item->name }}</h3>
                <p class="text-gray-500 text-sm mb-6 leading-relaxed">{{ $item->description }}</p>
                <div class="flex justify-between items-center border-t border-pink-50 pt-4">
                    <span class="text-2xl font-bold text-gray-900">Rp {{ number_format($item->price, 0, ',', '.') }}</span>
                    <a href="{{ route('payment') }}" class="bg-pink-500 text-white px-6 py-2 rounded-2xl font-bold shadow-lg shadow-pink-100 hover:bg-pink-600 transition">Order</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection