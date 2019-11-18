<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $table = 'alunos';
    public $timestamps = false;
    
    protected $fillable = ['matricula', 'nome', 'cpf', 'endereco', 'telefone', 'curso_id'];

    public function curso(){
        return $this->belongsTo(Curso::class);
    }
};