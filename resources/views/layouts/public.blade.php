<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Website Resmi Desa Mekarsari, Kecamatan Anyar, Kabupaten Serang, Banten">
    <title>@yield('title', 'SiSumDes Mekarsari')</title>

    {{-- ========== Main CSS & JS ========== --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased">
    @include('layouts.partials.public-navbar')
    
    <main>
        @yield('content')
    </main>

    @include('layouts.partials.public-footer')
</body>

</html>
