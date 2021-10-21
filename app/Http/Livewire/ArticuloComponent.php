<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Articulo;
use Livewire\WithPagination;

class ArticuloComponent extends Component
{
	use WithPagination;

	protected $paginationTheme = 'bootstrap';
	public $formType;
	public $codigo, $desc, $cantidad, $precio;

	public function render()
	{
		return view('livewire.articulo-component')
		->with('articulos', Articulo::paginate(5))
		;
	}

	public function openForm($type) {
		$this->formType = $type;
		$this->codigo = "";
		$this->desc = "";
		$this->cantidad = "";
		$this->precio = "";
		$this->dispatchBrowserEvent('openForm');
	}

	public function closeForm() {
		$this->codigo = "";
		$this->desc = "";
		$this->cantidad = "";
		$this->precio = "";
		$this->dispatchBrowserEvent('closeForm');
	}

}
