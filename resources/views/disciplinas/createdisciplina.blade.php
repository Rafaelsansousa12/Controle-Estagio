
@extends('layout')

@section('cabecalho') 

    Cadastrar Disciplina
@endsection

@section('conteudo')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

        <form method = "post" action="" class="">
            @csrf
            <div class="form-group">


                <label for="nome" class="">Nome:</label>
                <input type="text" class="form-control" name="nome" >

                <label for="curso_id" class="">Código Curso:</label>
                <input type="number" class="form-control" name="curso_id" >

            </div>
            <button class="btn btn-primary">Cadastrar</button>
        </form>

@endsection