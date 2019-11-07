
@extends('layout')

@section('cabecalho') 

    Controle Estágio
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
                <label for="nome" class="">Matricula:</label>
                <input type="text" class="form-control" name="matricula" >

                <label for="nome" class="">Nome:</label>
                <input type="text" class="form-control" name="nome" >

                <label for="nome" class="">Cpf:</label>
                <input type="text" class="form-control" name="cpf" >

                <label for="nome" class="">Endereço:</label>
                <input type="text" class="form-control" name="endereco" >

                <label for="nome" class="">Telefone:</label>
                <input type="text" class="form-control" name="telefone" >

                <label for="nome" class="">Curso:</label>
                <input type="text" class="form-control" name="cod_curso" >

                <label for="nome" class="">Ciclo:</label>
                <input type="text" class="form-control" name="ciclo" >
            </div>
            <button class="btn btn-primary">Cadastrar</button>
        </form>

@endsection