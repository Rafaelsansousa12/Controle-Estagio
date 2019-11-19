<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table = 'cursos';
    
    protected $fillable=['id','sigla','nome'];
    public $timestamps=false;

    public function alunos(){
        return $this->hasMany(Aluno::class);
    }
  
    public function disciplinas()
    {
        return $this->hasMany(Disciplina::class);
    }

    public function coordenadores()
    {
        return $this->hasMany(Coordenador::class);
    }
        
}
