@extends('layouts.user')

@section('title', 'Pengajuan Surat')
@section('page_title', 'Ajukan Surat Baru')
@section('menu_pengajuan', 'bg-emerald-50 text-emerald-700')

@section('content')
<div class="max-w-4xl mx-auto">
    <div class="mb-6">
        <h2 class="text-xl font-bold text-gray-900">Pilih Jenis Surat</h2>
        <p class="text-gray-500 text-sm">Silakan pilih jenis surat keterangan yang ingin Anda ajukan.</p>
    </div>

    <div class="grid sm:grid-cols-3 gap-6">
        <!-- Surat Usaha -->
        <a href="{{ route('user.pengajuan.usaha') }}" class="block bg-white rounded-2xl p-6 shadow-lg border border-gray-100 hover:border-emerald-300 hover:shadow-xl transition group">
            <div class="w-12 h-12 bg-emerald-100 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                <i data-lucide="file-text" class="w-6 h-6 text-emerald-600"></i>
            </div>
            <h3 class="font-semibold text-gray-900 mb-2">Keterangan Usaha</h3>
            <p class="text-sm text-gray-500">Untuk keperluan legalitas usaha Anda.</p>
        </a>

        <!-- Surat Kehilangan -->
        <a href="{{ route('user.pengajuan.kehilangan') }}" class="block bg-white rounded-2xl p-6 shadow-lg border border-gray-100 hover:border-blue-300 hover:shadow-xl transition group">
            <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                <i data-lucide="megaphone" class="w-6 h-6 text-blue-600"></i>
            </div>
            <h3 class="font-semibold text-gray-900 mb-2">Keterangan Kehilangan</h3>
            <p class="text-sm text-gray-500">Laporan kehilangan barang atau dokumen.</p>
        </a>

        <!-- Surat Tidak Mampu -->
        <a href="{{ route('user.pengajuan.tidak-mampu') }}" class="block bg-white rounded-2xl p-6 shadow-lg border border-gray-100 hover:border-orange-300 hover:shadow-xl transition group">
            <div class="w-12 h-12 bg-orange-100 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                <i data-lucide="users" class="w-6 h-6 text-orange-600"></i>
            </div>
            <h3 class="font-semibold text-gray-900 mb-2">Keterangan Tidak Mampu</h3>
            <p class="text-sm text-gray-500">Untuk keperluan bantuan sosial dan keringanan.</p>
        </a>
    </div>
</div>
@endsection