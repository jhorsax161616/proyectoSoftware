@extends('layouts.plantilla')

@section('title', 'Practicas')

@section('content')
    <h1 class="text-slate-900 dark:text-white mt-5 text-base font-medium tracking-tight">Bienvenido a la Gestion de Prácticas Preprofesionales</h1>

    <a href="{{route('practicas.create')}}" class="text-slate-900 dark:text-white mt-5 text-base font-medium tracking-tight hover:bg-gray-400">Nuevo Registro</a>

    <ul role="list" class="p-6 divide-y divide-slate-200">
        @foreach ($practicas as $practica)
            <li class="flex py-4 first:pt-0 last:pb-0">
                <a href="{{route('practicas.show', $practica->id)}}" class="text-sm font-medium text-slate-900  dark:text-slate-400 visited:text-purple-600 hover:bg-gray-400">{{$practica->titulo}}</a>
            </li>
        @endforeach
    </ul>

    {{$practicas->links()}}
@endsection