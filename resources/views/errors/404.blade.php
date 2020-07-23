@section('title', 'Error 404')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-12 col-lg-6">
			<img class="img-fluid mb-4" src="/img/404.svg">
		</div>
		<div class="col-12 col-lg-6">
			&iexcl;Ha ocurrido un error!<br>La página que buscas no existe o no se encuentra disponible en este momento.
			<a class="btn btn-lg btn-block btn-outline-primary" href="{{route('home')}}">Regresar al Inicio</a>
		</div>
	</div>
</div>
@endsection