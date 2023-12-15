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
        Schema::create('lowongan', function (Blueprint $table) {
            $table->increments('id_lowongan');
            $table->string('nisn');
            $table->unsignedInteger('id_admin');
            $table->unsignedInteger('id_perusahaan');
            $table->string('nama_loker');
            $table->string('syarat');
            $table->string('keahlian');
            $table->string('kualifikasi');
            $table->string('jamker');
            $table->string('gaji');
            $table->string('pendidikan');
            $table->string('tipe_pekerjaan');
            $table->date('tgl_post');
            $table->date('tgl_konfir');
            $table->enum('status',['0', 'Posting']);
            $table->foreign('nisn')->references('nisn')->on('alumni')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('id_admin')->references('id_admin')->on('admin')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('id_perusahaan')->references('id_perusahaan')->on('perusahaan')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lowongan');
    }
};
