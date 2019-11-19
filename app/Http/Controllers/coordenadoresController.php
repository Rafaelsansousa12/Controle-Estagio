<?php

namespace App\Http\Controllers;

use App\Coordenador;
use App\Curso;
use App\Http\Requests\StoreCoordenador;
use App\Http\Requests\CoordenadorFormRequest;

class coordenadoresController extends Controller
    {

        public function indexcoordenador2(int $id){

            $coordenadores = Curso::find($id)->coordenadores;

            return view('coordenadores.indexcoordenador2', compact('coordenadores'));

        }


        public function index(StoreCoordenador $request){

            $mensagem = $request -> session()->get('mensagem');
            $coordenadores = Coordenador::query()->orderBy('nome')->get(); 
           
            return view('coordenadores.indexcoordenador', compact('coordenadores', 'mensagem'));
        }

        public function create()
        {
            return view('coordenadores.createcoordenador');
        }

       public function store(StoreCoordenador $request)
       {
           
            $matricula = $request->matricula; 
            $nome = $request->nome;                
            $curso_id = $request->curso_id;

            $coordenador = Coordenador::create($request->all());
            $request ->session()
                     ->flash(
                         'mensagem',
                         "Coordenador cadastrado com sucesso!"
                     );

            return redirect('/coordenadores');
    
       }

       public function __construct(StoreCoordenador $request){
           $this->middleware('auth');
       }

       public function destroy(StoreCoordenador $request)
        {
            Aluno::destroy($request->id);

            $request ->session()
                     ->flash(
                         'mensagem',
                         "Coordenador removido com sucesso!"
                     );

                return redirect('/coordenadores');
        }


    }



