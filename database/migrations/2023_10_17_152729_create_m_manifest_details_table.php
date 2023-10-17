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
        Schema::create('m_manifest_details', function (Blueprint $table) {
            $table->id('manifest_detail_id');
            $table->unsignedBigInteger('manifest_id');
            $table->unsignedBigInteger('resi_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_manifest_details');
    }
};
