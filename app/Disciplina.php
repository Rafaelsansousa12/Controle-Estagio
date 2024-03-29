<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    protected $table = 'disciplinas';
    
    protected $fillable=['nome', 'curso_id'];
    public $timestamps=false;

    public function curso(){
        return $this->belongsToMany(Curso::class);
    }
    
}
