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
        Schema::create('breakfasts', function (Blueprint $table) {
            $table->id('ID_BREAKFAST');
            $table->foreign('BREAD1')->references('ID_FOOD')->on('FOODS');
            $table->foreign('BREAD2')->references('ID_FOOD')->on('FOODS');
            $table->foreign('BUTTER')->references('ID_FOOD')->on('FOODS');
            $table->foreign('COFFEE')->references('ID_FOOD')->on('FOODS');
            $table->foreign('MILK')->references('ID_FOOD')->on('FOODS');
            $table->foreign('TEA')->references('ID_FOOD')->on('FOODS');
            $table->foreign('FRUIT')->references('ID_FOOD')->on('FOODS');
            $table->foreign('PROTEIN')->references('ID_FOOD')->on('FOODS');
            $table->foreign('TEA')->references('ID_FOOD')->on('FOODS');
            $table->date('MEAL_DATE');
            $table->date('CREATED_AT');

            /*
            ID_CAFE
            PAO
            PAO2
            MANTEIGA
            CAFE
            LEITE
            CHA_MATE
            FRUTA
            PROTEIRA
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
        Schema::dropIfExists('breakfasts');
    }
};
