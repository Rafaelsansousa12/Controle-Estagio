<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table = 'cursos';
    
    protected $fillable=['cod_curso','sigla','nome'];
    public $timestamps=false;

    public function alunos(){
        return $this->hasMany('App\Aluno', 'cod_curso');
    }
}
