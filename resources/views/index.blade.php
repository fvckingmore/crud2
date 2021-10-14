@extends('layout.base')
@section('contenido')


<div class="row justify-content-center">

	<div class="col-8">

		<table class="table">
			<thead>
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Codigo</th>
					<th scope="col">Descripcion</th>
					<th scope="col">Cantidad</th>
					<th scope="col">Precio</th>
					<th scope="col"></th>
					<th scope="col"></th>
				</tr>
			</thead>
			<tbody>
				@foreach($articulos as $articulo)
				<tr>
					<th>{{$articulo->id}}</th>
					<th>{{$articulo->codigo}}</th>
					<th>{{$articulo->desc}}</th>
					<th>{{$articulo->cantidad}}</th>
					<th>{{$articulo->precio}}</th>

					@if(@Auth::user()->hasRole('admin'))
					<th class="col-1">

						<a href="{{url('articulo/'.$articulo->id.'/edit')}}" class="btn btn-info">Editar</a>
					</th>
					<th class="col-1">
						<form action="{{url('articulo/delete')}}" method="POST">
							@csrf
							<input type="hidden" id="id" name="id" value="{{$articulo->id}}">
							<button type="submit" class="btn btn-danger">Eliminar</button>
						</form>
					</th>
					@endif
				</tr>
				@endforeach
				
			</tbody>
		</table>
	</div>
</div>

<div class="row justify-content-center">

	@if(@Auth::user()->hasRole('admin'))
	<div class="col-2">

		<a href="{{url('/articulo/create')}}" class="btn btn-primary">Añadir</a>
	</div>
	@endif

	<div class="col-2">
		<form action="{{url('logout')}}" method="POST">
			@csrf
			<button type="submit" class="btn btn-danger">Cerrar Sesion</button>
		</form>
	</div>
</div>

@endsection