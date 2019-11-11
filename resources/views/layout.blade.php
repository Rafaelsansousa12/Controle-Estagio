<!DOCTYPE html>
<html lang="en">

<head >
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/42ba2c0555.js" crossorigin="anonymous"></script>

    

    <title >Controle Estágios</title>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary"> 
  <a class="navbar-brand" href="/home">Home</a>
  <a class="navbar-brand" href="{{route('alunos')}}">Alunos</a>
  <a class="navbar-brand" href="{{route('alunos')}}">Coordenadores</a>
  <a class="navbar-brand" href="/cursos">Cursos</a>
</nav>
<div class="container" >
   
        <div class="jumbotron">
            <h1>@yield('cabecalho')</h1>
        </div>
</head>

<body>
          
    @yield('conteudo')
    </div>
</body>
</html>