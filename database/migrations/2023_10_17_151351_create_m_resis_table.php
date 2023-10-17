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
        Schema::create('m_resis', function (Blueprint $table) {
            $table->id('resi_id');
            $table->string('no_resi');
            $table->unsignedBigInteger('asal_id')->nullable();
            $table->unsignedBigInteger('tujuan_id')->nullable();
            $table->unsignedBigInteger('pembayaran_id')->nullable();
            $table->unsignedBigInteger('layanan_id')->nullable();
            $table->unsignedBigInteger('tipe_kiriman_id')->nullable();
            $table->unsignedBigInteger('penanganan_id')->nullable();
            $table->integer('status_cod')->nullable();
            $table->integer('asuransi')->nullable();
            $table->integer('paking')->nullable();
            $table->integer('berat')->nullable();
            $table->integer('jumlah')->nullable();
            $table->string('pengirim');
            $table->text('deskripsi');
            $table->string('penerima');
            $table->text('keterangan_penerima');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_resis');
    }
};
