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
        Schema::create('lugar', function (Blueprint $table) {
            
            $table->id('espacio_id');
            $table->string('tipo');
            $table->string('usuario'); 
            $table->boolean('disponible'); 
            $table->integer('cantidad_personas');  
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lugar');
    }
};
