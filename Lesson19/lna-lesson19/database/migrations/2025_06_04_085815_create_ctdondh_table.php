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
        Schema::create('ctdondh', function (Blueprint $table) {
            $table->string('SoDH');
            $table->string('Mavtu');
            $table->primary(['SoDH', 'Mavtu']);
            $table->integer('SLDat');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ctdondh');
    }
};
