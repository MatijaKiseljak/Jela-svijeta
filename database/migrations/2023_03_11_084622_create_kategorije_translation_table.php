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
        Schema::create('kategorije_translation', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kategorije_id');
            $table->string('locale')->index();
        
            $table->string('naziv');
        
            $table->unique(['kategorije_id', 'locale']);
            $table->foreign('kategorije_id')->references('id')->on('kategorije')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kategorije_translation');
    }
};
