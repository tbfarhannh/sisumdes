<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | SiSumDes Mekarsari</title>

    {{-- ========== Main CSS & JS ========== --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="h-screen grid grid-cols-2">
        {{-- ========== Left Section ========== --}}
        <div class="relative h-full overflow-hidden">
            <img src="{{ asset('images/bg-login.jpg') }}" alt="Pemandangan Desa Mekarsari" loading="lazy" class="w-full h-full object-cover object-center">
            <div class="absolute inset-0 bg-var1/30"></div>
        </div> {{-- ========== End Left Section ========== --}}

        {{-- ========== Right Section ========== --}}
        <div class="relative flex justify-center items-center flex-col">
            <img src="{{ asset('images/logo-labuan.png') }}" alt="Logo Pemerintahan Desa Labuan" loading="lazy" class="absolute top-9 right-10 h-10">
            <div class="mt-12">
                <h2 class="text-2xl mb-1">Selamat datang di SiSumDes!</h2>
                <p>Silahkan masuk dan kelola surat menyurat Anda pada sistem ini.</p>

                <form action="{{ route('login') }}" method="POST" class="space-y-4 mt-7">
                    @csrf
                    <div>
                        <label for="nik" class="block font-semibold mb-1.5">NIK <span class="text-red-500">*</span></label>
                        <input type="text" id="nik" name="nik" value="{{ old('nik') }}" placeholder="Masukkan NIK 16 digit Anda" maxlength="16" class="w-full px-5 py-3.5 border border-gray-300 rounded-lg focus:ring focus:ring-var1 focus:border-var1 outline-none transition" required>
                    </div>

                    <div>
                        <label for="password" class="block font-semibold mb-1.5">Password <span class="text-red-500">*</span></label>
                        <input type="password" id="password" name="password" placeholder="Masukkan password Anda" class="w-full px-5 py-3.5 border border-gray-300 rounded-lg focus:ring focus:ring-var1 focus:border-var1 outline-none transition" required>
                    </div>

                    <div class="flex items-center gap-2.5">
                        <input type="checkbox" id="remember" name="remember" class="w-4 h-4 rounded border-gray-300 text-var1 focus:ring-0 focus:border-var1 cursor-pointer">
                        <label for="remember" class="text-gray-500 cursor-pointer">Ingat saya</label>
                    </div>

                    <button type="submit" class="w-full py-3.5 mt-3 bg-var1 text-white font-semibold rounded-lg hover:bg-var2 transition-all duration-300 cursor-pointer">Masuk</button>
                </form>

                @if ($errors->any())
                    <div class="mb-6 p-4 bg-red-50 border border-red-200 rounded-xl text-red-700 text-sm">
                        @foreach ($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    </div>
                @endif

                <p class="mt-6 text-center">
                    Belum punya akun?
                    <a href="{{ route('register') }}" class="text-var3 font-medium hover:underline">Daftar disini</a>
                </p>

                <a href="{{ route('beranda') }}" class="flex justify-center items-center gap-1 text-gray-500 hover:text-var1 mt-10">
                    <i data-lucide="arrow-left" class="stroke-1.5 w-4.5 h-4.5"></i>    
                    Kembali ke Beranda
                </a>
            </div>
        </div> {{-- ========== End Right Section ========== --}}
    </div>
</body>

</html>
