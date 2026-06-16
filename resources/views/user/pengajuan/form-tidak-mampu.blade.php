@extends('layouts.user')

@section('title', 'Ajukan Surat Keterangan Tidak Mampu')
@section('page_title', 'Form Surat Keterangan Tidak Mampu')
@section('menu_pengajuan', 'bg-var1 text-var5')

@section('content')

<section>
    <div class="flex items-center gap-1.5">
        <h2 class="text-xl font-bold text-var7">Pengajuan Surat</h2>
        <i data-lucide="chevron-right" class="w-4.5 h-4.5 mt-px"></i>
        <p class="text-gray-600 text-sm mt-0.5">Form Surat Keterangan Tidak Mampu.</p>
    </div>

    <div class="bg-white rounded-xl border border-gray-300 p-6 mt-6">
        <h2 class="text-xl font-bold text-gray-900 mb-6">Data Keterangan Tidak Mampu</h2>
    
        @if ($errors->any())
            <div class="mb-6 p-4 bg-red-50 border border-red-200 rounded-xl text-red-700 text-sm">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    
        <form action="{{ route('user.pengajuan.tidak-mampu') }}" method="POST" class="space-y-5">
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
                <label for="keperluan" class="block font-semibold text-var7 mb-1.5">Keperluan</label>
                <textarea id="keperluan" name="keperluan" rows="3" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 outline-none transition" required placeholder="Contoh: Untuk pengajuan bantuan sosial, keringanan biaya pendidikan, dll.">{{ old('keperluan') }}</textarea>
            </div>
    
            <div class="flex gap-3 pt-2">
                <a href="{{ route('user.pengajuan.create') }}" class="w-full text-center py-3 border border-var1 rounded-lg font-medium hover:bg-var2 hover:text-var5 transition-all duration-300 cursor-pointer">Kembali</a>
                <button type="submit" class="w-full text-center py-3 bg-var1 text-var5 border border-var1 rounded-lg font-medium hover:bg-var2 transition-all duration-300 cursor-pointer">Kirim Pengajuan</button>
            </div>
        </form>
    </div>
</section>

@endsection