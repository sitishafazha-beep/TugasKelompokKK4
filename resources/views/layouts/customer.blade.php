<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Velato - Customer Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-[#FFF5F7]">

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

    <main class="pt-32 pb-12">
        @yield('content')
    </main>

</body>
</html>