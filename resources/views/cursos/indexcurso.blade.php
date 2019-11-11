@extends('layout')

@section('cabecalho')
    Cursos
@endsection

@section('conteudo')

    @if(!empty($mensagem))
    <div class="alert alert-success">
    {{ $mensagem }}
    </div>
    @endif

    <a href="{{route('form-cadastrar-curso')}}" class="btn btn-dark mb-2">Novo Curso</a>

    <ul class="list-group"> 
    @foreach ($cursos as $curso)  
    <li class="list-group-item d-flex  justify-content-between align-items-center">
    
    <table>
    <tr>
    <th style="text-align:center">Código Curso:</th> 
    <td>{{ $curso->cod_curso }}</td> 
    </tr>

    <tr>
    <th>Nome:</th>
    <td>{{ $curso->nome }}</td>
    </tr>

    </table>

   

    <form method="post" action="/cursos/{{ $curso->id }}" onsubmit="return confirm('Tem certeza que deseja excluir?')">
        
        @csrf
        @method('DELETE')
         
        <button class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
    </form>
    
    </li>
    @endforeach
    </ul>

@endsection