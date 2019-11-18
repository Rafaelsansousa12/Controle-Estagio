<?php

namespace App\Http\Controllers;

use App\Curso;
use App\Aluno;
use App\Disciplina;

use App\Http\Requests\StoreCurso;
use App\Http\Requests\StoreAluno;
use App\Http\Requests\StoreDisciplina;
use App\Http\Requests\CursosFormRequest;

class cursosController extends Controller
{
   
    public function index(StoreCurso $request){

        $mensagem = $request -> session()->get('mensagem');
        $cursos = Curso::query()->orderBy('nome')->get(); 
       
        return view('cursos.indexcurso', compact('cursos', 'mensagem'));
    }

    public function indexcurso2(int $id){

        $cursos = Disciplinas::find($id)->cursos;

        return view('cursos.indexcurso2', compact('cursos'));
    }

    public function create()
    {
        return view('cursos.createcursos');
    }

   public function store(StoreCurso $request)
   {
        
        $cod_curso = $request->cod_curso;
        $nome = $request->nome;            
        $sigla = $request->sigla;   
        


        $curso = Curso::create($request->all());
        $request ->session()
                 ->flash(
                     'mensagem',
                     "Curso cadastrado com sucesso!"
                 );

        return redirect('/cursos');

   }

   public function destroy(StoreCurso $request)
        {
            Curso::destroy($request->cod_curso);

            $request ->session()
                     ->flash(
                         'mensagem',
                         "Curso removido com sucesso!"
                     );

                return redirect('/cursos');
        }


}
