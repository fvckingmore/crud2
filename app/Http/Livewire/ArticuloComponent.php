<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Articulo;
use Livewire\WithPagination;

class ArticuloComponent extends Component
{
	use WithPagination;

	public $formType;
	public $codigo, $desc, $cantidad, $precio;
	protected $paginationTheme = 'bootstrap';
	protected $rules = [
		'codigo' => 'required', 
		'desc' => 'required', 
		'cantidad' => 'required', 
		'precio' => 'required', 
	];

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

	public function store() {
		$val = $this->validate();
		Articulo::create($val);
		$this->closeForm();
	}

	public function delete($id) {
		Articulo::destroy($id);		
	}

}
