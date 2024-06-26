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
        Schema::create('g_g_s', function (Blueprint $table) {
            $table->id();
            $table -> string('isim');
            $table -> integer('yas');
            $table -> enum('cinsiyet',['0','1']);
            $table -> date('dogum_tarihi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('g_g_s');
    }
};
