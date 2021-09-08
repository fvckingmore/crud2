<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articulo;

class MainController extends Controller
{
	public function index() {
		return view('index')
		->with('articulos', Articulo::all());
	}
}
