<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard') - Desa Mekarsari</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>body{font-family:'Inter',sans-serif}</style>
</head>
<body class="bg-gray-50 text-gray-800 antialiased">
    <div x-data="{ sidebarOpen: true }" class="flex min-h-screen">
        <!-- Sidebar -->
        <aside :class="sidebarOpen ? 'w-64' : 'w-20'" class="fixed inset-y-0 left-0 z-40 bg-white border-r border-gray-200 shadow-sm transition-all duration-300 flex flex-col">
            <!-- Logo -->
            <div class="h-16 flex items-center justify-between px-4 border-b border-gray-100">
                <a href="/" class="flex items-center gap-3 overflow-hidden">
                    <div class="w-9 h-9 bg-linear-to-br from-emerald-500 to-teal-600 rounded-lg flex items-center justify-center shrink-0">
                        <i data-lucide="home" class="w-5 h-5 text-white"></i>
                    </div>
                    <span x-show="sidebarOpen" class="text-sm font-bold text-gray-900 whitespace-nowrap">Desa Mekarsari</span>
                </a>
                <button @click="sidebarOpen = !sidebarOpen" class="p-1.5 rounded-lg hover:bg-gray-100 hidden lg:block">
                    <i data-lucide="chevron-down" class="w-4 h-4 transition-transform" :class="sidebarOpen ? '' : '-rotate-90'"></i>
                </button>
            </div>

            <!-- Menu -->
            <nav class="flex-1 p-3 space-y-1 overflow-y-auto">
                <p x-show="sidebarOpen" class="px-3 mb-2 text-xs font-semibold text-gray-400 uppercase tracking-wider">Menu Utama</p>
                <a href="{{ route('user.dashboard') }}" class="flex items-center gap-3 px-3 py-2.5 text-sm font-medium rounded-xl transition-colors @yield('menu_dashboard', 'text-gray-700 hover:bg-emerald-50 hover:text-emerald-700')">
                    <i data-lucide="home" class="w-5 h-5 shrink-0"></i>
                    <span x-show="sidebarOpen">Dashboard</span>
                </a>

                <a href="{{ route('user.pengajuan.create') }}" class="flex items-center gap-3 px-3 py-2.5 text-sm font-medium rounded-xl transition-colors @yield('menu_pengajuan', 'text-gray-700 hover:bg-emerald-50 hover:text-emerald-700')">
                    <i data-lucide="file-text" class="w-5 h-5 shrink-0"></i>
                    <span x-show="sidebarOpen">Pengajuan Surat</span>
                </a>

                <a href="{{ route('user.riwayat.index') }}" class="flex items-center gap-3 px-3 py-2.5 text-sm font-medium rounded-xl transition-colors @yield('menu_riwayat', 'text-gray-700 hover:bg-emerald-50 hover:text-emerald-700')">
                    <i data-lucide="check-circle" class="w-5 h-5 shrink-0"></i>
                    <span x-show="sidebarOpen">Riwayat</span>
                </a>

                <a href="{{ route('user.profile.edit') }}" class="flex items-center gap-3 px-3 py-2.5 text-sm font-medium rounded-xl transition-colors @yield('menu_profil', 'text-gray-700 hover:bg-emerald-50 hover:text-emerald-700')">
                    <i data-lucide="user" class="w-5 h-5 shrink-0"></i>
                    <span x-show="sidebarOpen">Profil Saya</span>
                </a>
            </nav>

            <!-- User info & logout -->
            <div class="border-t border-gray-100 p-3">
                <div class="flex items-center gap-3 mb-3">
                    <div class="w-9 h-9 bg-emerald-100 rounded-full flex items-center justify-center shrink-0">
                        <span class="text-emerald-700 font-semibold text-xs">{{ strtoupper(substr(auth()->user()->name, 0, 1)) }}</span>
                    </div>
                    <div x-show="sidebarOpen" class="overflow-hidden">
                        <p class="text-sm font-medium text-gray-900 truncate">{{ auth()->user()->name }}</p>
                        <p class="text-xs text-gray-500 truncate">{{ auth()->user()->nik }}</p>
                    </div>
                </div>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="flex items-center gap-3 w-full px-3 py-2 text-sm text-red-600 hover:bg-red-50 rounded-xl transition-colors">
                        <i data-lucide="x" class="w-5 h-5 shrink-0"></i>
                        <span x-show="sidebarOpen">Keluar</span>
                    </button>
                </form>
            </div>
        </aside>

        <!-- Main Content Area -->
        <div class="flex-1 flex flex-col ml-64 transition-all duration-300" :class="sidebarOpen ? 'ml-64' : 'ml-20'">
            <!-- Top Bar -->
            <header class="sticky top-0 z-30 bg-white/80 backdrop-blur-md border-b border-gray-200 h-16 flex items-center px-6">
                <div class="flex items-center justify-between w-full">
                    <h1 class="text-lg font-semibold text-gray-900">@yield('page_title', 'Dashboard')</h1>
                    <div class="flex items-center gap-4">
                        <span class="text-xs text-gray-500 hidden sm:block">{{ auth()->user()->email }}</span>
                    </div>
                </div>
            </header>

            <!-- Page Content -->
            <main class="flex-1 p-6">
                @if(session('success'))
                    <div class="mb-6 p-4 bg-green-50 border border-green-200 rounded-xl text-green-700 text-sm">
                        {{ session('success') }}
                    </div>
                @endif
                @if(session('error'))
                    <div class="mb-6 p-4 bg-red-50 border border-red-200 rounded-xl text-red-700 text-sm">
                        {{ session('error') }}
                    </div>
                @endif
                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>