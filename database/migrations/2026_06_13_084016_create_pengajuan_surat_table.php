<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pengajuan_surat', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->enum('jenis_surat', ['usaha', 'kehilangan', 'tidak_mampu']);
            $table->enum('status', ['pending', 'disetujui', 'ditolak'])->default('pending');
            $table->json('data_form'); // Data yang diisi user (termasuk snapshot data pribadi)
            $table->string('file_surat')->nullable(); // Path PDF nanti
            $table->text('catatan_admin')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pengajuan_surat');
    }
};
