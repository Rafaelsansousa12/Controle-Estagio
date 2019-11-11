<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->bigIncrements('cod_curso');
            $table->string('sigla',5)->unique();
            $table->string('nome',100);
            //$table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('cursos');
    }
}
