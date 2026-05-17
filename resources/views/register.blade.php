<script src="https://cdn.tailwindcss.com"></script>

<div class="min-h-screen bg-[#FFF5F7] flex items-center justify-center p-6 font-sans">
    <div class="bg-white w-full max-w-md rounded-[3rem] shadow-2xl p-10 border border-pink-50">
        
        <div class="text-center mb-10">
            <h1 class="text-4xl font-serif font-black text-pink-500 mb-2">Join Velato!</h1>
            <p class="text-gray-400 text-sm">Masuk untuk menikmati kelezatan Velato.</p>
        </div>

        <form action="{{ route('register') }}" method="POST" class="space-y-6">
            @csrf
            
            <div>
                <label class="block text-sm font-bold text-gray-700 mb-2 ml-1 text-left">Full Name</label>
                <input type="text" name="name" placeholder="Nama lengkap kamu" 
                       class="w-full px-6 py-4 bg-white border border-pink-100 rounded-2xl focus:ring-2 focus:ring-pink-200 outline-none transition-all placeholder:text-gray-300">
            </div>

            <div>
                <label class="block text-sm font-bold text-gray-700 mb-2 ml-1 text-left">Email Address</label>
                <input type="email" name="email" placeholder="nama@email.com" 
                       class="w-full px-6 py-4 bg-white border border-pink-100 rounded-2xl focus:ring-2 focus:ring-pink-200 outline-none transition-all placeholder:text-gray-300">
            </div>

            <div>
                <label class="block text-sm font-bold text-gray-700 mb-2 ml-1 text-left">Password</label>
                <input type="password" name="password" placeholder="••••••••" 
                       class="w-full px-6 py-4 bg-white border border-pink-100 rounded-2xl focus:ring-2 focus:ring-pink-200 outline-none transition-all placeholder:text-gray-300">
            </div>

            <button type="submit" 
                    class="w-full bg-pink-500 text-white py-4 rounded-2xl font-bold shadow-lg shadow-pink-100 hover:bg-pink-600 transition-all active:scale-95 mt-4">
                Create Account
            </button>
        </form>

        <p class="text-sm text-gray-500 text-center mt-8">
            Sudah punya akun? 
            <a href="{{ route('login') }}" class="text-pink-500 font-bold hover:text-pink-600 transition-colors">
                Masuk Sekarang
            </a>
        </p>

    </div>
</div>