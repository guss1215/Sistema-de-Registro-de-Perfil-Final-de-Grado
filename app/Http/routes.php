<?php

//dd(env('APP_VERSION'));

/*Route::get('/', function() {
	return 'hola mundo';
});*/

/*Route::get('usuarios/{nombre?}', function($nombre='Gustavo') {
	return $nombre;

})->where('nombre', '\d+');
*/

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'perfilespfController@create');
Route::post('/contact', 'perfilespfController@store');
Route::get('/perfilespf', 'perfilespfController@index');

Route::get('/signin', 'signinController@create');
//Route::post('/signin', 'signinController@store');

