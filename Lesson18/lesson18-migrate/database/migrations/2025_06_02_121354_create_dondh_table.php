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
        Schema::create('dondh', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            $table->string('SoDH')->primary();
            $table->date('NgayDH');
            $table->string('MaNCC');
            $table->foreign('MaNCC')->references('MaNCC')->on('nhacc');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dondh');
    }
};