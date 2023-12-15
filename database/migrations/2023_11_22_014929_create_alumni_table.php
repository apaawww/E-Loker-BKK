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
        Schema::create('alumni', function (Blueprint $table) {
            $table->string('nisn');
            $table->string('nama');
            $table->date('ttl');
            $table->enum('jk',['L','P']);
            $table->string('thn_angkatan');
            $table->text('ktp')->nullable();
            $table->text('ijazah')->nullable();
            $table->text('transkip_n')->nullable();
            $table->text('skck')->nullable();
            $table->text('kartu_kuning')->nullable();
            $table->text('sks')->nullable();
            $table->text('alamat');
            $table->string('kontak',13);
            $table->text('foto')->nullable();
            $table->string('password');
            $table->primary('nisn');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumni');
    }
};
