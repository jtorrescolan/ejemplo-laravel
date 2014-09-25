<?php
	class EjemploController extends BaseController
	{
		public function mostrarIndex(){
			return View::make('hello');
		}

		public function mostrarMensaje(){
			return 'Esto es un mensaje desde el controlador';
		}

		public function mostrarNombre($nombre=null){
			return 'Tu nombre es '.$nombre;
		}
	}
?>