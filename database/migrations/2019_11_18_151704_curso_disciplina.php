<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CursoDisciplina extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('curso_disciplina', function (Blueprint $table)
    {

        $table->integer('curso_id')->unsigned();
        $table->foreign('curso_id')->
            references('id')->
            on('cursos');
    
        $table->integer('disciplina_id')->unsigned();
        $table->foreign('disciplina_id')->
            references('id')->
            on('disciplinas');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('curso_disciplina');
    }
}
