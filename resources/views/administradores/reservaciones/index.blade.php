@extends('layouts.app')

@section('botones')
    <div class="d-flex p-3">
        <a class="btn btn-primary mr-3" href="{{ route('administradores.index') }}">
            <svg class="icono w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z"></path></svg>
            Regresar
        </a>
        <a href="{{ route('reservaciones.create') }}" class="btn btn-primary mr-3">
            <svg class="icono w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
            Registrar nuevo evento manualmente
        </a>
    </div>
@endsection

@section('content')
    <table class="table table-hover text-center">
        <thead>
            <tr class="bg-primary text-white">
                <th>#</th>
                <th>Nombre</th>
                <th>Telefono 1</th>
                <th>Telefono 2</th>
                <th>Domicilio</th>
                <th>Referencias</th>
                <th>Colonia</th>
                <th>Codigo Postal</th>
                <th>Horas</th>
                <th>Fecha</th>
                <th>Servicio</th>
                <th>Grupo musical</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach( $reservaciones as $reservacion )
                <tr>
                    <td> {{ $reservacion->id }} </td>
                    <td>{{ $reservacion->nombre . " " . $reservacion->apellido}}</td>
                    <td>{{ $reservacion->telefono1 }}</td>
                    <td>{{ $reservacion->telefono2 }}</td>
                    <td class="text-left">{{ $reservacion->domicilio }}</td>
                    <td class="text-left">{{ $reservacion->referencias }}</td>
                    <td class="text-left">{{ $reservacion->colonia }}</td>
                    <td>{{ $reservacion->codigo_postal }}</td>
                    <td>{{ $reservacion->horas }}</td>
                    <td>{{ $reservacion->fecha }}</td>
                    <td>{{ $reservacion->servicios_id }}</td>
                    <td class="text-left">{{ $reservacion->grupos_id }}</td>
                    <td>
                        <eliminar-articulo
                            articulo-id="{{ $reservacion->id }}"
                        ></eliminar-articulo>
                        <a class="btn btn-warning" href="{{ action('ReservacionController@edit', ['reservacion' => $reservacion->id]) }}">Actualizar</a>                
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection