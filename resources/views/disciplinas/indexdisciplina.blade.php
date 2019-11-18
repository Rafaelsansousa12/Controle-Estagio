@extends('layout')

@section('cabecalho')
    Disciplinas
@endsection

@section('conteudo')

    @if(!empty($mensagem))
    <div class="alert alert-success">
    {{ $mensagem }}
    </div>
    @endif

    <a href="{{route('form-cadastrar-disciplina')}}" class="btn btn-dark mb-2">Nova Disciplina</a>

    <ul class="list-group"> 
    @foreach ($disciplinas as $disciplina)  
    <li class="list-group-item d-flex  justify-content-between align-items-center">
    
    <table>
    <tr>
    <th style="text-align:center">Código:</th> 
    <td>{{ $disciplina->id}}</td> 
    </tr>

    <tr>
    <th>Nome:</th>
    <td>{{ $disciplina->nome }}</td>
    </tr>

    </table>

    <span class="d-flex">

    <a href="/disciplinas/{{ $disciplina->id}}/cursos" class="btn btn-info btn-sm mtr=3 mr-2" >
        <i class="fas fa-external-link-alt"> Cursos</i>
    </a>


    <form method="post" action="/disciplina/{{ $disciplina->id }}" onsubmit="return confirm('Tem certeza que deseja excluir?')">

        @csrf
        @method('DELETE')
         
        <button class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
    </form>
    </span>
    
    </li>
    @endforeach
    </ul>

@endsection