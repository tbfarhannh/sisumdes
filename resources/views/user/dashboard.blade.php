@extends('layouts.user')

@section('title', 'Dashboard')
@section('page_title', 'Dashboard')
@section('menu_dashboard', 'bg-emerald-50 text-emerald-700')

@section('content')
<div>
    <h2 class="text-2xl font-bold text-gray-900 mb-2">Selamat datang, {{ auth()->user()->name }}</h2>
    <p class="text-gray-500">Berikut ringkasan aktivitas Anda.</p>

    @if(!auth()->user()->isProfilLengkap())
        <div class="mt-8 p-6 bg-amber-50 border border-amber-200 rounded-2xl flex items-start gap-4">
            <div class="w-10 h-10 bg-amber-100 rounded-xl flex items-center justify-center shrink-0 mt-1">
                <i data-lucide="alert-triangle" class="w-5 h-5 text-amber-600"></i>
            </div>
            <div>
                <h3 class="font-semibold text-amber-800">Lengkapi Profil Anda</h3>
                <p class="text-amber-700 text-sm mt-1">Anda perlu melengkapi data profil sebelum dapat mengajukan surat.</p>
                <a href="{{ route('user.profile.edit') }}" class="inline-block mt-3 px-4 py-2 bg-amber-500 text-white text-sm font-medium rounded-lg hover:bg-amber-600 transition">
                    Lengkapi Profil
                </a>
            </div>
        </div>
    @else
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-8">
            <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100">
                <div class="w-12 h-12 bg-emerald-100 rounded-xl flex items-center justify-center mb-4">
                    <i data-lucide="file-text" class="w-6 h-6 text-emerald-600"></i>
                </div>
                <h3 class="font-semibold text-gray-900">Ajukan Surat</h3>
                <p class="text-sm text-gray-500 mt-1">Buat pengajuan surat baru.</p>
                <a href="{{ route('user.pengajuan.create') }}" class="inline-block mt-4 text-emerald-600 text-sm font-medium hover:underline">Ajukan →</a>
            </div>
            <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100">
                <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center mb-4">
                    <i data-lucide="check-circle" class="w-6 h-6 text-blue-600"></i>
                </div>
                <h3 class="font-semibold text-gray-900">Riwayat</h3>
                <p class="text-sm text-gray-500 mt-1">Lihat status pengajuan Anda.</p>
                <a href="{{ route('user.riwayat.index') }}" class="inline-block mt-4 text-blue-600 text-sm font-medium hover:underline">Lihat →</a>
            </div>
            <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100">
                <div class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center mb-4">
                    <i data-lucide="user" class="w-6 h-6 text-purple-600"></i>
                </div>
                <h3 class="font-semibold text-gray-900">Profil</h3>
                <p class="text-sm text-gray-500 mt-1">Kelola data diri Anda.</p>
                <a href="{{ route('user.profile.edit') }}" class="inline-block mt-4 text-purple-600 text-sm font-medium hover:underline">Edit →</a>
            </div>
        </div>
    @endif
</div>
@endsection