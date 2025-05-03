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
        Schema::create('instruktur_d0223306_a', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('keahlian');
            $table->timestamps();
        });

        Schema::create('profil_instruktur_d0223306_a', function (Blueprint $table) {
            $table->id();
            $table->foreignId('instruktur_id')->unique()->constrained('instruktur_d0223306_a')->onDelete('cascade');
            $table->text('biografi');
            $table->string('linkedin')->nullable();
            $table->timestamps();
        });

        Schema::create('kelas_d0223306_a', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->foreignId('instruktur_id')->constrained('instruktur_d0223306_a')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('peserta_kelas_d0223306_a', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kelas_id')->constrained('kelas_d0223306_a')->onDelete('cascade');
            $table->string('nama_peserta');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('peserta_kelas_d0223306_a');
        Schema::dropIfExists('kelas_d0223306_a');
        Schema::dropIfExists('profil_instruktur_d0223306_a');
        Schema::dropIfExists('instruktur_d0223306_a');
    }

    
};
