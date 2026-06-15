<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard') | SiSumDes Mekarsari</title>

    {{-- ========== Main CSS & JS ========== --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-var5 antialiased">
    <div x-data="{ sidebarOpen: true }" class="flex min-h-screen">        
        @include('layouts.partials.user-sidebar')

        <div class="flex-1 flex flex-col ml-64 transition-all duration-300" :class="sidebarOpen ? 'ml-64' : 'ml-20'">
            @include('layouts.partials.user-header')

            <main class="flex-1 p-6">
                @if (session('success'))
                    <div class="mb-6 p-4 bg-green-50 border border-green-200 rounded-xl text-green-700 text-sm">
                        {{ session('success') }}
                    </div>
                @endif
                @if (session('error'))
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
