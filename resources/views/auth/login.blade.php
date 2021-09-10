{{-- @extends('layouts.app') --}}
@extends('layout.base')

@section('contenido')
<div class="container">
	<div class="row">
		<div class="col-md-4 offset-md-4">
			<div class="login-form bg-light mt-4 p-4">
				<form action="{{route('login')}}" method="POST" class="row g-3">
					@csrf
					<h4 class="text-center">CRUD Login</h4>
					<div class="col-12">
						<label>Usuario</label>
						<input type="text" name="username" class="form-control" placeholder="Username">
					</div>
					<div class="col-12">
						<label>Contraseña</label>
						<input type="password" name="password" class="form-control" placeholder="Password">
					</div>

					<div class="col-12 text-center">
						<button type="submit" class="btn btn-dark">Login</button>
					</div>
				</form>
				<hr class="mt-4">
				<div class="col-12">
					<p class="text-center mb-0">Have not account yet? <a href="{{route('register')}}">Signup</a></p>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
