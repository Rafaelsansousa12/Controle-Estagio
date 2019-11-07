<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Controle de Estágio</title>
</head>
<body>
    <div class="w-50 p-5" style="background-color: #eee; " >
        <div class="col-md-8">
            <div class="configdiv">
                <form method = "get" action="/home" class="">
                    @csrf
                    <div class="form-group">
                        <label for="nome" class="">Login:</label>
                        <input type="text" class="form-control" name="login" >

                        <label for="nome" class="">Senha:</label>
                        <input type="text" class="form-control" name="senha" >
                    </div>
                    <button class="btn btn-primary">Entrar</button>
                </form>
            </div>
        </div>
    </div>

</body>

