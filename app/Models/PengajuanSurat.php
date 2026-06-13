<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PengajuanSurat extends Model
{
    protected $table = 'pengajuan_surat';

    protected $fillable = [
        'user_id',
        'jenis_surat',
        'status',
        'data_form',
    ];

    protected function casts(): array
    {
        return [
            'data_form' => 'array',
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
