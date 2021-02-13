<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Confirmar eliminación</title>
</head>
<body>
    <a href="{{ route("admin.noticias.index") }}">Volver a lista de noticias</a>
    <h1>Cinfirmar eliminacion de noticia: {{ $noticia->id }}</h1>
    <p>¿Estás seguro de eliminar la noticia {{$noticia->id }}</p>
    <form method="POST" action="{{ route("admin.noticias.destroy", $noticia->id) }}">
        @csrf
        @method("delete")
        <a href="{{ route("admin.noticias.index") }}"><button type="button">Cancelar</button></a>
        <button type="submint">Confirmar</button>
    </form>
</body>
</html>