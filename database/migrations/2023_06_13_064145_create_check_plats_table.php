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
        // status = 0 hitam
        // status = 1 putih
        Schema::create('check_plats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_plat');
            $table->foreign('id_plat')->references('id')->on('plats')->onDelete('cascade')->onUpdate('cascade');            
            $table->string('nama');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('check_plats');
    }
};
