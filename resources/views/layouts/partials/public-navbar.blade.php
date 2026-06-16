<header class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 bg-var1">
    <nav class="max-w-340 mx-auto px-8">
        <div class="flex items-center justify-between h-18">
            {{-- ========== Logo ========== --}}
            <a href="/" class="flex items-center gap-3 shrink-0">
                <img src="{{ asset('images/logo-white.png') }}" alt="Logo Pemerintahan Desa Labuan" loading="lazy" class="h-9">
            </a>

            {{-- ========== Desktop Menu ========== --}}
            <div class="flex items-center gap-10">
                <a href="/" class="font-medium text-var5 hover:text-var3 transition-all duration-200 @yield('beranda_active')">Beranda</a>
                <a href="/profil-desa" class="font-medium text-var5 hover:text-var3 transition-all duration-200 @yield('profil_active')">Profil Desa</a>
                <a href="/berita" class="font-medium text-var5 hover:text-var3 transition-all duration-200 @yield('berita_active')">Berita Terkini</a>
                <a href="/kontak" class="font-medium text-var5 hover:text-var3 transition-all duration-200 @yield('kontak_active')">Kontak Kami</a>
                
                <div class="space-x-2 ps-8">
                    <a href="{{ route('login') }}" class="px-6 py-2.25 rounded-full font-semibold text-var5 border border-var6 hover:bg-var2 transition-all duration-300 cursor-pointer">Masuk</a>
                    <a href="{{ route('register') }}" class="px-6 py-2.25 rounded-full font-semibold text-var5 border border-var3 bg-var3 hover:bg-var4 transition-all duration-300 cursor-pointer">Daftar</a>
                </div>
            </div>

            {{-- ========== Mobile Hamburger ========== --}}
            {{-- <button @click="mobileOpen = !mobileOpen" class="lg:hidden p-2 rounded-lg hover:bg-gray-100">
                <i data-lucide="menu" x-show="!mobileOpen" class="w-6 h-6"></i>
                <i data-lucide="x" x-show="mobileOpen" class="w-6 h-6"></i>
            </button> --}}
        </div>

        {{-- ========== Mobile Menu ========== --}}
        {{-- <div x-show="mobileOpen" x-transition
            class="lg:hidden bg-white rounded-2xl mt-2 shadow-xl border border-gray-100 p-4">
            <a href="/" class="block px-4 py-3 text-gray-700 hover:bg-emerald-50 rounded-lg">Beranda</a>
            <a href="/profil-desa" class="block px-4 py-3 text-gray-700 hover:bg-emerald-50 rounded-lg">Profil
                Desa</a>
            <a href="/berita" class="block px-4 py-3 text-gray-700 hover:bg-emerald-50 rounded-lg">Berita</a>
            <a href="/kontak" class="block px-4 py-3 text-gray-700 hover:bg-emerald-50 rounded-lg">Kontak Kami</a>
            <hr class="my-2">
            @auth
                <a href="{{ route('user.dashboard') }}"
                    class="block px-4 py-3 text-gray-700 hover:bg-emerald-50 rounded-lg">Dashboard</a>
                <a href="{{ route('user.profile.edit') }}"
                    class="block px-4 py-3 text-gray-700 hover:bg-emerald-50 rounded-lg">Profil Saya</a>
                <form action="{{ route('logout') }}" method="POST" class="block">
                    @csrf
                    <button type="submit"
                        class="w-full text-left px-4 py-3 text-red-600 hover:bg-red-50 rounded-lg">Keluar</button>
                </form>
            @else
                <a href="{{ route('login') }}"
                    class="block px-4 py-3 text-emerald-700 font-medium hover:bg-emerald-50 rounded-lg">Masuk</a>
                <a href="{{ route('register') }}"
                    class="block px-4 py-3 mt-1 text-center text-white bg-linear-to-r from-emerald-500 to-teal-600 rounded-lg">Daftar</a>
            @endauth
        </div> --}}
    </nav>
</header>