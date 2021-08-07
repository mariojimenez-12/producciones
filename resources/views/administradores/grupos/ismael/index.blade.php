@extends('layouts.app')

@section('botones')
    <div class="container-fluid mt-2">
        <a href="{{ route('administradores.index') }}" class="btn btn-primary">
            <svg class="icono w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z"></path></svg>
            Regresar
        </a>
        <a href="{{ route('grupos.ismael.create') }}" class="btn btn-primary">
            <svg class="icono w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            Registrar nuevo artista Ismael
        </a>
    </div>
@endsection

@section('content') 
<h2 class="text-center mb-5 mt-5">Los consentidos del sierreño</h2>
<table class="table table-hover text-center">
    <thead class="bg-primary text-white text-center">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Posicion</th>
            <th>Imagen</th>
            <th>Historia</th>
            <th>Resumen</th>
            <th>Facebook</th>
            <th>Twitter</th>
            <th>Instagram</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody class="text-center">

        @foreach( $ismael as $grupo )
            <tr>
                <td>{{ $grupo->id }}</td>
                <td>{{ $grupo->nombre . " " . $grupo->apellido }}</td>
                <td>{{ $grupo->posicion }}</td>
                <td><img class="img-pequeña" src="/storage/{{ $grupo->imagen }}" alt=""></td>
                <td>
                    <div class="overflow-scroll text-left">
                        {!! $grupo->historia !!}
                    </div>
                </td>
                <td>
                    <div class="overflow-scroll text-left">
                        {!! $grupo->resumen !!}
                    </div>
                </td>
                <td>{{ $grupo->facebook }}</td>
                <td>{{ $grupo->twitter }}</td>
                <td>{{ $grupo->instagram }}</td>
                <td>
                    <eliminar-ismael
                    articulo-id="{{ $grupo->id }}"
                    ></eliminar-ismael>
                    <a class="btn btn-warning" href="{{ action('IsmaelController@edit', ['ismael' => $grupo->id]) }}">Actualizar</a>
                </td>
            </tr>
        @endforeach
        
    </tbody>
</table>
@endsection