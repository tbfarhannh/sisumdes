<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nik'      => ['required', 'string', 'size:16', 'regex:/^[0-9]+$/', Rule::unique('users', 'nik')],
            'name'     => ['required', 'string', 'max:255'],
            'email'    => ['required', 'string', 'email', 'max:255', Rule::unique('users', 'email')],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ], [
            'nik.size'           => 'NIK harus 16 digit.',
            'nik.regex'          => 'NIK hanya boleh berisi angka.',
            'nik.unique'         => 'NIK sudah terdaftar.',
            'password.min'       => 'Kata sandi minimal 8 karakter.',
            'password.confirmed' => 'Konfirmasi kata sandi tidak cocok.',
        ]);

        $user = User::create([
            'nik'      => $validated['nik'],
            'name'     => $validated['name'],
            'email'    => $validated['email'],
            'password' => Hash::make($validated['password']),
            'role'     => 'user',
        ]);

        Auth::login($user);

        return redirect()->route('user.dashboard')
            ->with('success', 'Selamat datang! Silakan lengkapi profil Anda untuk dapat mengajukan surat.');
    }
}
