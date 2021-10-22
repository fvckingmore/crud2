<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articulo;

class MainController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');
    }
	
	public function index() {
		return view('index');
	}
}
