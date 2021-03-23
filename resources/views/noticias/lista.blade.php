@extends("layouts.user")
@section("titulo", "Noticias")
@section('contenido_principal')

    <section>
        <div id="line">
            <div class="dline"></div>
            <h1>Noticias</h1>
            <div class="dline"></div>
        </div>
        <div id="ourserv">
            @foreach($noticias as $noticia) 
                <article>
                    <h1>{{ $noticia->titulo }}</h1>
                    <img src="images/nf.png" alt="" />
                    <p>{{ $noticia->cuerpo }}</p>
                    <a href="{{route("noticias.detalles", $noticia->id)}}" class="rm">Leer mas</a>
                    <br><br><br>
                </article>
            @endforeach
        </div>
        {{-- <div id="sline">
            <div class="sdline"></div>
            <h1>Latest Projects</h1>
            <div class="sdline"></div>
        </div>
        <div id="latestp">
            <article>
                <h1>Lorem Ipsum Dolor Sit</h1>
                <img src="images/1s.jpg" alt="" />
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi commodo, ipsum sed pharetra gravida, orci magna rhoncus neque.</p>
                <a href="singlepost.html" class="rm">Read More</a>
            </article>
            <article>
                <h1>Lorem Ipsum Dolor Sit</h1>
                <img src="images/2s.jpg" alt="" />
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi commodo, ipsum sed pharetra gravida, orci magna rhoncus neque.</p>
                <a href="singlepost.html" class="rm">Read More</a>
            </article>
            <article>
                <h1>Lorem Ipsum Dolor Sit</h1>
                <img src="images/3s.jpg" alt="" />
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi commodo, ipsum sed pharetra gravida, orci magna rhoncus neque.</p>
                <a href="singlepost.html" class="rm">Read More</a>
            </article>
            <article class="lastarticle">
                <h1>Lorem Ipsum Dolor Sit</h1>
                <img src="images/4s.jpg" alt="" />
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi commodo, ipsum sed pharetra gravida, orci magna rhoncus neque.</p>
                <a href="singlepost.html" class="rm">Read More</a>
            </article>
        </div>--}}
    </section>				 
                                                        {{-- mio --}}
    {{-- <h1>Noticias</h1>
    @foreach($noticias as $noticia)
        <h3><a href="{{route("noticias.detalles", $noticia->id)}}">{{ $noticia->titulo }}</a></h3>
        <p>{{ $noticia->fecha }}</p>
        <p>{{ $noticia->autor }}</p>
        @endforeach --}}
@endsection