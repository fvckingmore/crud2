<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articulo;

class ArticuloController extends Controller
{
	public function create() {
		return view('articulo.create');
	}

	public function add(Request $request) {
		$articulo = new Articulo();
		$articulo->codigo = $request->codigo;
		$articulo->desc = $request->desc;
		$articulo->cantidad = $request->cantidad;
		$articulo->precio = $request->precio;
		$articulo->save();

		return redirect('/');
	}

	public function edit($id) {
		return view('articulo.edit')
		->with('articulo', Articulo::find($id));
	}

	public function update(Request $request, $id) {

		$articulo = Articulo::find($id);
		$articulo->codigo = $request->codigo;
		$articulo->desc = $request->desc;
		$articulo->cantidad = $request->cantidad;
		$articulo->precio = $request->precio;
		$articulo->save();

		return redirect('/');
	}

	public function delete(Request $request) {

		$articulo = Articulo::find($request->id);
		$articulo->delete();
		return redirect('/');
	}
	
}
