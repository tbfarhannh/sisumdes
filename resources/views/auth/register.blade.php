<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrasi | SiSumDes</title>

    {{-- ========== Main CSS & JS ========== --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="h-screen grid grid-cols-[1.2fr_1fr]">
        {{-- ========== Left Section ========== --}}
        <div class="relative flex justify-center items-center flex-col">
            <img src="{{ asset('images/logo-labuan.png') }}" alt="Logo Pemerintahan Desa Labuan" loading="lazy" class="absolute top-9 left-10 h-10">
            <div class="mt-18">
                <h2 class="text-2xl mb-1">Buat Akun SiSumDes Anda!</h2>
                <p>Lengkapi data dibawah ini untuk mendaftar akun dan masuk ke dalam sistem SiSumDes.</p>

                <form action="{{ route('register') }}" method="POST" class="space-y-4 mt-7">
                    @csrf
                    <div>
                        <label for="name" class="block font-semibold mb-1.5">Nama Lengkap <span class="text-red-500">*</span></label>
                        <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="Nama lengkap sesuai KTP" class="w-full px-5 py-3.5 border border-gray-300 rounded-lg focus:ring focus:ring-var1 focus:border-var1 outline-none transition" required>
                    </div>
                    
                    <div class="grid grid-cols-2 gap-5">
                        <div>
                            <label for="nik" class="block font-semibold mb-1.5">NIK <span class="text-red-500">*</span></label>
                            <input type="text" id="nik" name="nik" value="{{ old('nik') }}" placeholder="16 digit NIK sesuai KTP" class="w-full px-5 py-3.5 border border-gray-300 rounded-lg focus:ring focus:ring-var1 focus:border-var1 outline-none transition" maxlength="16" pattern="[0-9]{16}" required>
                        </div>
                        
                        <div>
                            <label for="email" class="block font-semibold mb-1.5">Email <span class="text-red-500">*</span></label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="mis. contoh@mail.com" class="w-full px-5 py-3.5 border border-gray-300 rounded-lg focus:ring focus:ring-var1 focus:border-var1 outline-none transition" required>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-5">
                        <div>
                            <label for="password" class="block font-semibold mb-1.5">Password <span class="text-red-500">*</span></label>
                            <input type="password" id="password" name="password" placeholder="Password min 8 karakter" class="w-full px-5 py-3.5 border border-gray-300 rounded-lg focus:ring focus:ring-var1 focus:border-var1 outline-none transition" required>
                        </div>
    
                        <div>
                            <label for="password_confirmation" class="block font-semibold mb-1.5">Konfirmasi Password <span class="text-red-500">*</span></label>
                            <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Ulangi password Anda" class="w-full px-5 py-3.5 border border-gray-300 rounded-lg focus:ring focus:ring-var1 focus:border-var1 outline-none transition" required>
                        </div>
                    </div>

                    <button type="submit" class="w-full py-3.5 mt-3 bg-var1 text-white font-semibold rounded-lg hover:bg-var2 transition-all duration-300 cursor-pointer">Daftar</button>
                </form>

                @if ($errors->any())
                    <div class="mb-6 p-4 bg-red-50 border border-red-200 rounded-xl text-red-700 text-sm">
                        <ul class="list-disc list-inside">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <p class="mt-6 text-center">
                    Sudah punya akun?
                    <a href="{{ route('login') }}" class="text-var3 font-medium hover:underline">Login disini</a>
                </p>

                <a href="{{ route('beranda') }}" class="flex justify-center items-center gap-1 text-gray-500 hover:text-var1 mt-10">
                    <i data-lucide="arrow-left" class="stroke-1.5 w-4.5 h-4.5"></i>    
                    Kembali ke Beranda
                </a>
            </div>
        </div> {{-- ========== End Left Section ========== --}}

        {{-- ========== Right Section ========== --}}
        <div class="relative h-full overflow-hidden">
            <img src="{{ asset('images/bg-regis.jpg') }}" alt="Pemandangan Desa Mekarsari" loading="lazy" class="w-full h-full object-cover object-center">
            <div class="absolute inset-0 bg-var1/30"></div>
        </div> {{-- ========== End Right Section ========== --}}
    </div>
</body>

</html>
