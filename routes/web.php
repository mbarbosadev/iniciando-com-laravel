<?php


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

Route::group(['prefix'=>'admin', 'as'=>'admin.'], function() {
	Route::get('client', 'ClientsController@create');
	Route::post('client', 'ClientsController@store')->name('client.store');
});


Route::group(['prefix'=>'', 'as'=>'site.'], function() {
	Route::get('client', 'SiteClientsController@create');
	Route::post('client', 'SiteClientsController@store')->name('client.store');
});
	

/*
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
		->with('name', $name)
		->with('conteudo', 'Teste');
	
});
	

Route::post('/client', function(Request $request) {
	return $request->get('value');
})->name('client.store');
	

Route::get('/if-for', function() {
	return view('if-for');
});

*/

