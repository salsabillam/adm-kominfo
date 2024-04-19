<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('beritas', function (Blueprint $table) {
            $table->id();
            $table->string('judul', 85);
            $table->foreignId('kategori_berita_id')->index()->constrained();
            $table->text('isi');
            $table->string('gambar', 255);
            $table->date('tgl');
            $table->enum('status', ['0', '1']);
            $table->foreignId('user_id')->index()->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beritas');
    }
};
