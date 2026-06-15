@extends('layouts.user')

@section('title', 'Edit Profil')
@section('page_title', 'Lengkapi Profil')
@section('menu_profil', 'bg-var1 text-var5')

@section('content')

<section>
    <div class="flex items-center gap-1.5">
        <h2 class="text-xl font-bold text-var7">Profil Saya</h2>
        <i data-lucide="chevron-right" class="w-4.5 h-4.5 mt-px"></i>
        <p class="text-gray-600 text-sm mt-0.5">Halaman Informasi Data Anda.</p>
    </div>

    <div class="bg-var5 rounded-xl border border-gray-300 p-6 mt-6">
        @if ($errors->any())
            <div class="mb-6 p-4 bg-red-50 border border-red-200 rounded-xl text-red-700 text-sm">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    
        <form action="{{ route('user.profile.update') }}" method="POST" class="space-y-5">
            @csrf
            @method('PUT')
            <div class="grid grid-cols-2 gap-5">
                <div>
                    <label class="block font-semibold text-var7 mb-1.5">NIK <span class="text-red-500">*</span></label>
                    <input type="text" value="{{ auth()->user()->nik }}" class="w-full px-5 py-3 border border-gray-300 rounded-lg bg-gray-50 text-gray-500" disabled>
                </div>
                <div>
                    <label for="name" class="block font-semibold text-var7 mb-1.5">Nama Lengkap <span class="text-red-500">*</span></label>
                    <input type="text" id="name" name="name" value="{{ old('name', auth()->user()->name) }}" class="w-full px-5 py-3 border border-gray-300 rounded-lg focus:ring focus:ring-var1 focus:border-var1 outline-none transition" required>
                </div>
            </div>
    
            <div class="grid grid-cols-3 gap-5">
                <div>
                    <label for="email" class="block font-semibold text-var7 mb-1.5">Email <span class="text-red-500">*</span></label>
                    <input type="email" id="email" name="email" value="{{ old('email', auth()->user()->email) }}" class="w-full px-5 py-3 border border-gray-300 rounded-lg focus:ring focus:ring-var1 focus:border-var1 outline-none transition" required>
                </div>
                <div>
                    <label for="tempat_lahir" class="block font-semibold text-var7 mb-1.5">Tempat Lahir <span class="text-red-500">*</span></label>
                    <input type="text" id="tempat_lahir" name="tempat_lahir" value="{{ old('tempat_lahir', auth()->user()->tempat_lahir) }}" class="w-full px-5 py-3 border border-gray-300 rounded-lg focus:ring focus:ring-var1 focus:border-var1 outline-none transition" required>
                </div>
                <div>
                    <label for="tanggal_lahir" class="block font-semibold text-var7 mb-1.5">Tanggal Lahir <span class="text-red-500">*</span></label>
                    <input type="date" id="tanggal_lahir" name="tanggal_lahir" value="{{ old('tanggal_lahir', auth()->user()->tanggal_lahir?->format('Y-m-d')) }}" class="w-full px-5 py-3 border border-gray-300 rounded-lg focus:ring focus:ring-var1 focus:border-var1 outline-none transition" required>
                </div>
            </div>
    
            <div class="grid grid-cols-3 gap-5">
                <div>
                    <label class="block font-semibold text-var7 mb-2.5">Jenis Kelamin <span class="text-red-500">*</span></label>
                    <div class="flex gap-4">
                        <label class="flex items-center gap-2 cursor-pointer w-fit"><input type="radio" name="jenis_kelamin" value="Laki-laki" class="text-emerald-600" {{ old('jenis_kelamin', auth()->user()->jenis_kelamin) == 'Laki-laki' ? 'checked' : '' }} required> Laki-laki <span class="text-red-500">*</span>
                        <label class="flex items-center gap-2 cursor-pointer w-fit"><input type="radio" name="jenis_kelamin" value="Perempuan" class="text-emerald-600" {{ old('jenis_kelamin', auth()->user()->jenis_kelamin) == 'Perempuan' ? 'checked' : '' }} required> Perempuan</label>
                    </div>
                </div>
                <div>
                    <label for="agama" class="block font-semibold text-var7 mb-1.5">Agama <span class="text-red-500">*</span></label>
                    <select id="agama" name="agama" class="w-full px-5 py-3 border border-gray-300 rounded-lg focus:ring focus:ring-var1 focus:border-var1 outline-none transition" required>
                        <option value="">Pilih Agama</option>
                        @foreach(['Islam', 'Kristen', 'Katolik', 'Hindu', 'Buddha', 'Konghucu'] as $agama)
                            <option value="{{ $agama }}" {{ old('agama', auth()->user()->agama) == $agama ? 'selected' : '' }}>{{ $agama }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="pekerjaan" class="block font-semibold text-var7 mb-1.5">Pekerjaan <span class="text-red-500">*</span></label>
                    <input type="text" id="pekerjaan" name="pekerjaan" value="{{ old('pekerjaan', auth()->user()->pekerjaan) }}" class="w-full px-5 py-3 border border-gray-300 rounded-lg focus:ring focus:ring-var1 focus:border-var1 outline-none transition" required>
                </div>
            </div>

            <div>
                <label for="alamat" class="block font-semibold text-var7 mb-1.5 -mt-2">Alamat Lengkap <span class="text-red-500">*</span></label>
                <textarea id="alamat" name="alamat" rows="4" class="w-full px-5 py-3 border border-gray-300 rounded-lg focus:ring focus:ring-var1 focus:border-var1 outline-none transition" required>{{ old('alamat', auth()->user()->alamat) }}</textarea>
            </div>
    
            <div class="flex gap-3">
                <a href="{{ route('user.dashboard') }}" class="w-full text-center py-3 border border-var1 rounded-lg font-medium hover:bg-var2 hover:text-var5 transition-all duration-300 cursor-pointer">Batal Simpan</a>
                <button type="submit" class="w-full text-center py-3 bg-var1 text-var5 border border-var1 rounded-lg font-medium hover:bg-var2 transition-all duration-300 cursor-pointer">Simpan Data</button>
            </div>
        </form>
    </div>
</section>

@endsection