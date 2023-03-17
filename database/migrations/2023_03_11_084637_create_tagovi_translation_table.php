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
        Schema::create('tagovi_translation', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tagovi_id');
            $table->string('locale')->index();
        
            $table->string('naziv');
        
            $table->unique(['tagovi_id', 'locale']);
            $table->foreign('tagovi_id')->references('id')->on('tagovi')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tagovi_translation');
    }
};
