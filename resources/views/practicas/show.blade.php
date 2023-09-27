@extends('layouts.plantilla')

@section('title', 'Practica' . $practica->titulo)

@section('content')
    <h1 class="text-slate-900 dark:text-white mt-5 text-base font-medium tracking-tight">Se encuentra en el registro: {{$practica->titulo}}</h1>
    <p class="text-sm font-medium text-slate-900  dark:text-slate-400"><strong>Código: {{$practica->codigo}}</strong></p>
    <nav class="flex justify-center space-x-4">
        <a href="{{route('practicas.index')}}" class="font-bold px-3 py-2 text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900 dark:text-slate-400">Volver a Prácticas</a>
        <a href="{{route('practicas.edit', $practica)}}" class="font-bold px-3 py-2 text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900 dark:text-slate-400">Editar Registro</a>
        <a href="{{route('practicas.destroy', $practica)}}" class="font-bold px-3 py-2 text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900 dark:text-slate-400">Eliminar Registro</a>
    </nav>
@endsection 