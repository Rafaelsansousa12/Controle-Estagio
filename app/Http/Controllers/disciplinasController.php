<?php

namespace App\Http\Controllers;

use App\Disciplina;
use App\Curso;
use App\Http\Requests\StoreDisciplina;
use App\Http\Requests\DisciplinaFormRequest;

class disciplinasController extends Controller
{
    public function index(StoreDisciplina $request){

        $mensagem = $request -> session()->get('mensagem');
        $disciplinas = Disciplina::query()->orderBy('nome')->get(); 
       
        return view('disciplinas.indexdisciplina', compact('disciplinas', 'mensagem'));
    }

    public function indexdisciplina2(int $id){

        $disciplinas = Curso::find($id)->disciplinas;

        return view('disciplinas.indexdisciplina2', compact('disciplinas'));
    }


    public function store(StoreDisciplina $request)
    {
        
  
         $nome = $request->nome;              
         $curso_id = $request->curso_id;
      

         $disciplina = Disciplina::create($request->all());
         $request ->session()
                  ->flash(
                      'mensagem',
                      "Disciplina cadastrada com sucesso!"
                  );

         return redirect('/disciplinas');
 
    }

    public function __construct(StoreDisciplina $request){
        $this->middleware('auth');
    }

    public function create()
    {
        return view('disciplinas.createdisciplina');
    }

}
