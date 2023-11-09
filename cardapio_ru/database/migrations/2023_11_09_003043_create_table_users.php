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
        Schema::create('users', function (Blueprint $table) {
            $table->id('ID_USER');
            $table->string('LOGIN');
            $table->id('PASSWORD');
            $table->foreign('ID_COMPANY')->references('ID_COMPANY')->on('COMPANIES');
            $table->id('ACESS_LEVEL');

            /*
            ID_USUARIO
            LOGIN
            SENHA
            ID_EMPRESA
            NIVEL_ACESSO
            */
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
