<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Velato Dashboard - Premium Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; background: linear-gradient(135deg, #fff5f7 0%, #f0f4ff 100%); min-height: 100vh; }
        .glass { background: rgba(255, 255, 255, 0.7); backdrop-filter: blur(15px); border: 1px solid rgba(255, 255, 255, 0.5); }
    </style>
</head>
<body class="flex">
    <aside class="w-64 h-screen sticky top-0 p-6 flex flex-col gap-8 border-r border-pink-100">
        <div class="text-3xl font-serif font-bold text-pink-500">Velato<span class="text-gray-900">.</span></div>
        <nav class="flex flex-col gap-4">
          <div class="flex flex-col gap-2">
    <a href="{{ route('admin.dashboard') }}" 
       class="{{ request()->routeIs('admin.dashboard') ? 'bg-pink-500 text-white' : 'text-slate-400' }} p-4 rounded-2xl font-bold transition-all">
       Dashboard
    </a>
    </a>
    
    <a href="{{ route('admin.manage-menu') }}" 
       class="{{ request()->routeIs('admin.manage-menu') ? 'bg-pink-500 text-white' : 'text-slate-400' }} p-4 rounded-2xl font-bold transition-all">
       Manage Menu
    </a>
    
    <a href="{{ route('admin.transactions') }}" 
       class="{{ request()->routeIs('admin.transactions') ? 'bg-pink-500 text-white' : 'text-slate-400' }} p-4 rounded-2xl font-bold transition-all">
       Transactions
    </a>
    
    <a href="{{ route('admin.users') }}" 
       class="{{ request()->routeIs('admin.users') ? 'bg-pink-500 text-white' : 'text-slate-400' }} p-4 rounded-2xl font-bold transition-all">
       Users
    </a>
</div>
            <hr class="my-4 border-slate-100"> <form action="{{ route('logout') }}" method="POST" class="block w-full">
        @csrf <button type="submit" class="w-full flex items-center gap-3 p-4 text-red-500 hover:bg-red-50 rounded-2xl font-bold transition-all">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
            </svg>
            Logout
        </button>
        </nav>
    </aside>

    <main class="flex-1 p-10">
        @yield('content')
    </main>
</body>
</html>