@extends('layouts.public')

@section('title', 'Kontak Kami | SiSumDes Mekarsari')
@section('kontak_active', '!text-var3')

@section('content')

{{-- ========== Section 1 - Hero Banner ========== --}}
<section class="h-80 bg-cover bg-center" style="background-image: url('{{ asset('images/bg-all.jpg') }}');">
    <div class="max-w-340 mx-auto px-8 pt-34">
        <h1 class="text-5xl font-bold text-var3 mb-3">Kontak Kami.</h1>
        <p class="text-var5 text-lg">Hubungi kami untuk informasi lebih lanjut terkait apapun.</p>
    </div>
</section>{{-- ========== End Section 1 - Hero Banner ========== --}}

{{-- ========== Section 2 - Content Sementara ========== --}}
<section class="max-w-340 mx-auto px-8 py-20 text-center">
    <p>Konten kontak kami akan segera hadir.</p>
</section> {{-- ========== Section 2 - Content Sementara ========== --}}

@endsection