<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<script type="text/javascript" src="/js/app.js"></script>
</head>
<body>
	<div id="app" class="d-flex flex-column h-screen justify-content-between">
		<header>
			<!--Pagina que contiene lo que se repite en todas las paginas-->
			@include('partials.nav')

			@include('partials.session-status')
		</header>
		<main class="py-4">
			<!--Parte donde se agrega contenido dinámico-->
			@yield('content')
		</main>
		<footer class="bg-white text-center text-black-50 py-3">
			{{config('app.name')}} | Copyright @ {{date('Y')}}
		</footer>
	</div>
</body>
</html>