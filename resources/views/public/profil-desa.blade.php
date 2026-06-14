@extends('layouts.public')

@section('title', 'Profil Desa | SiSumDes Mekarsari')
@section('profil_active', '!text-var3')

@section('content')

{{-- ========== Section 1 - Hero Banner ========== --}}
<section class="h-80 bg-cover bg-center" style="background-image: url('{{ asset('images/bg-all.jpg') }}');">
    <div class="max-w-340 mx-auto px-8 pt-34">
        <h1 class="text-5xl font-bold text-var3 mb-3">Profil Desa.</h1>
        <p class="text-var5 text-lg">Ayo Mengenal lebih dekat dengan Desa Mekarsari Anyar Banten.</p>
    </div>
</section>{{-- ========== End Section 1 - Hero Banner ========== --}}

{{-- ========== Section 2 - Tentang Desa ========== --}}
<section class="py-20 bg-var5">
    <div class="max-w-340 mx-auto px-8">
        <div class="grid grid-cols-2 gap-12">
            <div class="relative">
                <img src="{{ asset('images/bg-login.jpg') }}" alt="Desa Mekarsari" loading="lazy" class="w-full rounded-2xl h-123 object-cover">
                <div class="absolute -bottom-6 -right-6 bg-var5 rounded-xl shadow-lg py-4 ps-5 pe-7 flex items-center gap-3 border border-gray-100">
                    <div class="w-10 h-10 bg-var3 rounded-full flex items-center justify-center">
                        <i data-lucide="home" class="w-5 h-5 text-var5"></i>
                    </div>
                    <div>
                        <p class="font-bold font-heading">Desa Digital</p>
                        <p class="text-sm">Sejak 2023</p>
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
                    <p class="leading-relaxed">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat consequuntur magni illo totam omnis cumque eligendi ratione obcaecati cum a dolorum quae modi recusandae, nihil nostrum amet necessitatibus accusantium. Ipsum.</p>
                </div>
            </div>
        </div>
    </div>
</section> {{-- ========== End Section 2 - Tentang Desa ========== --}}

{{-- ========== Section 3 - Galeri Desa ========== --}}
<section class="py-20 bg-var6">
    <div class="max-w-340 mx-auto px-8">
        <div class="text-center mb-10">
            <h2 class="text-4xl font-bold text-var1 mb-3">Galeri Desa.</h2>
            <p>Potret kehidupan dan keindahan Desa Mekarsari Anyar.</p>
        </div>
        <div class="grid grid-cols-4 gap-5">
            <div class="rounded-xl overflow-hidden">
                <img src="https://images.unsplash.com/photo-1671080749889-19f8a69deb2b?q=80&w=2076&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Suasana Desa" class="w-full h-55 object-cover hover:scale-110 transition duration-300">
            </div>
            <div class="rounded-xl overflow-hidden">
                <img src="https://images.unsplash.com/photo-1696819646359-5d77448b0d3b?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Persawahan" class="w-full h-55 object-cover hover:scale-110 transition duration-300">
            </div>
            <div class="rounded-xl overflow-hidden">
                <img src="https://images.unsplash.com/photo-1716731049987-c5ec344a9c80?q=80&w=1332&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Kegiatan Warga" class="w-full h-55 object-cover hover:scale-110 transition duration-300">
            </div>
            <div class="rounded-xl overflow-hidden">
                <img src="https://images.unsplash.com/photo-1442544213729-6a15f1611937?q=80&w=1332&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Kantor Desa" class="w-full h-55 object-cover hover:scale-110 transition duration-300">
            </div>
            <div class="rounded-xl overflow-hidden">
                <img src="https://images.unsplash.com/photo-1559628151-09bb04c5d1ae?q=80&w=735&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Jalan Desa" class="w-full h-55 object-cover hover:scale-110 transition duration-300">
            </div>
            <div class="rounded-xl overflow-hidden">
                <img src="https://images.unsplash.com/photo-1681890777645-2374b0efa9ba?q=80&w=627&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Pasar Desa" class="w-full h-55 object-cover hover:scale-110 transition duration-300">
            </div>
            <div class="rounded-xl overflow-hidden">
                <img src="https://images.unsplash.com/photo-1654229472767-4f5304d80edf?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Balai Desa" class="w-full h-55 object-cover hover:scale-110 transition duration-300">
            </div>
            <div class="rounded-xl overflow-hidden">
                <img src="https://images.unsplash.com/photo-1569134471968-872d5cd1fca9?q=80&w=1494&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Upacara" class="w-full h-55 object-cover hover:scale-110 transition duration-300">
            </div>
        </div>
    </div>
</section> {{-- ========== End Section 3 - Galeri Desa ========== --}}

{{-- ========== Section 4 - Visi & Misi ========== --}}
<section class="py-20 bg-var5">
    <div class="max-w-340 mx-auto px-8">
        <div class="grid grid-cols-2 gap-12">
            <img src="{{ asset('images/bg-regis.jpg') }}" alt="Desa Mekarsari" loading="lazy" class="w-full rounded-2xl h-105 object-cover">
            
            <div>
                <span class="text-var3 font-bold font-heading">VISI & MISI</span>
                <h2 class="text-4xl font-bold text-var1 mt-2 mb-6">Visi Desa Kami.</h2>
                <p class="leading-relaxed">"Terwujudnya Desa Mekarsari yang Maju, Mandiri, dan Sejahtera melalui Tata Kelola Pemerintahan yang Baik serta Pemberdayaan Masyarakat Berbasis Teknologi."</p>
                <h2 class="text-4xl font-bold text-var1 mt-10 mb-6">Misi Desa Kami.</h2>
                <ol class="list-decimal list-inside space-y-2 leading-relaxed">
                    <li>Meningkatkan kualitas pelayanan publik berbasis digital.</li>
                    <li>Mengembangkan potensi ekonomi lokal dan UMKM desa.</li>
                    <li>Memperkuat infrastruktur dasar dan sarana prasarana desa.</li>
                    <li>Mewujudkan lingkungan desa yang bersih, sehat, dan lestari.</li>
                    <li>Mendorong partisipasi aktif masyarakat dalam pembangunan.</li>
                </ol>
            </div>
        </div>
    </div>
</section> {{-- ========== End Section 4 - Visi & Misi ========== --}}

{{-- ========== Section 5 - Struktur Pemerintahan ========== --}}
<section class="py-20 bg-var6">
    <div class="max-w-340 mx-auto px-8">
        <div class="text-center mb-10">
            <h2 class="text-4xl font-bold text-var1 mb-3">Struktur Pemerintahan Desa.</h2>
            <p>Kepala desa beserta jajaran perangkat yang melayani.</p>
        </div>
        <div class="grid grid-cols-5 gap-5">
            <div class="rounded-xl overflow-hidden text-center bg-var5 border border-gray-300 pb-4">
                <img src="https://images.unsplash.com/photo-1621982068749-d74c76e05720?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="kelapa desa" loading="lazy" class="w-full h-70 object-cover object-top">    
                <h3 class="font-bold text-var1 text-lg mt-3.5">H. Ahmad Sujai</h3>
                <p>Kepala Desa</p>
            </div>
            <div class="rounded-xl overflow-hidden text-center bg-var5 border border-gray-300 pb-4">
                <img src="https://images.unsplash.com/photo-1627564056961-301499f8677d?q=80&w=627&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="kelapa desa" loading="lazy" class="w-full h-70 object-cover object-top">    
                <h3 class="font-bold text-var1 text-lg mt-3.5">Mulyono</h3>
                <p>Sekretaris Desa</p>
            </div>
            <div class="rounded-xl overflow-hidden text-center bg-var5 border border-gray-300 pb-4">
                <img src="https://images.unsplash.com/photo-1619974168383-aa4f9c99d359?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="kelapa desa" loading="lazy" class="w-full h-70 object-cover object-top">    
                <h3 class="font-bold text-var1 text-lg mt-3.5">Hendra Kusuma</h3>
                <p>Kaur Keuangan</p>
            </div>
            <div class="rounded-xl overflow-hidden text-center bg-var5 border border-gray-300 pb-4">
                <img src="https://images.unsplash.com/photo-1624471693771-147fdae4b3e5?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="kelapa desa" loading="lazy" class="w-full h-70 object-cover object-top">    
                <h3 class="font-bold text-var1 text-lg mt-3.5">Dahlan Ahmad</h3>
                <p>Kasi Pelayanan</p>
            </div>
            <div class="rounded-xl overflow-hidden text-center bg-var5 border border-gray-300 pb-4">
                <img src="https://images.unsplash.com/photo-1767615792114-f30422379aaf?q=80&w=742&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="kelapa desa" loading="lazy" class="w-full h-70 object-cover object-top">    
                <h3 class="font-bold text-var1 text-lg mt-3.5">Siti Aminah</h3>
                <p>Kasi Pemerintahan</p>
            </div>
        </div>
    </div>
</section> {{-- ========== End Section 5 - Struktur Pemerintahan ========== --}}

@endsection