@extends('layouts.master')

@section('titulo')
	Bienvenido a mi pagina
@stop

@section('cabecera')
	@parent
	<link rel="stylesheet" type="text/css" href="estilos2.css">
@stop

@section('contenido')
	Esto es el contenido
@stop

@section('pie')
	Esto es el pie de la pagina
@stop