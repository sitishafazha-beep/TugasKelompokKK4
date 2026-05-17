<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Velato - Premium Gelato</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&family=Playfair+Display:wght@700;900&display=swap" rel="stylesheet">
    
    <style>
        html { scroll-behavior: smooth; } /* Agar scroll ke menu halus */
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        .font-serif { font-family: 'Playfair Display', serif; }
        .glass { background: rgba(255, 255, 255, 0.8); backdrop-filter: blur(12px); }
    </style>
</head>
<body class="bg-[#FCFCFC]">

    <nav class="fixed top-0 w-full z-[100] px-6 py-6">
        <div class="max-w-7xl mx-auto glass rounded-[2.5rem] px-10 py-4 flex justify-between items-center border border-white shadow-xl">
            <a href="{{ Auth::check() ? route('customer.dashboard') : url('/') }}" class="text-2xl font-serif font-black text-pink-500">
                Velato<span class="text-gray-900">.</span>
            </a>
            
           <div class="hidden md:flex gap-10">
    <a href="{{ Auth::check() ? route('customer.dashboard') : url('/') }}" class="text-sm font-bold text-gray-700">Home</a>
    <a href="#flavors" class="text-sm font-bold text-gray-400 hover:text-pink-500 transition-colors">Flavors</a>
    <a href="#about" class="text-sm font-bold text-gray-400 hover:text-pink-500 transition-colors">About</a>
</div>

            <div class="flex items-center gap-4">
                @auth
                    <div class="flex items-center gap-3 bg-white pr-5 pl-2 py-2 rounded-full border border-gray-100 shadow-sm">
                        <div class="w-8 h-8 bg-pink-500 rounded-full flex items-center justify-center text-white text-xs font-bold shadow-inner">
                            {{ substr(Auth::user()->name, 0, 1) }}
                        </div>
                        <span class="text-xs font-bold text-gray-800">{{ Auth::user()->name }}</span>
                        
                        <form action="{{ route('logout') }}" method="POST" class="inline ml-2">
                            @csrf
                            <button type="submit" class="text-gray-300 hover:text-red-500 transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                </svg>
                            </button>
                        </form>
                    </div>
                @else
                    <a href="{{ route('login') }}" class="bg-gray-900 text-white px-8 py-3 rounded-full text-sm font-bold hover:bg-pink-500 transition-all">
                        Sign In
                    </a>
                @endauth
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

</body>
</html>