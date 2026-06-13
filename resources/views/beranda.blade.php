@extends('layouts.public')

@section('title', 'Beranda')
@section('beranda_active', 'bg-emerald-50 text-emerald-600')

@section('content')
<!-- Hero Section -->
<section class="relative pt-20 lg:pt-24 pb-16 lg:pb-24 bg-gradient-to-br from-emerald-50 via-white to-teal-50 overflow-hidden">
    <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxnIGZpbGw9IiMwMDAiIGZpbGwtb3BhY2l0eT0iMC4wMiI+PHBhdGggZD0iTTM2IDM0djJIMjR2LTJoMTJ6TTM2IDI0djJIMjR2LTJoMTJ6Ii8+PC9nPjwvZz48L3N2Zz4=')] opacity-50"></div>
    
    <!-- Decorative Blobs -->
    <div class="absolute -top-40 -right-40 w-96 h-96 bg-emerald-200/30 rounded-full blur-3xl"></div>
    <div class="absolute -bottom-40 -left-40 w-96 h-96 bg-teal-200/30 rounded-full blur-3xl"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div>
                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-emerald-100 text-emerald-700 mb-6">
                    🏆 Desa Digital Terbaik 2025
                </span>
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-gray-900 leading-tight mb-6">
                    Pelayanan Desa
                    <span class="bg-gradient-to-r from-emerald-500 to-teal-600 bg-clip-text text-transparent">Modern & Mudah</span>
                </h1>
                <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                    Ajukan surat keterangan secara online tanpa perlu antri. Cepat, transparan, dan langsung diproses oleh perangkat desa. Wujudkan pelayanan prima untuk masyarakat.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="/register" class="px-6 py-3.5 bg-gradient-to-r from-emerald-500 to-teal-600 text-white font-semibold rounded-xl hover:from-emerald-600 hover:to-teal-700 shadow-xl shadow-emerald-500/25 transition-all inline-flex items-center gap-2">
                        Ajukan Surat Sekarang <i data-lucide="arrow-right" class="w-5 h-5"></i>
                    </a>
                    <a href="/profil-desa" class="px-6 py-3.5 border-2 border-gray-300 text-gray-700 font-semibold rounded-xl hover:border-emerald-300 hover:text-emerald-600 transition-all">
                        Tentang Desa
                    </a>
                </div>
            </div>
            <div class="hidden lg:block">
                <div class="relative">
                    <div class="bg-white rounded-3xl shadow-2xl p-8 border border-gray-100">
                        <div class="flex items-center gap-4 mb-6 pb-6 border-b border-gray-100">
                            <div class="w-14 h-14 bg-emerald-100 rounded-2xl flex items-center justify-center">
                                <i data-lucide="file-text" class="w-7 h-7 text-emerald-600"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-900">Pengajuan Surat</h3>
                                <p class="text-sm text-gray-500">Isi formulir dengan mudah</p>
                            </div>
                        </div>
                        <div class="space-y-3">
                            <div class="h-3 bg-gray-100 rounded-full w-full"></div>
                            <div class="h-3 bg-gray-100 rounded-full w-4/5"></div>
                            <div class="h-3 bg-gray-100 rounded-full w-3/5"></div>
                            <div class="h-3 bg-emerald-200 rounded-full w-2/5"></div>
                        </div>
                        <div class="mt-6 flex justify-end">
                            <div class="bg-emerald-500 text-white text-sm px-4 py-2 rounded-lg">Kirim</div>
                        </div>
                    </div>
                    <!-- Floating card -->
                    <div class="absolute -bottom-6 -left-6 bg-white rounded-2xl shadow-xl p-4 flex items-center gap-3 border border-gray-100">
                        <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center">
                            <i data-lucide="check-circle" class="w-5 h-5 text-green-600"></i>
                        </div>
                        <div>
                            <p class="text-sm font-semibold text-gray-900">Surat Siap</p>
                            <p class="text-xs text-gray-500">Dalam 1x24 jam</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 4 Card Section (Layanan Unggulan) -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-14">
            <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">Layanan Unggulan Desa</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">Kami hadir untuk mempermudah pengurusan administrasi kependudukan Anda dengan sistem yang cepat dan transparan.</p>
        </div>
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Card 1 -->
            <div class="group bg-white rounded-2xl p-6 shadow-lg border border-gray-100 hover:shadow-xl hover:border-emerald-200 transition-all duration-300 hover:-translate-y-1">
                <div class="w-14 h-14 bg-gradient-to-br from-emerald-400 to-emerald-600 rounded-xl flex items-center justify-center mb-5 group-hover:scale-110 transition-transform">
                    <i data-lucide="file-text" class="w-7 h-7 text-white"></i>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Surat Keterangan Usaha</h3>
                <p class="text-gray-600 text-sm">Pengajuan surat keterangan usaha untuk keperluan legalitas bisnis Anda.</p>
            </div>
            <!-- Card 2 -->
            <div class="group bg-white rounded-2xl p-6 shadow-lg border border-gray-100 hover:shadow-xl hover:border-emerald-200 transition-all duration-300 hover:-translate-y-1">
                <div class="w-14 h-14 bg-gradient-to-br from-blue-400 to-blue-600 rounded-xl flex items-center justify-center mb-5 group-hover:scale-110 transition-transform">
                    <i data-lucide="megaphone" class="w-7 h-7 text-white"></i>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Surat Kehilangan</h3>
                <p class="text-gray-600 text-sm">Laporkan kehilangan dokumen penting dan dapatkan surat keterangan resmi.</p>
            </div>
            <!-- Card 3 -->
            <div class="group bg-white rounded-2xl p-6 shadow-lg border border-gray-100 hover:shadow-xl hover:border-emerald-200 transition-all duration-300 hover:-translate-y-1">
                <div class="w-14 h-14 bg-gradient-to-br from-orange-400 to-orange-600 rounded-xl flex items-center justify-center mb-5 group-hover:scale-110 transition-transform">
                    <i data-lucide="users" class="w-7 h-7 text-white"></i>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Surat Tidak Mampu</h3>
                <p class="text-gray-600 text-sm">Dapatkan surat keterangan tidak mampu untuk berbagai keperluan sosial.</p>
            </div>
            <!-- Card 4 -->
            <div class="group bg-white rounded-2xl p-6 shadow-lg border border-gray-100 hover:shadow-xl hover:border-emerald-200 transition-all duration-300 hover:-translate-y-1">
                <div class="w-14 h-14 bg-gradient-to-br from-purple-400 to-purple-600 rounded-xl flex items-center justify-center mb-5 group-hover:scale-110 transition-transform">
                    <i data-lucide="home" class="w-7 h-7 text-white"></i>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Layanan Lainnya</h3>
                <p class="text-gray-600 text-sm">Berbagai layanan administrasi desa lainnya akan segera hadir untuk Anda.</p>
            </div>
        </div>
    </div>
</section>

<!-- Tentang Desa -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div class="relative">
                <div class="bg-gradient-to-br from-emerald-400 to-teal-600 rounded-3xl p-1">
                    <div class="bg-gray-50 rounded-[22px] overflow-hidden">
                        <img src="https://picsum.photos/seed/desa1/600/400" alt="Desa Mekarsari" class="w-full h-80 object-cover">
                    </div>
                </div>
                <!-- Badge -->
                <div class="absolute -bottom-5 -right-5 bg-white rounded-2xl shadow-xl p-4 flex items-center gap-3">
                    <div class="w-12 h-12 bg-emerald-100 rounded-xl flex items-center justify-center">
                        <i data-lucide="users" class="w-6 h-6 text-emerald-600"></i>
                    </div>
                    <div>
                        <p class="text-2xl font-bold text-gray-900">5.000+</p>
                        <p class="text-xs text-gray-500">Warga Terlayani</p>
                    </div>
                </div>
            </div>
            <div>
                <span class="text-emerald-600 font-semibold text-sm uppercase tracking-wider">Tentang Kami</span>
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mt-2 mb-6">Desa Mekarsari, Anyar – Serang</h2>
                <p class="text-gray-600 leading-relaxed mb-4">
                    Desa Mekarsari merupakan salah satu desa yang terletak di Kecamatan Anyar, Kabupaten Serang, Provinsi Banten. Dengan luas wilayah sekitar 450 hektar, desa ini menjadi pusat aktivitas masyarakat yang dinamis dan harmonis.
                </p>
                <p class="text-gray-600 leading-relaxed mb-6">
                    Kami terus berinovasi dalam memberikan pelayanan terbaik kepada masyarakat, termasuk melalui sistem pengajuan surat menyurat online yang modern dan efisien.
                </p>
                <div class="flex flex-wrap gap-3">
                    <span class="px-3 py-1 bg-emerald-100 text-emerald-700 text-sm rounded-full">Amanah</span>
                    <span class="px-3 py-1 bg-blue-100 text-blue-700 text-sm rounded-full">Transparan</span>
                    <span class="px-3 py-1 bg-orange-100 text-orange-700 text-sm rounded-full">Profesional</span>
                    <span class="px-3 py-1 bg-purple-100 text-purple-700 text-sm rounded-full">Melayani</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Fitur Desa Kami -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-14">
            <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">Fitur Desa Kami</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">Manfaatkan berbagai fitur unggulan yang kami sediakan untuk kemudahan akses layanan publik.</p>
        </div>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="text-center p-8">
                <div class="w-16 h-16 bg-emerald-100 rounded-2xl flex items-center justify-center mx-auto mb-5">
                    <i data-lucide="file-text" class="w-8 h-8 text-emerald-600"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Pengajuan Surat Online</h3>
                <p class="text-gray-600">Ajukan berbagai surat keterangan kapan saja dan di mana saja tanpa harus datang ke kantor desa.</p>
            </div>
            <div class="text-center p-8">
                <div class="w-16 h-16 bg-blue-100 rounded-2xl flex items-center justify-center mx-auto mb-5">
                    <i data-lucide="check-circle" class="w-8 h-8 text-blue-600"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Tracking Status</h3>
                <p class="text-gray-600">Pantau status pengajuan surat Anda secara real-time melalui halaman riwayat.</p>
            </div>
            <div class="text-center p-8">
                <div class="w-16 h-16 bg-purple-100 rounded-2xl flex items-center justify-center mx-auto mb-5">
                    <i data-lucide="mail" class="w-8 h-8 text-purple-600"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Notifikasi Email</h3>
                <p class="text-gray-600">Dapatkan pemberitahuan langsung ke email Anda saat surat telah selesai diproses.</p>
            </div>
        </div>
    </div>
</section>

<!-- Banner Ajakan Kedua -->
<section class="py-16 bg-gradient-to-r from-emerald-600 to-teal-700 relative overflow-hidden">
    <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHZpZXdCb3g9IjAgMCA0MCA0MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxnIGZpbGw9IiNmZmYiIGZpbGwtb3BhY2l0eT0iMC4wNSI+PHBhdGggZD0iTTIwIDBMMCAyMGgyMHYyMEwyMCAwbDIwIDIwSDB6Ii8+PC9nPjwvZz48L3N2Zz4=')]"></div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl lg:text-4xl font-bold text-white mb-4">Siap Mengajukan Surat Secara Online?</h2>
        <p class="text-emerald-100 max-w-2xl mx-auto mb-8">Daftarkan diri Anda sekarang dan nikmati kemudahan pelayanan administrasi desa tanpa hambatan.</p>
        <a href="/register" class="inline-flex items-center gap-2 px-8 py-4 bg-white text-emerald-700 font-bold rounded-xl hover:bg-gray-50 shadow-xl transition-all">
            Daftar Sekarang <i data-lucide="arrow-right" class="w-5 h-5"></i>
        </a>
    </div>
</section>

<!-- Statistik Desa -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-14">
            <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">Statistik Desa</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">Data demografi Desa Mekarsari berdasarkan data terbaru.</p>
        </div>
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100 text-center">
                <div class="w-14 h-14 bg-emerald-100 rounded-xl flex items-center justify-center mx-auto mb-4">
                    <i data-lucide="users" class="w-7 h-7 text-emerald-600"></i>
                </div>
                <p class="text-3xl font-bold text-gray-900 mb-1">5.234</p>
                <p class="text-gray-500 text-sm">Total Warga</p>
            </div>
            <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100 text-center">
                <div class="w-14 h-14 bg-blue-100 rounded-xl flex items-center justify-center mx-auto mb-4">
                    <i data-lucide="home" class="w-7 h-7 text-blue-600"></i>
                </div>
                <p class="text-3xl font-bold text-gray-900 mb-1">1.423</p>
                <p class="text-gray-500 text-sm">Kartu Keluarga</p>
            </div>
            <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100 text-center">
                <div class="w-14 h-14 bg-indigo-100 rounded-xl flex items-center justify-center mx-auto mb-4">
                    <i data-lucide="user" class="w-7 h-7 text-indigo-600"></i>
                </div>
                <p class="text-3xl font-bold text-gray-900 mb-1">2.687</p>
                <p class="text-gray-500 text-sm">Laki-laki</p>
            </div>
            <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100 text-center">
                <div class="w-14 h-14 bg-pink-100 rounded-xl flex items-center justify-center mx-auto mb-4">
                    <i data-lucide="user" class="w-7 h-7 text-pink-600"></i>
                </div>
                <p class="text-3xl font-bold text-gray-900 mb-1">2.547</p>
                <p class="text-gray-500 text-sm">Perempuan</p>
            </div>
        </div>
    </div>
</section>

<!-- Keluhan / Hubungi Kami -->
<section class="py-20 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="bg-gradient-to-br from-gray-50 to-gray-100 rounded-3xl p-10 lg:p-14 shadow-xl border border-gray-200">
            <div class="w-16 h-16 bg-emerald-100 rounded-2xl flex items-center justify-center mx-auto mb-6">
                <i data-lucide="megaphone" class="w-8 h-8 text-emerald-600"></i>
            </div>
            <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">Ada Keluhan?</h2>
            <p class="text-gray-600 mb-8 max-w-xl mx-auto">Sampaikan keluhan, saran, atau pertanyaan Anda kepada kami. Kami siap mendengarkan dan memberikan solusi terbaik.</p>
            <a href="/kontak" class="inline-flex items-center gap-2 px-8 py-4 bg-gradient-to-r from-emerald-500 to-teal-600 text-white font-bold rounded-xl hover:from-emerald-600 hover:to-teal-700 shadow-xl shadow-emerald-500/25 transition-all">
                Hubungi Kami <i data-lucide="arrow-right" class="w-5 h-5"></i>
            </a>
        </div>
    </div>
</section>
@endsection