<?php
	
	class UsuariosController extends BaseController{

		public function getIndex(){
			return 'Aqui podemos listar los usuarios de la base de datos';
		}

		public function getRegistrar(){
			echo 'Aqui podemos registrar a los usuarios: <br>';
			echo Form::open(array('url'=>'usuarios/crear', 'method'=>'post'));
			echo Form::label('name', 'Nombre: ');
			echo Form::text('nombre');
			echo Form::submit('Registrar');
			echo Form::close();
		}

		public function postCrear(){
			$nombre=Input::get('nombre');
			return 'Usuario registrado: '.$nombre;
		}

		public function getPerfil(){
			return 'Aqui podemos listar los perfiles del usuario';
		}

		public function getVista1(){
			//return View::make('vista1')->with('nombre', 'jorge');
			return Redirect::to('usuarios/vista2')->with('mensaje','error al acceder');
		}

		public function getVista2(){
			return View::make('vista2', array('nombre'=>'jorge', 'apellido'=>'torres', 'telefono'=>'996514942'));
		}
	}
?>