<aside :class="sidebarOpen ? 'w-64' : 'w-20'" class="fixed inset-y-0 left-0 z-40 bg-var5 border-r border-gray-300 shadow-sm transition-all duration-300 flex flex-col">
    {{-- ========== Logo ========== --}}
    <div class="h-16 flex items-center justify-between px-6 border-b border-gray-300">
        <img src="{{ asset('images/logo-labuan.png') }}" alt="Logo Pemerintahan Desa Labuan" loading="lazy" class="h-9">

        {{-- <button @click="sidebarOpen = !sidebarOpen" class="p-1.5 rounded-lg hover:bg-gray-100 hidden lg:block">
            <i data-lucide="chevron-down" class="w-4 h-4 transition-transform" :class="sidebarOpen ? '' : '-rotate-90'"></i>
        </button> --}}
    </div>

    {{-- ========== Menu ========== --}}
    <nav class="flex-1 p-3 space-y-1 overflow-y-auto">
        <p x-show="sidebarOpen" class="px-2 mb-2 text-xs font-semibold text-var3 uppercase tracking-wider"> Menu Utama</p>
        <a href="{{ route('user.dashboard') }}" class="flex items-center gap-3 px-4 py-2.5 font-medium rounded-lg transition-colors @yield('menu_dashboard', 'text-var8 hover:bg-var1 hover:text-var5 duration-100')">
            <i data-lucide="home" class="w-5 h-5 shrink-0"></i>
            <span class="font-heading text-[15px]" x-show="sidebarOpen">Dashboard</span>
        </a>

        <a href="{{ route('user.pengajuan.create') }}" class="flex items-center gap-3 px-4 py-2.5 font-medium rounded-lg transition-colors @yield('menu_pengajuan', 'text-var8 hover:bg-var1 hover:text-var5 duration-100')">
            <i data-lucide="file-text" class="w-5 h-5 shrink-0"></i>
            <span class="font-heading text-[15px]" x-show="sidebarOpen">Pengajuan Surat</span>
        </a>

        <a href="{{ route('user.riwayat.index') }}" class="flex items-center gap-3 px-4 py-2.5 font-medium rounded-lg transition-colors @yield('menu_riwayat', 'text-var8 hover:bg-var1 hover:text-var5 duration-100')">
            <i data-lucide="file-clock" class="w-5 h-5 shrink-0"></i>
            <span class="font-heading text-[15px]" x-show="sidebarOpen">Riwayat</span>
        </a>
    </nav>

    {{-- ========== Profil Saya & Logout ========== --}}
    <div class="border-t border-gray-300 p-3 space-y-1">
        <p x-show="sidebarOpen" class="px-2 mb-2 text-xs font-semibold text-var3 uppercase tracking-wider"> Menu Lainnya</p>
        <a href="{{ route('user.profile.edit') }}" class="flex items-center gap-3 px-4 py-2.5 font-medium rounded-lg transition-colors @yield('menu_profil', 'text-var8 hover:bg-var1 hover:text-var5 duration-100')">
            <i data-lucide="user-round" class="w-5 h-5 shrink-0"></i>
            <span class="font-heading text-[15px]" x-show="sidebarOpen">Profil Saya</span>
        </a>

        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="flex w-full text-red-500 items-center gap-3 px-4 py-2.5 font-medium rounded-lg transition-colors cursor-pointer hover:bg-red-100">
                <i data-lucide="log-out" class="w-5 h-5 shrink-0"></i>
                <span x-show="sidebarOpen">Keluar</span>
            </button>
        </form>
    </div>
</aside>