@extends('layouts.plantilla')

@section('title', 'Practica' . $practica->titulo)

@section('content')
    <h1 class="text-slate-900 dark:text-white mt-5 text-base font-medium tracking-tight">Se encuentra en el registro: {{$practica->titulo}}</h1>

    <a href="{{route('practicas.index')}}" class="text-slate-900 dark:text-white mt-5 text-base font-medium tracking-tight hover:bg-gray-400">Volver a Prácticas</a>
    <br>
    <a href="{{route('practicas.edit', $practica)}}" class="text-slate-900 dark:text-white mt-5 text-base font-medium tracking-tight hover:bg-gray-400">Editar Registro</a>


    <p class="text-sm font-medium text-slate-900  dark:text-slate-400"><strong>Código: {{$practica->codigo}}</strong></p>
@endsection 