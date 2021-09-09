@extends('layout.base')
@section('contenido')

<div class="row justify-content-center">
	<div class="col-4 ">
		<form action="{{url('articulo/create')}}" method="POST">
			@csrf
			<div class="mb-3">
				<label class="form-label col-4">Codigo</label>
				<input type="text" class="form-control col-8" id="codigo" name="codigo" >
			</div>

			<div class="mb-3">
				<label class="form-label">Descripcion</label>
				<input type="text" class="form-control" id="desc" name="desc" >
			</div>
			
			<div class="mb-3">
				<label class="form-label">Cantidad</label>
				<input type="text" class="form-control" id="cantidad" name="cantidad" >
			</div>

			<div class="mb-3">
				<label class="form-label">Precio</label>
				<input type="number" class="form-control" id="precio" name="precio" >
			</div>

			<button type="submit" class="btn btn-primary">Guardar</button>
			<a href="{{url('/')}}" class="btn btn-danger">Cancelar</a>
		</form>
	</div>
</div>

@endsection