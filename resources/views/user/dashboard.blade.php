@extends('layouts.user')

@section('title', 'Dashboard')
@section('page_title', 'Dashboard')
@section('menu_dashboard', 'bg-var1 text-var5')

@section('content')

<section>
    <div class="flex items-center gap-1.5">
        <h2 class="text-xl font-bold text-var7">Dashboard</h2>
        <i data-lucide="chevron-right" class="w-4.5 h-4.5 mt-px"></i>
        <p class="text-gray-600 text-sm mt-0.5">Halaman Utama.</p>
    </div>

    @if(!auth()->user()->isProfilLengkap())
        <div class="mt-8 p-6 bg-amber-50 border border-amber-200 rounded-2xl flex items-start gap-4">
            <div class="w-10 h-10 bg-amber-100 rounded-xl flex items-center justify-center shrink-0 mt-1">
                <i data-lucide="alert-triangle" class="w-5 h-5 text-amber-600"></i>
            </div>
            <div>
                <h3 class="font-semibold text-amber-800">Lengkapi Profil Anda</h3>
                <p class="text-amber-700 text-sm mt-1">Anda perlu melengkapi data profil sebelum dapat mengajukan surat.</p>
                <a href="{{ route('user.profile.edit') }}" class="inline-block mt-3 px-4 py-2 bg-amber-500 text-white text-sm font-medium rounded-lg hover:bg-amber-600 transition">Lengkapi Profil</a>
            </div>
        </div>
    @else
    <div class="grid grid-cols-3 gap-5 mt-6">
        <div class="group bg-var5 rounded-xl p-5.5 border border-gray-300 hover:border-var1 transition-all duration-300 hover:-translate-y-1.5">
            <div class="w-12 h-12 bg-var3 rounded-xl flex items-center justify-center mb-4">
                <i data-lucide="file-text" class="w-6 h-6 text-var5"></i>
            </div>
            <h3 class="font-semibold text-var7 mb-1">Ajukan Surat</h3>
            <p class="text-sm">Buat pengajuan surat baru.</p>
            <a href="{{ route('user.pengajuan.create') }}" class="flex items-center gap-1.5 w-fit mt-4 text-sm font-medium bg-var1 text-var5 ps-5 pe-4 py-1.5 rounded-full hover:bg-var2">
                Ajukan
                <i data-lucide="chevron-right" class="w-4.5 h-4.5 mt-px"></i>
            </a>
        </div>

        <div class="group bg-var5 rounded-xl p-5.5 border border-gray-300 hover:border-var1 transition-all duration-300 hover:-translate-y-1.5">
            <div class="w-12 h-12 bg-var3 rounded-xl flex items-center justify-center mb-4">
                <i data-lucide="check-circle" class="w-6 h-6 text-var5"></i>
            </div>
            <h3 class="font-semibold text-var7 mb-1">Riwayat</h3>
            <p class="text-sm">Lihat status pengajuan Anda.</p>
            <a href="{{ route('user.riwayat.index') }}" class="flex items-center gap-1.5 w-fit mt-4 text-sm font-medium bg-var1 text-var5 ps-5 pe-4 py-1.5 rounded-full hover:bg-var2">
                Lihat
                <i data-lucide="chevron-right" class="w-4.5 h-4.5 mt-px"></i>
            </a>
        </div>

        <div class="group bg-var5 rounded-xl p-5.5 border border-gray-300 hover:border-var1 transition-all duration-300 hover:-translate-y-1.5">
            <div class="w-12 h-12 bg-var3 rounded-xl flex items-center justify-center mb-4">
                <i data-lucide="user-round" class="w-6 h-6 text-var5"></i>
            </div>
            <h3 class="font-semibold text-var7 mb-1">Profil</h3>
            <p class="text-sm">Kelola data diri Anda.</p>
            <a href="{{ route('user.profile.edit') }}" class="flex items-center gap-1.5 w-fit mt-4 text-sm font-medium bg-var1 text-var5 ps-5 pe-4 py-1.5 rounded-full hover:bg-var2">
                Edit 
                <i data-lucide="chevron-right" class="w-4.5 h-4.5 mt-px"></i>
            </a>
        </div>
    </div>
    @endif
</section>

@endsection