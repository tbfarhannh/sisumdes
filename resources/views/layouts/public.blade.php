<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Website Resmi Desa Mekarsari, Kecamatan Anyar, Kabupaten Serang, Banten">
    <title>@yield('title', 'Desa Mekarsari') - Desa Mekarsari</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-gray-50 text-gray-800 antialiased">
    
    <!-- Header / Navbar -->
    <header x-data="{ mobileOpen: false, scrolled: false }" 
            x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 20 })"
            class="fixed top-0 left-0 right-0 z-50 transition-all duration-300"
            :class="scrolled ? 'bg-white/95 backdrop-blur-md shadow-lg' : 'bg-transparent'">
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16 lg:h-20">
                <!-- Logo -->
                <a href="/" class="flex items-center gap-3 shrink-0">
                    <div class="w-10 h-10 bg-linear-to-br from-emerald-500 to-teal-600 rounded-xl flex items-center justify-center shadow-lg shadow-emerald-500/25">
                        <i data-lucide="home" class="w-5 h-5 text-white"></i>
                    </div>
                    <div class="hidden sm:block">
                        <h1 class="text-lg font-bold text-gray-900 leading-tight">Desa Mekarsari</h1>
                        <p class="text-xs text-gray-500">Kec. Anyar, Kab. Serang</p>
                    </div>
                </a>

                <!-- Desktop Menu -->
                <div class="hidden lg:flex items-center gap-1">
                    <a href="/" class="px-4 py-2 text-sm font-medium text-gray-700 hover:text-emerald-600 rounded-lg hover:bg-emerald-50 transition-colors @yield('beranda_active')">Beranda</a>
                    <a href="/profil-desa" class="px-4 py-2 text-sm font-medium text-gray-700 hover:text-emerald-600 rounded-lg hover:bg-emerald-50 transition-colors @yield('profil_active')">Profil Desa</a>
                    <a href="/berita" class="px-4 py-2 text-sm font-medium text-gray-700 hover:text-emerald-600 rounded-lg hover:bg-emerald-50 transition-colors @yield('berita_active')">Berita</a>
                    <a href="/kontak" class="px-4 py-2 text-sm font-medium text-gray-700 hover:text-emerald-600 rounded-lg hover:bg-emerald-50 transition-colors @yield('kontak_active')">Kontak Kami</a>
                </div>

                <!-- CTA Buttons -->
                <div class="hidden lg:flex items-center gap-3">
                    @auth
                        <div x-data="{ open: false }" class="relative">
                            <button @click="open = !open" class="flex items-center gap-2 px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-100 rounded-lg transition-colors">
                                <div class="w-8 h-8 bg-emerald-100 rounded-full flex items-center justify-center">
                                    <span class="text-emerald-700 font-semibold text-xs">{{ strtoupper(substr(auth()->user()->name, 0, 1)) }}</span>
                                </div>
                                <span class="hidden sm:inline">{{ auth()->user()->name }}</span>
                                <i data-lucide="chevron-down" class="w-4 h-4"></i>
                            </button>
                            <div x-show="open" @click.away="open = false" x-transition class="absolute right-0 mt-2 w-56 bg-white rounded-xl shadow-xl border border-gray-100 py-2 z-50">
                                <a href="{{ route('user.dashboard') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-emerald-50">Dashboard</a>
                                <a href="{{ route('user.profile.edit') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-emerald-50">Profil Saya</a>
                                <hr class="my-1">
                                <form action="{{ route('logout') }}" method="POST" class="block">
                                    @csrf
                                    <button type="submit" class="w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-red-50">Keluar</button>
                                </form>
                            </div>
                        </div>
                    @else
                        <a href="{{ route('login') }}" class="px-4 py-2 text-sm font-medium text-emerald-700 border border-emerald-300 rounded-lg hover:bg-emerald-50 transition-colors">
                            Masuk
                        </a>
                        <a href="{{ route('register') }}" class="px-5 py-2.5 text-sm font-medium text-white bg-linear-to-r from-emerald-500 to-teal-600 rounded-lg hover:from-emerald-600 hover:to-teal-700 shadow-md shadow-emerald-500/25 transition-all">
                            Daftar
                        </a>
                    @endauth
                </div>

                <!-- Mobile Hamburger -->
                <button @click="mobileOpen = !mobileOpen" class="lg:hidden p-2 rounded-lg hover:bg-gray-100">
                    <i data-lucide="menu" x-show="!mobileOpen" class="w-6 h-6"></i>
                    <i data-lucide="x" x-show="mobileOpen" class="w-6 h-6"></i>
                </button>
            </div>

            <!-- Mobile Menu -->
            <div x-show="mobileOpen" x-transition class="lg:hidden bg-white rounded-2xl mt-2 shadow-xl border border-gray-100 p-4">
                <a href="/" class="block px-4 py-3 text-gray-700 hover:bg-emerald-50 rounded-lg">Beranda</a>
                <a href="/profil-desa" class="block px-4 py-3 text-gray-700 hover:bg-emerald-50 rounded-lg">Profil Desa</a>
                <a href="/berita" class="block px-4 py-3 text-gray-700 hover:bg-emerald-50 rounded-lg">Berita</a>
                <a href="/kontak" class="block px-4 py-3 text-gray-700 hover:bg-emerald-50 rounded-lg">Kontak Kami</a>
                <hr class="my-2">
                @auth
                    <a href="{{ route('user.dashboard') }}" class="block px-4 py-3 text-gray-700 hover:bg-emerald-50 rounded-lg">Dashboard</a>
                    <a href="{{ route('user.profile.edit') }}" class="block px-4 py-3 text-gray-700 hover:bg-emerald-50 rounded-lg">Profil Saya</a>
                    <form action="{{ route('logout') }}" method="POST" class="block">
                        @csrf
                        <button type="submit" class="w-full text-left px-4 py-3 text-red-600 hover:bg-red-50 rounded-lg">Keluar</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="block px-4 py-3 text-emerald-700 font-medium hover:bg-emerald-50 rounded-lg">Masuk</a>
                    <a href="{{ route('register') }}" class="block px-4 py-3 mt-1 text-center text-white bg-linear-to-r from-emerald-500 to-teal-600 rounded-lg">Daftar</a>
                @endauth
            </div>
        </nav>
    </header>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-300 pt-16 pb-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-12">
                <!-- Brand -->
                <div>
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 bg-linear-to-br from-emerald-500 to-teal-600 rounded-xl flex items-center justify-center">
                            <i data-lucide="home" class="w-5 h-5 text-white"></i>
                        </div>
                        <div>
                            <h3 class="text-white font-bold">Desa Mekarsari</h3>
                            <p class="text-xs text-gray-400">Kec. Anyar, Kab. Serang</p>
                        </div>
                    </div>
                    <p class="text-sm text-gray-400 leading-relaxed">Desa yang maju, mandiri, dan sejahtera dengan menjunjung tinggi nilai-nilai kebersamaan dan gotong royong.</p>
                </div>

                <!-- Quick Links -->
                <div>
                    <h4 class="text-white font-semibold mb-4">Tautan Cepat</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="/profil-desa" class="hover:text-emerald-400 transition-colors">Profil Desa</a></li>
                        <li><a href="/berita" class="hover:text-emerald-400 transition-colors">Berita Terkini</a></li>
                        <li><a href="/kontak" class="hover:text-emerald-400 transition-colors">Kontak Kami</a></li>
                        <li><a href="/register" class="hover:text-emerald-400 transition-colors">Daftar Akun</a></li>
                    </ul>
                </div>

                <!-- Layanan -->
                <div>
                    <h4 class="text-white font-semibold mb-4">Layanan</h4>
                    <ul class="space-y-2 text-sm">
                        <li class="flex items-center gap-2"><i data-lucide="check-circle" class="w-4 h-4 text-emerald-400"></i> Surat Keterangan Usaha</li>
                        <li class="flex items-center gap-2"><i data-lucide="check-circle" class="w-4 h-4 text-emerald-400"></i> Surat Keterangan Kehilangan</li>
                        <li class="flex items-center gap-2"><i data-lucide="check-circle" class="w-4 h-4 text-emerald-400"></i> Surat Keterangan Tidak Mampu</li>
                    </ul>
                </div>

                <!-- Kontak -->
                <div>
                    <h4 class="text-white font-semibold mb-4">Kontak</h4>
                    <ul class="space-y-3 text-sm">
                        <li class="flex items-start gap-3">
                            <i data-lucide="map-pin" class="w-5 h-5 text-emerald-400 mt-0.5"></i>
                            <span>Jl. Raya Anyar No. 123, Desa Mekarsari, Kec. Anyar, Kab. Serang, Banten 42166</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i data-lucide="phone" class="w-5 h-5 text-emerald-400"></i>
                            <span>+62 812-3456-7890</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i data-lucide="mail" class="w-5 h-5 text-emerald-400"></i>
                            <span>desa@mekarsari.desa.id</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Bottom -->
            <div class="border-t border-gray-800 pt-8 flex flex-col sm:flex-row justify-between items-center gap-4">
                <p class="text-sm text-gray-500">&copy; 2025 Desa Mekarsari. Hak Cipta Dilindungi.</p>
                <p class="text-sm text-gray-500">Dibangun dengan ❤️ untuk pelayanan yang lebih baik</p>
            </div>
        </div>
    </footer>

</body>
</html>