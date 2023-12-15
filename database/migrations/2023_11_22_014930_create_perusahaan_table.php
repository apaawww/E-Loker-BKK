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
        Schema::create('perusahaan', function (Blueprint $table) {
            $table->increments('id_perusahaan');
            $table->string('nisn')->nullable();
            $table->unsignedInteger('id_admin')->nullable();
            $table->string('n_perusahaan');
            $table->string('kontak',13);
            $table->text('alamat');
            $table->text('deskripsi');
            $table->text('foto');
            $table->enum('status', ['0', 'Posting', 'Pending'])->default('0');
            $table->foreign('nisn')->references('nisn')->on('alumni')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('id_admin')->references('id_admin')->on('admin')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perusahaan');
    }
};
