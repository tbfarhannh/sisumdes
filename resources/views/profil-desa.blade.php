@extends('layouts.public')

@section('title', 'Profil Desa')
@section('profil_active', 'bg-emerald-50 text-emerald-600')

@section('content')
<!-- Hero Banner -->
<section class="pt-20 lg:pt-24 pb-12 bg-linear-to-br from-emerald-50 to-teal-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <h1 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-4">Profil Desa</h1>
        <p class="text-gray-600 text-lg">Mengenal lebih dekat Desa Mekarsari</p>
    </div>
</section>

<!-- Tentang Desa -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div class="relative">
                <div class="rounded-3xl overflow-hidden shadow-xl">
                    <img src="https://picsum.photos/seed/desa2/600/400" alt="Kantor Desa Mekarsari" class="w-full h-80 object-cover">
                </div>
                <div class="absolute -bottom-6 -right-6 bg-white rounded-2xl shadow-lg p-4 flex items-center gap-3 border border-gray-100">
                    <div class="w-10 h-10 bg-emerald-100 rounded-full flex items-center justify-center">
                        <i data-lucide="home" class="w-5 h-5 text-emerald-600"></i>
                    </div>
                    <div>
                        <p class="text-sm font-semibold text-gray-900">Desa Digital</p>
                        <p class="text-xs text-gray-500">Sejak 2023</p>
                    </div>
                </div>
            </div>
            <div>
                <span class="text-emerald-600 font-semibold text-sm uppercase tracking-wider">Tentang Kami</span>
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mt-2 mb-6">Desa Mekarsari, Anyar – Serang</h2>
                <p class="text-gray-600 leading-relaxed mb-4">
                    Desa Mekarsari adalah salah satu desa di Kecamatan Anyar, Kabupaten Serang, Provinsi Banten. Berdiri sejak tahun 1980-an, desa ini memiliki luas wilayah sekitar 450 hektar yang terdiri dari 5 dusun: Dusun Krajan, Dusun Sukamaju, Dusun Ciputat, Dusun Pasirhalang, dan Dusun Cijeruk.
                </p>
                <p class="text-gray-600 leading-relaxed mb-4">
                    Sebagian besar penduduknya bermata pencaharian sebagai petani, pedagang, dan pekerja industri. Dengan potensi alam yang subur, desa ini dikenal sebagai penghasil padi, palawija, dan kerajinan bambu.
                </p>
                <p class="text-gray-600 leading-relaxed">
                    Desa Mekarsari terus berupaya meningkatkan pelayanan publik melalui inovasi digital, termasuk sistem pengajuan surat menyurat online yang memudahkan warganya.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Galeri Desa -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-14">
            <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">Galeri Desa</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">Potret kehidupan dan keindahan Desa Mekarsari.</p>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            <div class="rounded-2xl overflow-hidden shadow-lg">
                <img src="https://picsum.photos/seed/desa3/400/300" alt="Suasana Desa" class="w-full h-48 object-cover hover:scale-110 transition duration-300">
            </div>
            <div class="rounded-2xl overflow-hidden shadow-lg">
                <img src="https://picsum.photos/seed/desa4/400/300" alt="Persawahan" class="w-full h-48 object-cover hover:scale-110 transition duration-300">
            </div>
            <div class="rounded-2xl overflow-hidden shadow-lg">
                <img src="https://picsum.photos/seed/desa5/400/300" alt="Kegiatan Warga" class="w-full h-48 object-cover hover:scale-110 transition duration-300">
            </div>
            <div class="rounded-2xl overflow-hidden shadow-lg">
                <img src="https://picsum.photos/seed/desa6/400/300" alt="Kantor Desa" class="w-full h-48 object-cover hover:scale-110 transition duration-300">
            </div>
            <div class="rounded-2xl overflow-hidden shadow-lg">
                <img src="https://picsum.photos/seed/desa7/400/300" alt="Jalan Desa" class="w-full h-48 object-cover hover:scale-110 transition duration-300">
            </div>
            <div class="rounded-2xl overflow-hidden shadow-lg">
                <img src="https://picsum.photos/seed/desa8/400/300" alt="Pasar Desa" class="w-full h-48 object-cover hover:scale-110 transition duration-300">
            </div>
            <div class="rounded-2xl overflow-hidden shadow-lg">
                <img src="https://picsum.photos/seed/desa9/400/300" alt="Balai Desa" class="w-full h-48 object-cover hover:scale-110 transition duration-300">
            </div>
            <div class="rounded-2xl overflow-hidden shadow-lg">
                <img src="https://picsum.photos/seed/desa10/400/300" alt="Upacara" class="w-full h-48 object-cover hover:scale-110 transition duration-300">
            </div>
        </div>
    </div>
</section>

<!-- Visi & Misi -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12">
            <div class="bg-linear-to-br from-emerald-500 to-teal-600 rounded-3xl p-10 text-white shadow-xl">
                <h2 class="text-3xl font-bold mb-6">Visi</h2>
                <p class="text-emerald-50 text-lg leading-relaxed">
                    "Terwujudnya Desa Mekarsari yang Maju, Mandiri, dan Sejahtera melalui Tata Kelola Pemerintahan yang Baik serta Pemberdayaan Masyarakat Berbasis Teknologi."
                </p>
            </div>
            <div class="bg-white border border-gray-200 rounded-3xl p-10 shadow-lg">
                <h2 class="text-3xl font-bold text-gray-900 mb-6">Misi</h2>
                <ol class="list-decimal list-inside space-y-4 text-gray-700 leading-relaxed">
                    <li class="font-medium">Meningkatkan kualitas pelayanan publik berbasis digital.</li>
                    <li class="font-medium">Mengembangkan potensi ekonomi lokal dan UMKM desa.</li>
                    <li class="font-medium">Memperkuat infrastruktur dasar dan sarana prasarana desa.</li>
                    <li class="font-medium">Mewujudkan lingkungan desa yang bersih, sehat, dan lestari.</li>
                    <li class="font-medium">Mendorong partisipasi aktif masyarakat dalam pembangunan.</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<!-- Struktur Pemerintahan -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-14">
            <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">Struktur Pemerintahan Desa</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">Kepala desa beserta jajaran perangkat yang melayani.</p>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
            <!-- Kepala Desa -->
            <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100 text-center col-span-full md:col-span-1 lg:col-span-1 lg:col-start-3">
                <div class="w-20 h-20 bg-linear-to-br from-emerald-500 to-teal-600 rounded-full mx-auto mb-4 p-1">
                    <div class="w-full h-full bg-white rounded-full flex items-center justify-center">
                        <i data-lucide="user" class="w-8 h-8 text-emerald-600"></i>
                    </div>
                </div>
                <h3 class="font-bold text-gray-900">H. Ahmad Sujai</h3>
                <p class="text-sm text-gray-500">Kepala Desa</p>
            </div>

            <!-- Baris kedua: Sekdes, Kaur, Kasi -->
            <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100 text-center">
                <div class="w-20 h-20 bg-linear-to-br from-blue-500 to-indigo-600 rounded-full mx-auto mb-4 p-1">
                    <div class="w-full h-full bg-white rounded-full flex items-center justify-center">
                        <i data-lucide="user" class="w-8 h-8 text-blue-600"></i>
                    </div>
                </div>
                <h3 class="font-bold text-gray-900">Siti Aminah</h3>
                <p class="text-sm text-gray-500">Sekretaris Desa</p>
            </div>
            <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100 text-center">
                <div class="w-20 h-20 bg-linear-to-br from-amber-500 to-orange-600 rounded-full mx-auto mb-4 p-1">
                    <div class="w-full h-full bg-white rounded-full flex items-center justify-center">
                        <i data-lucide="user" class="w-8 h-8 text-amber-600"></i>
                    </div>
                </div>
                <h3 class="font-bold text-gray-900">Hendra Kusuma</h3>
                <p class="text-sm text-gray-500">Kaur Keuangan</p>
            </div>
            <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100 text-center">
                <div class="w-20 h-20 bg-linear-to-br from-purple-500 to-pink-600 rounded-full mx-auto mb-4 p-1">
                    <div class="w-full h-full bg-white rounded-full flex items-center justify-center">
                        <i data-lucide="user" class="w-8 h-8 text-purple-600"></i>
                    </div>
                </div>
                <h3 class="font-bold text-gray-900">Dewi Sartika</h3>
                <p class="text-sm text-gray-500">Kasi Pelayanan</p>
            </div>
            <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100 text-center">
                <div class="w-20 h-20 bg-linear-to-br from-rose-500 to-red-600 rounded-full mx-auto mb-4 p-1">
                    <div class="w-full h-full bg-white rounded-full flex items-center justify-center">
                        <i data-lucide="user" class="w-8 h-8 text-rose-600"></i>
                    </div>
                </div>
                <h3 class="font-bold text-gray-900">Mulyono</h3>
                <p class="text-sm text-gray-500">Kasi Pemerintahan</p>
            </div>
        </div>
    </div>
</section>
@endsection