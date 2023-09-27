@extends('layouts.plantilla')

@section('title', 'Actualizar Registro')

@section('content')
    <h1 class="text-xl text-slate-900 dark:text-white mt-5 text-base font-medium tracking-tight">En esta página podrá editar un registro</h1>

    <form action="{{route('practicas.update', $practica)}}" method="POST" class="w-96">
        @csrf
        @method('put')
    <div class="space-y-12">
        <div class="border-b border-gray-900/10 pb-12">
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-4">
                  <label for="codigo" class="block text-sm font-medium leading-6 text-gray-900 dark:text-white">Código</label>
                  <div class="mt-2">
                    <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                      <input type="number" name="codigo" id="codigo" autocomplete="codigo" class="block flex-1 border-0 bg-transparent py-1.5 pl-2 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6 dark:text-white" placeholder="Ingresar código" value="{{$practica->codigo}}">
                    </div>
                  </div>
                </div>

                <div class="sm:col-span-4">
                    <label for="id_estudiante" class="block text-sm font-medium leading-6 text-gray-900 dark:text-white">Estudiante</label>
                    <div class="mt-2">
                      <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                        <input type="number" name="id_estudiante" id="id_estudiante" autocomplete="id_estudiante" class="block flex-1 border-0 bg-transparent py-1.5 pl-2 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6 dark:text-white" placeholder="Ingresar ID del Estudiante" value="{{$practica->id_estudiante}}">
                      </div>
                    </div>
                </div>

                <div class="sm:col-span-4">
                    <label for="id_docente" class="block text-sm font-medium leading-6 text-gray-900 dark:text-white">Docente</label>
                    <div class="mt-2">
                      <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                        <input type="number" name="id_docente" id="id_docente" autocomplete="id_docente" class="block flex-1 border-0 bg-transparent py-1.5 pl-2 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6 dark:text-white" placeholder="Ingresar ID del Docente" value="{{$practica->id_docente}}">
                      </div>
                    </div>
                </div>

                <div class="sm:col-span-4">
                    <label for="id_empresa" class="block text-sm font-medium leading-6 text-gray-900 dark:text-white">Empresa</label>
                    <div class="mt-2">
                      <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                        <input type="number" name="id_empresa" id="id_empresa" autocomplete="id_empresa" class="block flex-1 border-0 bg-transparent py-1.5 pl-2 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6 dark:text-white" placeholder="Ingresar ID de la Empresa" value="{{$practica->id_empresa}}">
                      </div>
                    </div>
                </div>

                <div class="sm:col-span-4">
                    <label for="id_etapa" class="block text-sm font-medium leading-6 text-gray-900 dark:text-white">Etapa</label>
                    <div class="mt-2">
                      <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                        <input type="number" name="id_etapa" id="id_etapa" autocomplete="id_etapa" class="block flex-1 border-0 bg-transparent py-1.5 pl-2 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6 dark:text-white" placeholder="Ingresar ID de Etapa" value="{{$practica->id_etapa}}">
                      </div>
                    </div>
                </div>

                <div class="col-span-full">
                    <label for="titulo" class="block text-sm font-medium leading-6 text-gray-900 dark:text-white">Título</label>
                    <div class="mt-2">
                      <textarea id="titulo" name="titulo" rows="5" class="block w-full rounded-md border-0 py-1.5 pl-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Escriba el título">{{$practica->titulo}}</textarea>
                    </div>
                </div>

                
            </div>
        </div>
    </div>
    <div class="mt-6 flex items-center justify-end gap-x-6">
        <a href="{{route('practicas.index')}}" class="font-bold px-3 py-2 text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900 dark:text-slate-400">Cancelar</a>
        <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Actualizar Registro</button>
    </div>
    </form>
@endsection