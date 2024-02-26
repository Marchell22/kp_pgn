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
        Schema::create('denah_keenams', function (Blueprint $table) {
            $table->id();
            $table->json('name'); // Kolom JSON untuk menyimpan nama 
            $table->json('value'); // Kolom JSON untuk menyimpan nilai
            $table->integer('value_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('denah_keenams');
    }
};
