@extends('layouts.user')

@section('title', 'Pengajuan Surat')
@section('page_title', 'Ajukan Surat Baru')
@section('menu_pengajuan', 'bg-var1 text-var5')

@section('content')

<section>
    <div class="flex items-center gap-1.5">
        <h2 class="text-xl font-bold text-var7">Pengajuan Surat</h2>
        <i data-lucide="chevron-right" class="w-4.5 h-4.5 mt-px"></i>
        <p class="text-gray-600 text-sm mt-0.5">Halaman Pengajuan Surat Menyurat.</p>
    </div>

    <div class="grid grid-cols-4 gap-5 mt-6">
        {{-- Surat Usaha --}}
        <a href="{{ route('user.pengajuan.usaha') }}" class="group bg-var5 rounded-xl p-5.5 border border-gray-300 hover:border-var1 transition-all duration-300 hover:-translate-y-1.5">
            <div class="w-12 h-12 bg-var3 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                <i data-lucide="file-text" class="w-6 h-6 text-var5"></i>
            </div>
            <h3 class="font-semibold text-var7 mb-1">Keterangan Usaha</h3>
            <p class="text-sm">Untuk keperluan legalitas usaha atau bisnis Anda.</p>
        </a>
    
        {{-- Surat Kehilangan --}}
        <a href="{{ route('user.pengajuan.kehilangan') }}" class="group bg-var5 rounded-xl p-5.5 border border-gray-300 hover:border-var1 transition-all duration-300 hover:-translate-y-1.5">
            <div class="w-12 h-12 bg-var3 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                <i data-lucide="megaphone" class="w-6 h-6 text-var5"></i>
            </div>
            <h3 class="font-semibold text-var7 mb-1">Keterangan Kehilangan</h3>
            <p class="text-sm">Laporan kehilangan barang atau dokumen.</p>
        </a>
    
        {{-- Surat Tidak Mampu --}}
        <a href="{{ route('user.pengajuan.tidak-mampu') }}" class="group bg-var5 rounded-xl p-5.5 border border-gray-300 hover:border-var1 transition-all duration-300 hover:-translate-y-1.5">
            <div class="w-12 h-12 bg-var3 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                <i data-lucide="users" class="w-6 h-6 text-var5"></i>
            </div>
            <h3 class="font-semibold text-var7 mb-1">Keterangan Tidak Mampu</h3>
            <p class="text-sm">Untuk keperluan bantuan sosial dan keringanan.</p>
        </a>
        
        {{-- Surat Lainnya --}}
        <a href="#" class="group bg-var5 rounded-xl p-5.5 border border-gray-300 hover:border-var1 transition-all duration-300 hover:-translate-y-1.5">
            <div class="w-12 h-12 bg-var3 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                <i data-lucide="home" class="w-6 h-6 text-var5"></i>
            </div>
            <h3 class="font-semibold text-var7 mb-1">Lorem Ipsum Dolar</h3>
            <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </a>
        
        {{-- Surat Lainnya --}}
        <a href="#" class="group bg-var5 rounded-xl p-5.5 border border-gray-300 hover:border-var1 transition-all duration-300 hover:-translate-y-1.5">
            <div class="w-12 h-12 bg-var3 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                <i data-lucide="home" class="w-6 h-6 text-var5"></i>
            </div>
            <h3 class="font-semibold text-var7 mb-1">Lorem Ipsum Dolar</h3>
            <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </a>
        
        {{-- Surat Lainnya --}}
        <a href="#" class="group bg-var5 rounded-xl p-5.5 border border-gray-300 hover:border-var1 transition-all duration-300 hover:-translate-y-1.5">
            <div class="w-12 h-12 bg-var3 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                <i data-lucide="home" class="w-6 h-6 text-var5"></i>
            </div>
            <h3 class="font-semibold text-var7 mb-1">Lorem Ipsum Dolar</h3>
            <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </a>
        
        {{-- Surat Lainnya --}}
        <a href="#" class="group bg-var5 rounded-xl p-5.5 border border-gray-300 hover:border-var1 transition-all duration-300 hover:-translate-y-1.5">
            <div class="w-12 h-12 bg-var3 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                <i data-lucide="home" class="w-6 h-6 text-var5"></i>
            </div>
            <h3 class="font-semibold text-var7 mb-1">Lorem Ipsum Dolar</h3>
            <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </a>
        
        {{-- Surat Lainnya --}}
        <a href="#" class="group bg-var5 rounded-xl p-5.5 border border-gray-300 hover:border-var1 transition-all duration-300 hover:-translate-y-1.5">
            <div class="w-12 h-12 bg-var3 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                <i data-lucide="home" class="w-6 h-6 text-var5"></i>
            </div>
            <h3 class="font-semibold text-var7 mb-1">Lorem Ipsum Dolar</h3>
            <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </a>
        
        {{-- Surat Lainnya --}}
        <a href="#" class="group bg-var5 rounded-xl p-5.5 border border-gray-300 hover:border-var1 transition-all duration-300 hover:-translate-y-1.5">
            <div class="w-12 h-12 bg-var3 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                <i data-lucide="home" class="w-6 h-6 text-var5"></i>
            </div>
            <h3 class="font-semibold text-var7 mb-1">Lorem Ipsum Dolar</h3>
            <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </a>
        
        {{-- Surat Lainnya --}}
        <a href="#" class="group bg-var5 rounded-xl p-5.5 border border-gray-300 hover:border-var1 transition-all duration-300 hover:-translate-y-1.5">
            <div class="w-12 h-12 bg-var3 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                <i data-lucide="home" class="w-6 h-6 text-var5"></i>
            </div>
            <h3 class="font-semibold text-var7 mb-1">Lorem Ipsum Dolar</h3>
            <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </a>
        
        {{-- Surat Lainnya --}}
        <a href="#" class="group bg-var5 rounded-xl p-5.5 border border-gray-300 hover:border-var1 transition-all duration-300 hover:-translate-y-1.5">
            <div class="w-12 h-12 bg-var3 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                <i data-lucide="home" class="w-6 h-6 text-var5"></i>
            </div>
            <h3 class="font-semibold text-var7 mb-1">Lorem Ipsum Dolar</h3>
            <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </a>
        
        {{-- Surat Lainnya --}}
        <a href="#" class="group bg-var5 rounded-xl p-5.5 border border-gray-300 hover:border-var1 transition-all duration-300 hover:-translate-y-1.5">
            <div class="w-12 h-12 bg-var3 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                <i data-lucide="home" class="w-6 h-6 text-var5"></i>
            </div>
            <h3 class="font-semibold text-var7 mb-1">Lorem Ipsum Dolar</h3>
            <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </a>
        
        {{-- Surat Lainnya --}}
        <a href="#" class="group bg-var5 rounded-xl p-5.5 border border-gray-300 hover:border-var1 transition-all duration-300 hover:-translate-y-1.5">
            <div class="w-12 h-12 bg-var3 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                <i data-lucide="home" class="w-6 h-6 text-var5"></i>
            </div>
            <h3 class="font-semibold text-var7 mb-1">Lorem Ipsum Dolar</h3>
            <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </a>
        
        {{-- Surat Lainnya --}}
        <a href="#" class="group bg-var5 rounded-xl p-5.5 border border-gray-300 hover:border-var1 transition-all duration-300 hover:-translate-y-1.5">
            <div class="w-12 h-12 bg-var3 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                <i data-lucide="home" class="w-6 h-6 text-var5"></i>
            </div>
            <h3 class="font-semibold text-var7 mb-1">Lorem Ipsum Dolar</h3>
            <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </a>
    </div>
</section>

@endsection