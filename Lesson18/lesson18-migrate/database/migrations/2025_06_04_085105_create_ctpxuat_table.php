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
        Schema::create('ctpxuat', function (Blueprint $table) {
            $table->string('Sopx');
            $table->string('Mavtu');
            $table->primary(['Sopx', 'Mavtu']);
            $table->integer('SLXuat');
            $table->float('DGXuat');
            $table->foreign('Mavtu')->references('Mavtu')->on('vattu');
            $table->foreign('Sopx')->references('Sopx')->on('pxuat');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ctpxuat');
    }
};
