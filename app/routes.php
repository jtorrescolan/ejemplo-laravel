<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/*Route::get('/', function()
{
	return View::make('hello');
});*/

/*Route::get('/', array('before'=>'cumpleanios',function(){
	return View::make('hello');
}));*/

Route::get('/','EjemploController@mostrarIndex');
Route::get('mensaje','EjemploController@mostrarMensaje');
Route::get('nombre/{nombre?}','EjemploController@mostrarNombre');

Route::controller('usuarios', 'UsuariosController');

Route::get('mivista1', function(){
	return View::make('vista1');
});

Route::get('hola', function(){
	return View::make('hola');
});

/*Route::get('nombre/{nombre?}', function($nombre=null){
	if($nombre != null){
		return "Su nombre es ".$nombre;
	}
	else{
		return "No tiene nombre :P";
	}
});

Route::get('user/{name?}', function($name=null){
	return $name;

})->where('name','[A-Za-z]+');

Route::get('agregar-usuario', function(){
	echo Form::open(array('url'=>'agregar','method'=>'post'));
	echo Form::label('nombre','Nombre: ');
	echo Form::text('nom');
	echo Form::submit('Enviar');
	echo Form::close();
});

Route::post('agregar', function(){
	$nombre = Input::get('nom');
	return 'Tu nombre es '.$nombre;
});*/