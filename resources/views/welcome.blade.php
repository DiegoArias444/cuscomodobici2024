@extends('layouts.app')
@section('titulo','Mis priductos')
@section('contenido')
    <h1>Liesta de productos</h1>
    <ul>
        @foreach($productos as $producto)
        <li>
            {{$producto->nombre}} - Precio: {{$producto->precio}}
        </li>
        @endforeach
    </ul>
@endsection