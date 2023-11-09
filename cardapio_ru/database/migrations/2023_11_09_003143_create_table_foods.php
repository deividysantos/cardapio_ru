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
        Schema::create('foods', function (Blueprint $table) {
            $table->id('ID_FOOD');
            $table->string('NAME', 255);
            $table->string('LACTOSE', 1);
            $table->string('GLUTEN', 1);
            $table->foreignId('ID_COMPANY');
            $table->foreign('ID_COMPANY')->references('ID_COMPANY')->on('COMPANIES');

            /*
            ID_COMIDA
            NOME
            LACTOSE
            GLUTEN            
            */
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('foods');
    }
};
