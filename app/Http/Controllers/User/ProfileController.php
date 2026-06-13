<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function edit()
    {
        /** @var \App\Models\User $user */
        $user = Auth::user();
        return view('user.profile-edit', compact('user'));
    }

    public function update(Request $request)
    {
        /** @var \App\Models\User $user */
        $user = Auth::user();

        $validated = $request->validate([
            'name'          => ['required', 'string', 'max:255'],
            'email'         => ['required', 'email', 'max:255', 'unique:users,email,' . $user->id],
            'tempat_lahir'  => ['required', 'string', 'max:100'],
            'tanggal_lahir' => ['required', 'date', 'before:today'],
            'jenis_kelamin' => ['required', 'in:Laki-laki,Perempuan'],
            'agama'         => ['required', 'string', 'max:50'],
            'pekerjaan'     => ['required', 'string', 'max:100'],
            'alamat'        => ['required', 'string'],
        ]);

        $user->update($validated);

        return redirect()->route('user.dashboard')
            ->with('success', 'Profil berhasil diperbarui. Anda sekarang dapat mengajukan surat.');
    }
}
