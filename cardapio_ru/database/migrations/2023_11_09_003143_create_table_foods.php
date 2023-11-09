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
            $table->id('NAME');
            $table->id('LACTOSE');
            $table->id('GLUTEN');
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
