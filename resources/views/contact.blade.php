@extends('layout')

@section('title','Contact')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-12 col-lg-6 mx-auto">
			<form class="bg-white shadow rounded py-3 px-4" method="POST" action="{{route('messages.store')}}">
				<!--Directiva Blade que previene error 419, para poder asignar un token al form-->
				@csrf
				<h1 class="display-4"> @lang('Contact')</h1>
				<div class="form-group">
					<label for="name">Nombre</label>
					<input class="form-control bg-light @error('name') is-invalid @else border-0 @enderror" type="text" id="name" name="name" placeholder="Escribe tu nombre" value="{{old('name')}}">
					@error('name')
						<span class="invalid-feedback" role="alert">
							<strong>{{$message}}</strong>
						</span>
					@enderror
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input class="form-control bg-light @error('email') is-invalid @else border-0 @enderror" type="email" id="email" name="email" placeholder="Escribe tu email" value="{{old('email')}}">
					@error('email')
						<span class="invalid-feedback" role="alert">
							<strong>{{$message}}</strong>
						</span>
					@enderror
				</div>
				<div class="form-group">
					<label for="subject">Asunto</label>
					<input class="form-control bg-light @error('subject')is-invalid @else border-0 @enderror" type="text" id="subject" name="subject" placeholder="Escribe el asunto" value="{{old('subject')}}">
					@error('subject')
						<span class="invalid-feedback" role="alert">
							<strong>{{$message}}</strong>
						</span>
					@enderror
				</div>
				<div class="form-group">
					<label for="content">Mensaje</label>
					<textarea class="form-control bg-light @error('content') is-invalid @else border-0 @enderror" id="content" name="content" placeholder="Escribe el mensaje">{{old('content')}}</textarea>
					@error('content')
						<span class="invalid-feedback" role="alert">
							<strong>{{$message}}</strong>
						</span>
					@enderror
				</div>
				<button class=" btn btn-primary btn-lg btn-block">Enviar</button>
			</form>
		</div>
	</div>
</div>
@endsection