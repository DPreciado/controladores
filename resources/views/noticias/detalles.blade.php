@extends("layouts.details")
@section("titulo", "Detalles")
@section('contenido_principal')


    <a href="{{route("noticias")}}"><button> Volver a noticias</button></a>
    @if($noticia != NULL)
        <h1>{{ $noticia->titulo }}</h1>
        <h1>{{ $noticia->autor }} - {{ $noticia->fecha }}</h1>
        @if($noticia->foto != NULL)
            <img src="{{ $noticia->foto }}">
        @endif
    <p>{{ $noticia->cuerpo }}</p>
    @else
        <h1>Lo sentimos no se encontró la noticia que buscas</h1>
    @endif

@endsection