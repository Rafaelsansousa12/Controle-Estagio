<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaAlunos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos', function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('matricula');
            $table->string('nome');
            $table->string('cpf');
            $table->string('endereco');
            $table->string('telefone');
            $table->string('cod_curso');
            $table->string('ciclo');
        });

    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('alunos');
    }
}
