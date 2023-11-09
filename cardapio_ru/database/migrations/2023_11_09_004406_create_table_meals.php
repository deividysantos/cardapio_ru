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
        Schema::create('meals', function (Blueprint $table) {
            $table->id('ID_MEAL');
            $table->foreignId('SALAD1', 255);
            $table->foreignId('SALAD2', 255);
            $table->foreignId('SALAD3', 255);
            $table->foreignId('MAIN_COUSE', 255);
            $table->foreignId('GARRISON', 255);
            $table->foreignId('VEGETARIAN', 255);
            $table->foreignId('DESSERT', 255);
            $table->foreignId('MEAL_DATE');
            $table->foreignId('CREATED_AT');

            $table->foreignId('ID_FOOD');
            $table->foreign('SALAD1')->references('ID_FOOD')->on('FOODS');
            $table->foreign('SALAD2')->references('ID_FOOD')->on('FOODS');
            $table->foreign('SALAD3')->references('ID_FOOD')->on('FOODS');
            $table->foreign('MAIN_COUSE')->references('ID_FOOD')->on('FOODS');
            $table->foreign('GARRISON')->references('ID_FOOD')->on('FOODS');
            $table->foreign('VEGETARIAN')->references('ID_FOOD')->on('FOODS');
            $table->foreign('DESSERT')->references('ID_FOOD')->on('FOODS');


            
            /*
                SALADA1
                SALADA2
                SALADA3
                P_PRINCIPAL
                GUARNICAO
                VEGETARIANO
                SOBREMESA
                DATA_REFEICAO
                DATA_LANCAMENTO
             */
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meals');
    }
};
