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
        Schema::create('m_manifests', function (Blueprint $table) {
            $table->id('manifest_id');
            $table->string('code_manifest');
            $table->string('tanggal_manifest');
            $table->string('tanggal_cetak');
            $table->string('asal');
            $table->string('tujuan');
            $table->unsignedInteger('user_id');
            $table->text('keterangan');
            $table->integer('total_koli');
            $table->integer('berat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_manifests');
    }
};
