<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
<body class="bg-light">

    <div class="container shadow bg-white">
        <div class="row">
            <div class="col-sm-12">
                <h1>
                ...Cliente...
            </h1>
        </div>
        <div class="col-sm-12">
            <a href="{{ route ('clientes.create') }}" class="btn btn-link">Crear Cliente</a>
            <a href="btn btn-link">Lista de clientes</a>
        </div>
        <div class="col-sm-12">
            @yield('contenido')
        </div>
    </div>
</div>
</body>
</html>