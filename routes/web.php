<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});
*/

Auth::routes();
//Route::get('/', 'MainController@index');
Route::get('/', 'MainController@index');
/*Route::prefix('articulo')->group(function() {

	Route::get('create', 'ArticuloController@create');
	Route::post('create', 'ArticuloController@add');
	Route::get('{id}/edit', 'ArticuloController@edit');
	Route::post('{id}/edit', 'ArticuloController@update');
	Route::post('delete', 'ArticuloController@delete');

});*/


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
