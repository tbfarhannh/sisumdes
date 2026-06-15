@extends('layouts.user')

@section('title', 'Riwayat Pengajuan')
@section('page_title', 'Riwayat Pengajuan Surat')
@section('menu_riwayat', 'bg-var1 text-var5')

@section('content')

<section>
    <div class="flex items-center gap-1.5">
        <h2 class="text-xl font-bold text-var7">Riwayat</h2>
        <i data-lucide="chevron-right" class="w-4.5 h-4.5 mt-px"></i>
        <p class="text-gray-600 text-sm mt-0.5">Halaman Riwayat Pengajuan Surat.</p>
    </div>

    @if($pengajuan->isEmpty())
        <div class="text-center py-20">
            <div class="w-16 h-16 bg-gray-100 rounded-2xl flex items-center justify-center mx-auto mb-4">
                <i data-lucide="file-text" class="w-8 h-8 text-gray-400"></i>
            </div>
            <h3 class="text-lg font-semibold text-gray-900 mb-2">Belum Ada Pengajuan</h3>
            <p class="text-gray-500 mb-6">Anda belum mengajukan surat apapun.</p>
            <a href="{{ route('user.pengajuan.create') }}" class="inline-flex items-center gap-2 px-6 py-3 bg-emerald-500 text-white font-medium rounded-xl hover:bg-emerald-600 transition">
                <i data-lucide="plus" class="w-5 h-5"></i> Ajukan Surat
            </a>
        </div>
    @else
        <div class="bg-var5 rounded-xl border border-gray-300 overflow-hidden mt-6">
            <table class="w-full">
                <thead>
                    <tr class="border-b border-gray-300 bg-var1">
                        <th class="text-left px-6 py-3.5 font-semibold text-var5 font-heading">Jenis Surat</th>
                        <th class="text-left px-6 py-3.5 font-semibold text-var5 font-heading">Tanggal</th>
                        <th class="text-left px-6 py-3.5 font-semibold text-var5 font-heading">Status</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-300">
                    @foreach($pengajuan as $item)
                    <tr class="hover:bg-var6 transition-colors">
                        <td class="px-6 py-3.5">
                            <div class="flex items-center gap-3">
                                @if($item->jenis_surat == 'usaha')
                                    <div class="w-10 h-10 bg-var3 rounded-lg flex items-center justify-center"><i data-lucide="file-text" class="w-5 h-5 text-var5"></i></div>
                                @elseif($item->jenis_surat == 'kehilangan')
                                    <div class="w-10 h-10 bg-var3 rounded-lg flex items-center justify-center"><i data-lucide="megaphone" class="w-5 h-5 text-var5"></i></div>
                                @else
                                    <div class="w-10 h-10 bg-var3 rounded-lg flex items-center justify-center"><i data-lucide="users" class="w-5 h-5 text-var5"></i></div>
                                @endif
                                <span class="font-medium text-var7">{{ ucwords(str_replace('_', ' ', $item->jenis_surat)) }}</span>
                            </div>
                        </td>
                        <td class="px-6 py-3.5 text-[15px]">{{ $item->created_at->format('d M Y H:i') }}</td>
                        <td class="px-6 py-3.5">
                            @if($item->status == 'pending')
                                <span class="inline-flex items-center px-5 py-1.5 rounded-full text-sm font-medium bg-yellow-100 text-yellow-700">Menunggu</span>
                            @elseif($item->status == 'disetujui')
                                <span class="inline-flex items-center px-5 py-1.5 rounded-full text-sm font-medium bg-green-100 text-green-700">Disetujui</span>
                            @else
                                <span class="inline-flex items-center px-5 py-1.5 rounded-full text-sm font-medium bg-red-100 text-red-700">Ditolak</span>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="px-6 py-2 border-t border-gray-300">
                {{ $pengajuan->links() }}
            </div>
        </div>
    @endif
</section>

@endsection