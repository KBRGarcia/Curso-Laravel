@extends('layouts.plantilla')

@section('title', 'Curso ' . $curso->name)
    
@section('content')
    
    {{-- Gracias a blade se puede utilizar variables mucho mas fácil sin la necesidad de utilizar código php --}}
    <h1>Bienvenido al Curso: {{$curso->name}}</h1>

    <a href="{{route('cursos.index')}}">Volver a cursos</a>

    <p><strong>Categoria: </strong>{{$curso->category}}</p>

    <p>{{$curso->description}}</p>

@endsection