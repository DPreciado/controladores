<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="css/default/default.css" type="text/css" media="screen" />
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
		<script src="js/jquery.nivo.slider.pack.js" type="text/javascript"></script>
        <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <title>El chismoso</title>
    </head>
	<body id="home">
		<div id="wrapper">
		
			<!--__--__--__--__--__--  L O G O  &   N A V    B A R --__--___--__--__--__-->
			<header>
				<div id="logo">
				<h1>El chismoso <span id="iisrt"><span id="ii">II</span>  <span id="srt">MX</span></span></h1>
				<div id="tagline">
					<h2>Pa que le cuentes a la comadre!</h2>
				</div>
				</div>
				<nav>
					{{-- <ul>
						<li><a href="index.html" id="homenav">Noticias</a></li>
						<li><a href="blog.html" id="blognav">Blog</a></li>
						<li><a href="fullwidth.html" id="fullwidthnav">Full width</a></li>
						<li><a href="contact.html">Contact</a></li>
						<li><a href="#">About</a></li>
					</ul> --}}
				</nav>
			</header>
			
			<!--__--__--__--__--  T H E    S L I D E R --__--__--__--___--__--__--__-->
			<div class="slider-wrapper theme-default" >
				<div id="slider" class="nivoSlider">
                    @foreach($noticias as $noticia) 
					    <a href="{{route("noticias.detalles", $noticia->id)}}"><img src="{{ $noticia->foto }}" alt="" title="{{ $noticia->titulo }}" /></a>
                    @endforeach
				</div>
			</div>
			<script type="text/javascript">
			$(window).load(function() {
				$('#slider').nivoSlider({pauseTime: 6000,});
			});
			</script>
			
			<!--__--__--__--__--  M A I N   C O N T E N T  --__--__--__--___--__--__-->
			<div>
                @yield("contenido_principal")
            </div>
			<!--__--__--__--__--  T H E    F O O T E R --__--__--__--___--__--__--__-->
			<footer>
				<p>Copyright &copy; 2021 El chismoso.</strong> Todos los derechos reservados</p>
			</footer>
		</div>			
	</body>
</html>
		
		
			
    
    