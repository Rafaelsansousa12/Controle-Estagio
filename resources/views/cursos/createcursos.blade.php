
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

                <label for="nome" class="">Sigla:</label>
                <input type="text" class="form-control" name="sigla" >

                <label for="nome" class="">Nome:</label>
                <input type="text" class="form-control" name="nome" >

            </div>
            <button class="btn btn-primary">Cadastrar</button>
        </form>

@endsection