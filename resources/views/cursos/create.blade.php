@extends('layouts.plantilla')

@section('title', 'Cursos Create')
    
@section('content')
    <h1>Aquí crearas tu lista de cursos</h1>

    <a href="{{route('cursos.index')}}">Volver a cursos</a>
@endsection