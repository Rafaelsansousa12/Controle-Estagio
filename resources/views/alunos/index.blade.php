@extends('layout')

@section('cabecalho')
    Alunos
@endsection

@section('conteudo')

    @if(!empty($mensagem))
    <div class="alert alert-success">
    {{ $mensagem }}
    </div>
    @endif

    <a href="{{route('form-cadastrar-aluno')}}" class="btn btn-dark mb-2">Novo Aluno</a>

    <ul class="list-group"> 
    @foreach ($alunos as $aluno)  
    <li class="list-group-item d-flex  justify-content-between align-items-center">
    
    <table>
    <tr>
    <th style="text-align:center">Matricula:</th> 
    <td>{{ $aluno->matricula }}</td> 
    </tr>

    <tr>
    <th>Nome:</th>
    <td>{{ $aluno->nome }}</td>
    </tr>

    </table>

    <form method="get" action="/alunos/detalhes/{{ $aluno->id }}">
         
    <button class="btn btn-info btn-sm mtr=l" >
        <i class="fas fa-edit"></i>
    </button>

    </form>   

    <form method="post" action="/alunos/{{ $aluno->id }}" onsubmit="return confirm('Tem certeza que deseja excluir?')">
        
        @csrf
        @method('DELETE')
         
        <button class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
    </form>
    
    </li>
    @endforeach
    </ul>

@endsection