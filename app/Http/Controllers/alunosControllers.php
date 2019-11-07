<?php

namespace App\Http\Controllers;

use App\Aluno;
use App\Http\Requests\StoreAluno;
use App\Http\Requests\AlunosFormRequest;

class alunosController extends Controller
    {

        public function home(){
            return view('alunos.home');
            
        }

        public function login(){
            return view('alunos.login');
            
        }

        public function details(StoreAluno $request){

            $alunos = Aluno::query()->where('id', $request->id)->get();       
            return view('alunos.detalhes', compact('alunos'));
            
        }

        public function index(StoreAluno $request){

            $mensagem = $request -> session()->get('mensagem');
            $alunos = Aluno::query()->orderBy('nome')->get(); 
           
            return view('alunos.index', compact('alunos', 'mensagem'));
        }

        public function create()
        {
            return view('alunos.create');
        }

       public function store(StoreAluno $request)
       {
           
            $matricula = $request->matricula;
            $nome = $request->nome;            
            $cpf = $request->cpf;
            $endereco = $request->endereco;
            $telefone = $request->telefone;    
            $cod_curso = $request->cod_curso;
            $ciclo = $request->ciclo;

            $aluno = Aluno::create($request->all());
            $request ->session()
                     ->flash(
                         'mensagem',
                         "Aluno cadastrado com sucesso!"
                     );

            return redirect('/alunos');
    
       }

       public function destroy(StoreAluno $request)
        {
            Aluno::destroy($request->id);

            $request ->session()
                     ->flash(
                         'mensagem',
                         "Aluno removido com sucesso!"
                     );

                return redirect('/alunos');
        }

        public function editaMatricula(int $id, StoreAluno $request)
        {
            $aluno = Aluno::find($id);
            $novaMatricula = $request->matricula;
            $aluno->matricula = $novaMatricula;
            $aluno->save();
        }

    }



