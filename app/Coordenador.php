<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coordenador extends Model
{
    protected $table = 'coordenadores';
    public $timestamps = false;
    
    protected $fillable = ['matricula', 'nome','curso_id'];

    public function curso(){
        return $this->belongsToMany(Curso::class);
    }
};
