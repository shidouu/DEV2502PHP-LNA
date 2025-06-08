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
        Schema::create('ctpnhap', function (Blueprint $table) {
            $table->string('SoPn');
            $table->string('Mavtu');
            $table->primary(['SoPn', 'Mavtu']);
            $table->integer('SLNhap');
            $table->float('DGNhap');
            $table->foreign('Mavtu')->references('Mavtu')->on('vattu');
            $table->foreign('SoPn')->references('SoPn')->on('pnhap');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ctpnhap');
    }
};