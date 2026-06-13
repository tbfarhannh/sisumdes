@extends('layouts.user')

@section('title', 'Riwayat Pengajuan')
@section('page_title', 'Riwayat Pengajuan Surat')
@section('menu_riwayat', 'bg-emerald-50 text-emerald-700')

@section('content')
<div class="max-w-5xl mx-auto">
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
        <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden">
            <table class="w-full">
                <thead>
                    <tr class="border-b border-gray-100 bg-gray-50/50">
                        <th class="text-left px-6 py-4 text-sm font-semibold text-gray-600">Jenis Surat</th>
                        <th class="text-left px-6 py-4 text-sm font-semibold text-gray-600">Tanggal</th>
                        <th class="text-left px-6 py-4 text-sm font-semibold text-gray-600">Status</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @foreach($pengajuan as $item)
                    <tr class="hover:bg-gray-50/50 transition-colors">
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-3">
                                @if($item->jenis_surat == 'usaha')
                                    <div class="w-10 h-10 bg-emerald-100 rounded-xl flex items-center justify-center"><i data-lucide="file-text" class="w-5 h-5 text-emerald-600"></i></div>
                                @elseif($item->jenis_surat == 'kehilangan')
                                    <div class="w-10 h-10 bg-blue-100 rounded-xl flex items-center justify-center"><i data-lucide="megaphone" class="w-5 h-5 text-blue-600"></i></div>
                                @else
                                    <div class="w-10 h-10 bg-orange-100 rounded-xl flex items-center justify-center"><i data-lucide="users" class="w-5 h-5 text-orange-600"></i></div>
                                @endif
                                <span class="font-medium text-gray-900">{{ ucwords(str_replace('_', ' ', $item->jenis_surat)) }}</span>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-gray-600 text-sm">{{ $item->created_at->format('d M Y H:i') }}</td>
                        <td class="px-6 py-4">
                            @if($item->status == 'pending')
                                <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-amber-100 text-amber-700">Menunggu</span>
                            @elseif($item->status == 'disetujui')
                                <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-green-100 text-green-700">Disetujui</span>
                            @else
                                <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-red-100 text-red-700">Ditolak</span>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="px-6 py-4 border-t border-gray-100">
                {{ $pengajuan->links() }}
            </div>
        </div>
    @endif
</div>
@endsection