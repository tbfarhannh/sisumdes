<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'nik',
        'role',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'agama',
        'pekerjaan',
        'alamat',
        'avatar',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'tanggal_lahir' => 'date',
        ];
    }

    /**
     * Cek apakah profil sudah lengkap (minimal field wajib untuk pengajuan surat terisi).
     */
    public function isProfilLengkap(): bool
    {
        return $this->tempat_lahir
            && $this->tanggal_lahir
            && $this->jenis_kelamin
            && $this->agama
            && $this->pekerjaan
            && $this->alamat;
    }

    // di App\Models\User
    public function pengajuanSurat()
    {
        return $this->hasMany(PengajuanSurat::class);
    }
}
