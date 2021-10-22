<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Articulo;
use Livewire\WithPagination;

class ArticuloComponent extends Component
{
	use WithPagination;

	public $formType;
	public $art, $codigo, $desc, $cantidad, $precio;
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

	public function openForm($type, Articulo $articulo = null) {
		$this->formType = $type;
		$this->art = $articulo->id;
		$this->codigo = $articulo->codigo;
		$this->desc = $articulo->desc;
		$this->cantidad = $articulo->cantidad;
		$this->precio = $articulo->precio;
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

		if($this->formType == 0) {
			Articulo::create($val);

		} else if($this->formType == 1) {
			Articulo::find($this->art)->update($val);
		}

		$this->closeForm();
	}

	public function delete($id) {
		Articulo::destroy($id);		
	}

	public function logout() {
		return redirect('logout');
	}

}
