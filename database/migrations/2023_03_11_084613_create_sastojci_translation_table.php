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
        Schema::create('sastojci_translation', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sastojci_id');
            $table->string('locale')->index();
        
            $table->string('naziv');
        
            $table->unique(['sastojci_id', 'locale']);
            $table->foreign('sastojci_id')->references('id')->on('sastojci')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sastojci_translation');
    }
};
