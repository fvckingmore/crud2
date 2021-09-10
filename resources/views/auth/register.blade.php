@extends('layout.base')

@section('contenido')
<div class="container">
	<div class="row">
		<div class="col-md-4 offset-md-4">
			<div class="login-form bg-light mt-4 p-4">
				<form action="{{route('register')}}" method="POST" class="row g-3">
					@csrf
					<h4 class="text-center">CRUD Registro</h4>
					<div class="col-12">
						<label>Nombre</label>
						<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Nombre" value="{{ old('name') }}" required autocomplete="name" autofocus>

						@error('name')
						<span class="invalid-feedback" role="alert">
							<strong>Error de nombre</strong>
						</span>
						@enderror
					</div>

					<div class="col-12">
						<label>Correo</label>
						<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Correo" value="{{ old('email') }}" required autocomplete="email">

								@error('email')
									<span class="invalid-feedback" role="alert">
										<strong>Error de correo</strong>
									</span>
								@enderror
					</div>

					<div class="col-12">
						<label>Usuario</label>
						<input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" placeholder="Usuario" value="{{ old('username') }}" required autocomplete="username" autofocus>

						@error('username')
						<span class="invalid-feedback" role="alert">
							<strong>Error de nombre</strong>
						</span>
						@enderror
					</div>

					<div class="col-12">
						<label>Contraseña</label>
						<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Contraseña" required autocomplete="new-password">

								@error('password')
									<span class="invalid-feedback" role="alert">
										<strong>Error de contraseña</strong>
									</span>
								@enderror
					</div>
					<div class="col-12">
						<label>Repita su contraseña</label>
						<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Repita contraseña" >
					</div>

					<div class="col-12 text-center">
						<button type="submit" class="btn btn-dark">Registrar</button>
					</div>
				</form>

			</div>
		</div>
	</div>
</div>
@endsection
