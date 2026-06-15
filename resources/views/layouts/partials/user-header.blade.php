<header class="sticky top-0 z-30 bg-var5 backdrop-blur-md border-b border-gray-300 h-16 flex items-center px-6">
    <div class="flex items-center justify-between w-full">
        <h1 class="text-xl font-bold text-var7">Selamat Datang, {{ auth()->user()->name }}!</h1>

        <div class="flex items-center gap-2.5">
            <div class="w-9.5 h-9.5 bg-var1 rounded-full flex items-center justify-center shrink-0">
                <span class="text-var5 font-semibold">{{ strtoupper(substr(auth()->user()->name, 0, 1)) }}</span>
            </div>
            <div x-show="sidebarOpen" class="overflow-hidden">
                <p class="text-[15px] font-semibold text-var7 truncate">{{ auth()->user()->name }}</p>
                <p class="text-[13px] truncate">{{ auth()->user()->nik }}</p>
            </div>
        </div>
    </div>
</header>