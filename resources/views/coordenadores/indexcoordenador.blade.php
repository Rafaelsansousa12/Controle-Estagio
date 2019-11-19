@extends('layout')

@section('cabecalho')
    Coordenadores
@endsection

@section('conteudo')

    @if(!empty($mensagem))
    <div class="alert alert-success">
    {{ $mensagem }}
    </div>
    @endif

    <a href="{{route('form-cadastrar-coordenador')}}" class="btn btn-dark mb-2">Novo Coordenador</a>

    <ul class="list-group"> 
    @foreach ($coordenadores as $coordenador)  
    <li class="list-group-item d-flex  justify-content-between align-items-center">

    <table>

    <tr>
    <th>Matricula:</th>
    <td>{{ $coordenador->matricula}}</td>
    </tr>

    <tr>
    <th >Nome:</th> 
    <td>{{ $coordenador->nome }}</td> 
    </tr>

    <tr>
    <th>Código Curso:</th>
    <td>{{ $coordenador->curso_id }}</td>
    </tr>

    </table>

    <span class="d-flex">
    <form method="get" action="/coordenadores/detalhes/{{ $coordenador->id }}">
         
    <button class="btn btn-info btn-sm mtr=l mr-2" >
        <i class="fas fa-edit"></i>
    </button>

    </form>   
   
    <form method="post" action="/coordenadores/{{ $coordenador->id }}" onsubmit="return confirm('Tem certeza que deseja excluir?')">
        
        @csrf
        @method('DELETE')
         
        <button class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
    </form>
    </span>
    </li>
    @endforeach
    </ul>

@endsection