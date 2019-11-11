<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $table = 'alunos';
    public $timestamps = false;
    
    protected $fillable = ['matricula', 'nome', 'cpf', 'endereco', 'telefone', 'cod_curso'];

    public function curso(){
        return $his->belongsTo('App\Curso', 'cod_curso','cod_curso');
    }
};