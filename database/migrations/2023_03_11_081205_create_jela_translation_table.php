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

        Schema::create('jela_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('jela_id');
            $table->string('locale')->index();
        
            $table->string('naziv');
            $table->text('opis');
        
            $table->unique(['jela_id', 'locale']);
            $table->foreign('jela_id')->references('id')->on('jela')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jela_translation');
    }
};
