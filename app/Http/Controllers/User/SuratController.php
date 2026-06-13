<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\PengajuanSurat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SuratController extends Controller
{
    public function create()
    {
        /** @var \App\Models\User $user */
        $user = Auth::user();
        if (!$user->isProfilLengkap()) {
            return redirect()->route('user.profile.edit')
                ->with('error', 'Lengkapi profil terlebih dahulu sebelum mengajukan surat.');
        }

        return view('user.pengajuan.create');
    }

    public function formUsaha()
    {
        /** @var \App\Models\User $user */
        $user = Auth::user();
        if (!$user->isProfilLengkap()) {
            return redirect()->route('user.profile.edit')
                ->with('error', 'Lengkapi profil terlebih dahulu.');
        }

        return view('user.pengajuan.form-usaha');
    }

    public function formKehilangan()
    {
        /** @var \App\Models\User $user */
        $user = Auth::user();
        if (!$user->isProfilLengkap()) {
            return redirect()->route('user.profile.edit')
                ->with('error', 'Lengkapi profil terlebih dahulu.');
        }

        return view('user.pengajuan.form-kehilangan');
    }

    public function formTidakMampu()
    {
        /** @var \App\Models\User $user */
        $user = Auth::user();
        if (!$user->isProfilLengkap()) {
            return redirect()->route('user.profile.edit')
                ->with('error', 'Lengkapi profil terlebih dahulu.');
        }

        return view('user.pengajuan.form-tidak-mampu');
    }

    public function storeUsaha(Request $request)
    {
        /** @var \App\Models\User $user */
        $user = Auth::user();
        $validated = $request->validate([
            'nama_usaha' => ['required', 'string', 'max:255'],
            'jenis_usaha' => ['required', 'string', 'max:255'],
            'alamat_usaha' => ['required', 'string'],
        ]);

        PengajuanSurat::create([
            'user_id' => $user->id,
            'jenis_surat' => 'usaha',
            'status' => 'pending',
            'data_form' => array_merge($validated, $this->ambilDataPribadi($user)),
        ]);

        return redirect()->route('user.riwayat.index')
            ->with('success', 'Pengajuan Surat Keterangan Usaha berhasil dikirim.');
    }

    public function storeKehilangan(Request $request)
    {
        /** @var \App\Models\User $user */
        $user = Auth::user();
        $validated = $request->validate([
            'barang_hilang' => ['required', 'string', 'max:255'],
            'keterangan' => ['required', 'string'],
        ]);

        PengajuanSurat::create([
            'user_id' => $user->id,
            'jenis_surat' => 'kehilangan',
            'status' => 'pending',
            'data_form' => array_merge($validated, $this->ambilDataPribadi($user)),
        ]);

        return redirect()->route('user.riwayat.index')
            ->with('success', 'Pengajuan Surat Keterangan Kehilangan berhasil dikirim.');
    }

    public function storeTidakMampu(Request $request)
    {
        /** @var \App\Models\User $user */
        $user = Auth::user();
        $validated = $request->validate([
            'keperluan' => ['required', 'string'],
        ]);

        PengajuanSurat::create([
            'user_id' => $user->id,
            'jenis_surat' => 'tidak_mampu',
            'status' => 'pending',
            'data_form' => array_merge($validated, $this->ambilDataPribadi($user)),
        ]);

        return redirect()->route('user.riwayat.index')
            ->with('success', 'Pengajuan Surat Keterangan Tidak Mampu berhasil dikirim.');
    }

    private function ambilDataPribadi($user): array
    {
        return [
            'nama' => $user->name,
            'nik' => $user->nik,
            'tempat_lahir' => $user->tempat_lahir,
            'tanggal_lahir' => $user->tanggal_lahir ? $user->tanggal_lahir->format('d-m-Y') : '',
            'jenis_kelamin' => $user->jenis_kelamin,
            'agama' => $user->agama,
            'pekerjaan' => $user->pekerjaan,
            'alamat' => $user->alamat,
        ];
    }
}
