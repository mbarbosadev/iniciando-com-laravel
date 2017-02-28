<?php

use Illuminate\Http\Request;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/minharota', function() {
	return view('hello');
});


Route::get('/client', function() {
	return view('client');
});

Route::get('/client/{id}/{name?}', function(Request $request, $id, $name = 'Visitante') {
// 	return view('client-name', [
// 		'id'=>$id,
// 		'name'=>$name
// 	]);

	return view('client-name')
		->with('id', $id)
		->with('name', $name);
	
});
	

Route::post('/client', function(Request $request) {
	return $request->get('value');
})->name('client.store');
	


// Route::get('/minharota/{nome?}', function($nome = 'Visitante') {
// 	return "Olá $nome";
// });