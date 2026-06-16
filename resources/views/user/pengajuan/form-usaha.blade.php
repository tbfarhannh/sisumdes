@extends('layouts.user')

@section('title', 'Ajukan Surat Keterangan Usaha')
@section('page_title', 'Form Surat Keterangan Usaha')
@section('menu_pengajuan', 'bg-var1 text-var5')

@section('content')

<section>
    <div class="flex items-center gap-1.5">
        <h2 class="text-xl font-bold text-var7">Pengajuan Surat</h2>
        <i data-lucide="chevron-right" class="w-4.5 h-4.5 mt-px"></i>
        <p class="text-gray-600 text-sm mt-0.5">Form Surat Keterangan Usaha.</p>
    </div>

    <div class="bg-white rounded-xl border border-gray-300 p-6 mt-6">
        <h2 class="text-xl font-bold text-gray-900 mb-6">Data Usaha</h2>
    
        @if ($errors->any())
            <div class="mb-6 p-4 bg-var5 border border-red-200 rounded-xl text-red-700 text-sm">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    
        <form action="{{ route('user.pengajuan.usaha') }}" method="POST" class="space-y-5">
            @csrf
            <div class="bg-gray-50 rounded-xl p-5 space-y-3">
                <p class="font-semibold text-var7">Data Pribadi (dari profil Anda)</p>
                <div class="grid grid-cols-2 gap-3">
                    <div><span class="text-gray-500">Nama:</span> <span class="font-medium">{{ auth()->user()->name }}</span></div>
                    <div><span class="text-gray-500">NIK:</span> <span class="font-medium">{{ auth()->user()->nik }}</span></div>
                    <div><span class="text-gray-500">Tempat/Tgl Lahir:</span> <span class="font-medium">{{ auth()->user()->tempat_lahir }}, {{ auth()->user()->tanggal_lahir->format('d M Y') }}</span></div>
                    <div><span class="text-gray-500">Jenis Kelamin:</span> <span class="font-medium">{{ auth()->user()->jenis_kelamin }}</span></div>
                    <div><span class="text-gray-500">Agama:</span> <span class="font-medium">{{ auth()->user()->agama }}</span></div>
                    <div><span class="text-gray-500">Pekerjaan:</span> <span class="font-medium">{{ auth()->user()->pekerjaan }}</span></div>
                    <div class="col-span-2"><span class="text-gray-500">Alamat:</span> <span class="font-medium">{{ auth()->user()->alamat }}</span></div>
                </div>
            </div>

            <div>
                <label for="nama_usaha" class="block font-semibold text-var7 mb-1.5">Nama Usaha <span class="text-red-500">*</span></label>
                <input type="text" id="nama_usaha" name="nama_usaha" value="{{ old('nama_usaha') }}" placeholder="Masukkan nama usaha Anda" class="w-full px-5 py-3 border border-gray-300 rounded-lg focus:ring focus:ring-var1 focus:border-var1 outline-none transition" required>
            </div>
            <div>
                <label for="jenis_usaha" class="block font-semibold text-var7 mb-1.5">Jenis Usaha <span class="text-red-500">*</span></label>
                <input type="text" id="jenis_usaha" name="jenis_usaha" value="{{ old('jenis_usaha') }}" class="w-full px-5 py-3 border border-gray-300 rounded-lg focus:ring focus:ring-var1 focus:border-var1 outline-none transition" required placeholder="Contoh: Warung Sembako">
            </div>
            <div>
                <label for="alamat_usaha" class="block font-semibold text-var7 mb-1.5">Alamat Usaha <span class="text-red-500">*</span></label>
                <textarea id="alamat_usaha" name="alamat_usaha" rows="3" placeholder="Masukkan alamat usaha Anda" class="w-full px-5 py-3 border border-gray-300 rounded-lg focus:ring focus:ring-var1 focus:border-var1 outline-none transition" required>{{ old('alamat_usaha') }}</textarea>
            </div>
            <div class="flex gap-3">
                <a href="{{ route('user.pengajuan.create') }}" class="w-full text-center py-3 border border-var1 rounded-lg font-medium hover:bg-var2 hover:text-var5 transition-all duration-300 cursor-pointer">Kembali</a>
                <button type="submit" class="w-full text-center py-3 bg-var1 text-var5 border border-var1 rounded-lg font-medium hover:bg-var2 transition-all duration-300 cursor-pointer">Kirim Pengajuan</button>
            </div>
        </form>
    </div>
</section>

@endsection