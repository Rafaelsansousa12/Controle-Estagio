<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoordenadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coordenadores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('matricula');
            $table->string('nome');
            $table->integer('curso_id');

            $table->foreign('curso_id')
            ->references('id')
            ->on('cursos');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coordenadores');
    }
}
