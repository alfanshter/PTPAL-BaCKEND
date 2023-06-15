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
        Schema::create('plats', function (Blueprint $table) {
            $table->id();
            $table->string('aktivitas');
            $table->float('berat');
            $table->date('t_start');
            $table->date('t_finish');
            $table->string('m_lalu')->nullable();
            $table->string('m_skr')->nullable();
            $table->float('sisa')->nullable();
            $table->string('keterangan')->nullable();
            $table->integer('status')->default(0);
            $table->string('check')->nullable();
            $table->string('user_edit')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plats');
    }
};
