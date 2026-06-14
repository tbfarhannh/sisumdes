@extends('layouts.public')

@section('title', 'SiSumDes Mekarsari')
@section('beranda_active', '!text-var3')

@section('content')

{{-- ========== Section 1 - Hero Banner ========== --}}
<section class="h-screen flex justify-center items-center">
    <div class="relative max-w-340 mx-auto px-8">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div>
                <span class="inline-flex items-center px-4 py-1.5 rounded-full text-sm font-medium bg-var3 text-var5 mb-6">Desa Digital Terbaik 2025</span>
                <h1 class="text-6xl font-extrabold text-var1 leading-tight mb-6">Pelayanan Desa <span class="text-var3"> Modern</span> & Mudah</h1>
                <p class="text-lg mb-8 leading-relaxed">Ajukan surat keterangan secara online tanpa perlu antri. Cepat, transparan, dan langsung diproses oleh perangkat desa. Wujudkan pelayanan prima untuk masyarakat.</p>
                <div class="flex flex-wrap gap-4">
                    <a href="/login" class="px-8 py-3.5 bg-var1 text-var5 font-medium rounded-full border border-var1 hover:bg-var2 transition-all duration-300 inline-flex items-center gap-2">
                        Ajukan Surat Sekarang <i data-lucide="arrow-right" class="w-5 h-5"></i>
                    </a>
                    <a href="/profil-desa" class="px-8 py-3.5 text-var1 border border-var1 font-semibold rounded-full hover:bg-var2 hover:text-var5 transition-all duration-300 inline-flex items-center gap-2">Tentang Desa</a>
                </div>
            </div>

            <div class="hidden lg:block">
                <div class="relative">
                    <div class="bg-var5 rounded-2xl shadow-xl/5 p-8 border border-gray-300">
                        <div class="flex items-center gap-4 mb-6 pb-6 border-b border-gray-300">
                            <div class="w-14 h-14 bg-var3 rounded-xl flex items-center justify-center">
                                <i data-lucide="file-text" class="w-7 h-7 text-var5"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-var1 text-lg">Pengajuan Surat</h3>
                                <p>Isi formulir dengan mudah & cepat.</p>
                            </div>
                        </div>
                        <div class="space-y-3">
                            <div class="h-3 bg-gray-200 rounded-full w-full"></div>
                            <div class="h-3 bg-gray-200 rounded-full w-4/5"></div>
                            <div class="h-3 bg-gray-200 rounded-full w-3/5"></div>
                            <div class="h-3 bg-var1 rounded-full w-2/5"></div>
                        </div>
                        <div class="mt-6 flex justify-end">
                            <div class="bg-var1 text-var5 px-4 py-2 rounded-lg">Kirim</div>
                        </div>
                    </div>
                    <div class="absolute -bottom-6 -left-6 bg-white rounded-xl shadow-lg/5 py-4 ps-5 pe-7 flex items-center gap-3 border border-gray-100">
                        <div class="w-10 h-10 bg-var3 rounded-full flex items-center justify-center">
                            <i data-lucide="check-circle" class="w-5 h-5 text-var5"></i>
                        </div>
                        <div>
                            <p class="font-bold font-heading">Surat Siap</p>
                            <p class="text-sm">Dalam 1x24 jam</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> {{-- ========== End Section 1 - Hero Banner ========== --}}

{{-- ========== Section 2 - Layanan Unggulan ========== --}}
<section class="py-20 bg-var6">
    <div class="max-w-340 mx-auto px-8">
        <div class="text-center mb-10">
            <h2 class="text-4xl font-bold text-var1 mb-3">Layanan Unggulan Desa.</h2>
            <p class="max-w-2xl mx-auto">Kami hadir untuk mempermudah pengurusan administrasi kependudukan Anda dengan sistem yang cepat dan transparan.</p>
        </div>

        <div class="grid grid-cols-4 gap-5">
            <div class="group bg-var5 rounded-xl p-6 border border-gray-300 hover:border-var1 transition-all duration-300 hover:-translate-y-1.5">
                <div class="w-14 h-14 bg-var3 rounded-xl flex items-center justify-center mb-5">
                    <i data-lucide="file-text" class="w-7 h-7 text-white"></i>
                </div>
                <h3 class="text-lg font-bold text-var1 mb-1.5">Surat Keterangan Usaha</h3>
                <p>Pengajuan surat keterangan usaha untuk keperluan legalitas bisnis Anda.</p>
            </div>

            <div class="group bg-var5 rounded-xl p-6 border border-gray-300 hover:border-var1 transition-all duration-300 hover:-translate-y-1.5">
                <div class="w-14 h-14 bg-var3 rounded-xl flex items-center justify-center mb-5">
                    <i data-lucide="megaphone" class="w-7 h-7 text-white"></i>
                </div>
                <h3 class="text-lg font-bold text-var1 mb-1.5">Surat Kehilangan</h3>
                <p>Laporkan kehilangan dokumen penting dan dapatkan surat keterangan resmi.</p>
            </div>

            <div class="group bg-var5 rounded-xl p-6 border border-gray-300 hover:border-var1 transition-all duration-300 hover:-translate-y-1.5">
                <div class="w-14 h-14 bg-var3 rounded-xl flex items-center justify-center mb-5">
                    <i data-lucide="users" class="w-7 h-7 text-white"></i>
                </div>
                <h3 class="text-lg font-bold text-var1 mb-1.5">Surat Tidak Mampu</h3>
                <p>Dapatkan surat keterangan tidak mampu untuk berbagai keperluan sosial.</p>
            </div>

            <div class="group bg-var5 rounded-xl p-6 border border-gray-300 hover:border-var1 transition-all duration-300 hover:-translate-y-1.5">
                <div class="w-14 h-14 bg-var3 rounded-xl flex items-center justify-center mb-5">
                    <i data-lucide="home" class="w-7 h-7 text-white"></i>
                </div>
                <h3 class="text-lg font-bold text-var1 mb-1.5">Layanan Lainnya</h3>
                <p>Berbagai layanan administrasi desa lainnya akan segera hadir untuk Anda.</p>
            </div>
        </div>
    </div>
</section> {{-- ========== End Section 2 - Layanan Unggulan ========== --}}

{{-- ========== Section 3 - Tentang Desa ========== --}}
<section class="py-20 bg-var5">
    <div class="max-w-340 mx-auto px-8">
        <div class="grid grid-cols-2 gap-12">
            <div class="relative">
                <img src="{{ asset('images/bg-login.jpg') }}" alt="Desa Mekarsari" loading="lazy" class="w-full rounded-2xl h-113 object-cover">
                <div class="absolute -bottom-6 -right-6 bg-var5 rounded-xl shadow-lg py-4 ps-5 pe-7 flex items-center gap-3 border border-gray-100">
                    <div class="w-10 h-10 bg-var3 rounded-full flex items-center justify-center">
                        <i data-lucide="users" class="w-5 h-5 text-var5"></i>
                    </div>
                    <div>
                        <p class="font-bold text-lg font-heading">5.000+</p>
                        <p class="text-sm">Warga Terlayani</p>
                    </div>
                </div>
            </div>

            <div>
                <span class="text-var3 font-bold font-heading">TENTANG KAMI</span>
                <h2 class="text-4xl font-bold text-var1 mt-2 mb-6">Desa Mekarsari, Anyar - Serang</h2>
                <div class="space-y-4">
                    <p class="leading-relaxed">Desa Mekarsari adalah salah satu desa di Kecamatan Anyar, Kabupaten Serang, Provinsi Banten. Berdiri sejak tahun 1980-an, desa ini memiliki luas wilayah sekitar 450 hektar yang terdiri dari 5 dusun: Dusun Krajan, Dusun Sukamaju, Dusun Ciputat, Dusun Pasirhalang, dan Dusun Cijeruk.</p>
                    <p class="leading-relaxed">Sebagian besar penduduknya bermata pencaharian sebagai petani, pedagang, dan pekerja industri. Dengan potensi alam yang subur, desa ini dikenal sebagai penghasil padi, palawija, dan kerajinan bambu.</p>
                    <p class="leading-relaxed">Desa Mekarsari terus berupaya meningkatkan pelayanan publik melalui inovasi digital, termasuk sistem pengajuan surat menyurat online yang memudahkan warganya.</p>
                    <div class="flex flex-wrap gap-3 mt-7">
                        <span class="px-4 py-1 bg-var1 text-var5 text-sm rounded-full">Amanah</span>
                        <span class="px-4 py-1 bg-var1 text-var5 text-sm rounded-full">Transparan</span>
                        <span class="px-4 py-1 bg-var1 text-var5 text-sm rounded-full">Profesional</span>
                        <span class="px-4 py-1 bg-var1 text-var5 text-sm rounded-full">Melayani</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> {{-- ========== End Section 3 - Tentang Desa ========== --}}

{{-- ========== Section 4 - Fitur Desa Kami ========== --}}
<section class="py-20 bg-var6">
    <div class="max-w-340 mx-auto px-8">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-var1 mb-3">Fitur Desa Kami.</h2>
            <p>Manfaatkan berbagai fitur unggulan yang kami sediakan untuk kemudahan akses layanan publik.</p>
        </div>

        <div class="grid grid-cols-3 gap-20">
            <div class="text-center">
                <div class="w-16 h-16 bg-var3 rounded-xl flex items-center justify-center mx-auto mb-5">
                    <i data-lucide="file-text" class="w-8 h-8 text-var5"></i>
                </div>
                <h3 class="text-xl font-bold text-var1 mb-2">Pengajuan Surat Online.</h3>
                <p>Ajukan berbagai surat keterangan di mana saja tanpa harus datang ke kantor desa.</p>
            </div>
            <div class="text-center">
                <div class="w-16 h-16 bg-var3 rounded-xl flex items-center justify-center mx-auto mb-5">
                    <i data-lucide="check-circle" class="w-8 h-8 text-var5"></i>
                </div>
                <h3 class="text-xl font-bold text-var1 mb-2">Tracking Status.</h3>
                <p>Pantau status pengajuan surat Anda secara real-time melalui halaman riwayat.</p>
            </div>
            <div class="text-center">
                <div class="w-16 h-16 bg-var3 rounded-xl flex items-center justify-center mx-auto mb-5">
                    <i data-lucide="mail" class="w-8 h-8 text-var5"></i>
                </div>
                <h3 class="text-xl font-bold text-var1 mb-2">Notifikasi Email.</h3>
                <p>Dapatkan pemberitahuan langsung ke email Anda saat surat telah selesai diproses.</p>
            </div>
        </div>
    </div>
</section> {{-- ========== End Section 4 - Fitur Desa Kami ========== --}}

{{-- ========== Section 5 - Banner Ajakan ========== --}}
<section class="py-16 bg-var1">
    <div class="max-w-340 mx-auto px-8 text-center">
        <h2 class="text-4xl font-bold mb-4 text-var5">Siap Mengajukan Surat Secara Online?</h2>
        <p class="text-var5/80 text-lg mb-8">Daftarkan diri Anda sekarang dan nikmati kemudahan pelayanan administrasi desa tanpa hambatan.</p>
        <a href="/register" class="inline-flex items-center text-lg gap-2 px-10 py-3.5 bg-var3 text-var5 font-semibold rounded-full hover:bg-var4 transition-all duration-300">
            Daftar Sekarang <i data-lucide="arrow-right" class="w-5 h-5 stroke-2"></i>
        </a>
    </div>
</section> {{-- ========== End Section 5 - Banner Ajakan ========== --}}

{{-- ========== Section 6 - Statistik Desa ========== --}}
<section class="py-20 bg-var5">
    <div class="max-w-340 mx-auto px-8">
        <div class="text-center mb-10">
            <h2 class="text-4xl font-bold text-var1 mb-3">Statistik Desa.</h2>
            <p class="">Data demografi Desa Mekarsari berdasarkan data terbaru.</p>
        </div>

        <div class="grid grid-cols-4 gap-5">
            <div class="group bg-var5 rounded-xl p-6 border border-gray-300 hover:border-var1 transition-all duration-300 hover:-translate-y-1.5 text-center">
                <div class="w-14 h-14 bg-var3 rounded-xl flex items-center justify-center mx-auto mb-5">
                    <i data-lucide="users" class="w-7 h-7 text-white"></i>
                </div>
                <h3 class="text-3xl font-extrabold text-var1 mb-1.5">5.234</h3>
                <p>Total Warga.</p>
            </div>
            <div class="group bg-var5 rounded-xl p-6 border border-gray-300 hover:border-var1 transition-all duration-300 hover:-translate-y-1.5 text-center">
                <div class="w-14 h-14 bg-var3 rounded-xl flex items-center justify-center mx-auto mb-5">
                    <i data-lucide="home" class="w-7 h-7 text-white"></i>
                </div>
                <h3 class="text-3xl font-extrabold text-var1 mb-1.5">1.423</h3>
                <p>Kartu Keluarga.</p>
            </div>
            <div class="group bg-var5 rounded-xl p-6 border border-gray-300 hover:border-var1 transition-all duration-300 hover:-translate-y-1.5 text-center">
                <div class="w-14 h-14 bg-var3 rounded-xl flex items-center justify-center mx-auto mb-5">
                    <i data-lucide="user" class="w-7 h-7 text-white"></i>
                </div>
                <h3 class="text-3xl font-extrabold text-var1 mb-1.5">2.687</h3>
                <p>Laki-laki.</p>
            </div>
            <div class="group bg-var5 rounded-xl p-6 border border-gray-300 hover:border-var1 transition-all duration-300 hover:-translate-y-1.5 text-center">
                <div class="w-14 h-14 bg-var3 rounded-xl flex items-center justify-center mx-auto mb-5">
                    <i data-lucide="user" class="w-7 h-7 text-white"></i>
                </div>
                <h3 class="text-3xl font-extrabold text-var1 mb-1.5">2.547</h3>
                <p>Perempuan.</p>
            </div>
        </div>
    </div>
</section> {{-- ========== End Section 6 - Statistik Desa ========== --}}

@endsection