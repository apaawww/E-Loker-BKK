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
        Schema::create('lamaran', function (Blueprint $table) {
            $table->increments('id_lamaran');
            $table->string('nisn');
            $table->unsignedInteger('id_lowongan');
            $table->text('surat_lamaran');
            $table->text('cv');
            $table->foreign('nisn')->references('nisn')->on('alumni')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('id_lowongan')->references('id_lowongan')->on('lowongan')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lamaran');
    }
};
