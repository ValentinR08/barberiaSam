<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style2.css')}}">
    <title>Contacto</title>
</head>
<body class="bg-dark">
    <header
        <div class="name">
            <img src="{{asset('img/barber5.png')}}" alt="" srcset="">
        </div>
        <nav>
            <ul class="menu">
                <li><a  href="{{route('formulario.index')}}">Home</a> </li>
                <li><a href="{{route('formulario.nosotros')}}">Nosotros</a> </li>
                <li><a href="{{route('formulario.servicios')}}">Servicios</a> </li>
                <li><a href="{{route('formulario.create')}}">Contactanos</a> </li>
            </ul>
        </nav>
    </header>

    <div class="container">
    <div class="cont-formulario bg-black.bg-gradient p-5 rounded-2">
        <h2 class="">Contacto</h2>
        <div id="mensaje" class="mensaje">
        </div>
        <form id="formulario" action="{{route('formulario.store')}}" method="POST">
            @csrf
            <div class="mb-5">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
            </div>
            <div class="mb-5">
                <label for="apellido" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido">
            </div>
            <div class="mb-5">
                    <label for="edad" class="form-label">Edad</label>
                    <input type="number" class="form-control" id="edad" name="edad" placeholder="Edad">
            </div>
            <div class="mb-5">
                <label for="telefono" class="form-label">Telefono</label>
                <input type="number" class="form-control" id="telefono" name="telefono" placeholder="Telefono">
            </div>
            <div class="mb-5">
                <label for="comentario" class="form-label">Comentario</label>
                <textarea class="form-control" id="comentario" name="comentario" placeholder="Comentario"></textarea>
            </div>
            <button type="submit" id="boton"  class="btn btn-primary">Enviar</button>
        </form>
    </div>
</div>

    <script src="{{asset('js/script.js')}}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>