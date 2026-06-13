<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class RiwayatController extends Controller
{
    public function index()
    {
        /** @var \App\Models\User $user */
        $user = Auth::user();
        $pengajuan = $user->pengajuanSurat()
            ->latest()
            ->paginate(10);

        return view('user.riwayat.index', compact('pengajuan'));
    }
}
