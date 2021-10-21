<div class="modal fade" id="articuloForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">

				<h5 class="modal-title" id="exampleModalLabel">
					@if($formType == 0)
					Añadir
					@elseif($formType = 1)
					Editar
					@endif
				</h5>
			</div>
			<div class="modal-body">

				<form wire:submit.prevent="submit" method="POST">
					@csrf
					<div class="mb-3">
						<label class="form-label col-4">Codigo</label>
						<input type="text" class="form-control col-8" id="codigo" wire:model="codigo" >
						<span class="text-danger">
						    @error('codigo') {{ $message }}   @enderror
						</span>
					</div>

					<div class="mb-3">
						<label class="form-label">Descripcion</label>
						<input type="text" class="form-control" id="desc" wire:model="desc" >
						<span class="text-danger">
						    @error('desc') {{ $message }}   @enderror
						</span>
					</div>

					<div class="mb-3">
						<label class="form-label">Cantidad</label>
						<input type="number" class="form-control" id="cantidad" wire:model="cantidad" >
						<span class="text-danger">
						    @error('cantidad') {{ $message }}   @enderror
						</span>
					</div>

					<div class="mb-3">
						<label class="form-label">Precio</label>
						<input type="number" class="form-control" id="precio" wire:model="precio" >
						<span class="text-danger">
						    @error('precio') {{ $message }}   @enderror
						</span>
					</div>

{{-- 					<div class="text-center">
						<button type="submit" class="btn btn-primary">Guardar</button>
						<a href="{{url('/')}}" class="btn btn-danger">Cancelar</a>
					</div> --}}
				</form>

			</div>
			<div class="modal-footer">
				<button wire:click.prevent="closeForm" type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
				<button wire:click.prevent="store" type="button" class="btn btn-primary">Añadir</button>
			</div>
		</div>
	</div>
</div>

<script>

	window.addEventListener('openForm', event => {
		$("#articuloForm").modal('show');
	});

	window.addEventListener('closeForm', event => {
		$("#articuloForm").modal('hide');
	});


</script>