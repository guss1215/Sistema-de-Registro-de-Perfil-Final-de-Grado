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
Route::get('/contact', 'PagesController@contact');



