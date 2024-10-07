@extends('layout.app')
@section('title')
<title>Detalles de actividad</title>
@stop
@section('rutas')
<li>
    <a href="/actividades" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Actividades</a>
  </li>
  {{-- <li>
    <a href="/crear-actividad" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Agregar Actividad</a>
  </li> --}}
@stop
@section('content')
    {{-- @livewire('detalle-actividad') --}}
    <livewire:detalle-actividad :id="$id" />
@stop
