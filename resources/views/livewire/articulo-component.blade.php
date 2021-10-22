<div>
	
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

						<th class="col-1">

							<button wire:click.prevent="openForm({{ 1 }}, {{ $articulo}})" class="btn btn-info" >Editar</button>
						</th>
						<th class="col-1">
							<button wire:click.prevent="delete({{ $articulo->id }})" class="btn btn-danger" >Eliminar</button>
						</th>
					</tr>
					@endforeach
					
				</tbody>
			</table>
		</div>
	</div>

	<div class="row justify-content-center">

		<div class="col-2 text-center">

			<button wire:click="openForm({{ 0 }})" class="btn btn-primary" >Añadir</button>
		</div>

		<div class="col-2 text-center">
			<form action="{{ url('logout') }}" method="POST">
				@csrf
				<button type="submit" class="btn btn-danger" >Salir</button>
			</form>

		</div>
	</div>
	<div class="pagination justify-content-center">
		{{ $articulos->links() }}
	</div>

	@include('livewire.create-articulo')
</div>