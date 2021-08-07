@extends('layouts.app')

@section('botones')
    <div class="container-fluid mt-2">
        <a href="{{ route('reservaciones.index') }}" class="btn btn-primary mt-3 m-md-0">
            <svg class="icono w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
            Ver todas las reservaciones</a>
        <a href="{{ route('grupos.consentidos.index') }}" class="btn btn-primary mt-3 m-md-0">
            <svg class="icono w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
            Ver artistas consentidos</a>
        <a href="{{ route('grupos.ismael.index') }}" class="btn btn-primary mt-3 m-md-0">
            <svg class="icono w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
            Ver artistas ismael</a>
        <a href="{{ route('galeria.index') }}" class="btn btn-primary mt-3 m-md-0">
            <svg class="icono w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
            Ver toda la galeria</a>
        <a href="{{ route('comentarios.index') }}" class="btn btn-primary mt-3 m-md-0">
            <svg class="icono w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
            Ver todos los comentarios</a>
        <a href="{{ route('boletin.index') }}" class="btn btn-primary mt-3 m-md-0">
            <svg class="icono w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"></path></svg>
            Ver todas las suscripciones</a>
    </div>
@endsection

@section('content')

<section class="container-fluid mt-5">
    <div class="bg-light p-3 row row-cols-1 row-cols-md-2">

        @foreach ($administradores as $administrador)
            <div class="col">
                <div class="grid-column-2">
                    <div>
                        <img class="img-fluid rounded" src="/storage/{{ $administrador->imagen }}" alt="Imagen Administrador">
                    </div>
                    
                    <div class=" ml-1 text-start">
                        <p>Nombre: {{ $administrador->name }}</p>
                        <p>Correo: {{ $administrador->email }}</p>
                        <p>Telefono: </p>
                        <p>Facebook: <a class="btn btn-info text-white" href="{{ $administrador->facebook }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-facebook" width="25" height="25" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="#ffffff" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
                              </svg>
                            Facebook
                        </a></p>
                        <p>Instagram: <a class="btn btn-pink text-white" href="{{ $administrador->instagram }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-instagram" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <rect x="4" y="4" width="16" height="16" rx="4" />
                                <circle cx="12" cy="12" r="3" />
                                <line x1="16.5" y1="7.5" x2="16.5" y2="7.501" />
                              </svg>
                            Instagram
                        </a></p>
                        <p>Creado el: {{ $administrador->created_at }}</p>
                        <p>Actualizado el: {{ $administrador->updated_at }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>

<section class="container-fluid mt-5">
    <table class="table table-hover text-center">
        <h2>Eventos</h2>
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
                <th>Fecha del evento</th>
                <th>Servicio</th>
                <th>Grupo musical</th>
                <th>Creado el</th>
            </tr>
        </thead>
        <tbody>
            @foreach( $eventos as $evento )
                <tr>
                    <td> {{ $evento->id }} </td>
                    <td>{{ $evento->nombre . " " . $evento->apellido}}</td>
                    <td>{{ $evento->telefono1 }}</td>
                    <td>{{ $evento->telefono2 }}</td>
                    <td class="text-left">{{ $evento->domicilio }}</td>
                    <td class="text-left">{{ $evento->referencias }}</td>
                    <td class="text-left">{{ $evento->colonia }}</td>
                    <td>{{ $evento->codigo_postal }}</td>
                    <td>{{ $evento->horas }}</td>
                    <td>
                        @php
                            $fecha = $evento->fecha
                        @endphp
                        <fecha-componentes fecha="{{ $fecha }}"></fecha-componentes>
                    </td>
                    <td>{{ $evento->servicios->servicio }}</td>
                    <td class="text-left">{{ $evento->grupos->grupo }}</td>
                    <td>
                        @php
                            $fecha_creado = $evento->created_at
                        @endphp
                        <fecha-componentes fecha="{{ $fecha_creado }}"></fecha-componentes>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</section>

<section class="container-fluid mt-5">
    <h2>Los consentidos del sierreño</h2>
    <div class="row row-cols-1 row-cols-md-2">
        @foreach ($grupo1 as $grupo)
            <div class="grid-column-2 col">
                <div class="mr-2">
                    <img class="img-fluid" src="/storage/{{ $grupo->imagen }}" alt="">
                </div>
                <div>
                    <h3>{{ $grupo->nombre . " " . $grupo->apellido}}</h3>
                    <p>{{ $grupo->posicion }}</p>
                    <p>{!! $grupo->resumen !!}</p>
                    <p>{{ $grupo->facebook }}</p>
                    <p>{{ $grupo->twitter }}</p>
                    <p>{{ $grupo->instagram }}</p>
                </div>
            </div>
        @endforeach
    </div>
</section>

<section class="container-fluid mt-5">
    <h2>Ismael y los elegidos</h2>
    <div class="row row-cols-1 row-cols-md-2">
        @foreach ($grupo2 as $grupo)
            <div class="grid-column-2 col">
                <div class="mr-1">
                    <img class="img-fluid" src="/storage/{{ $grupo->imagen }}" alt="">
                </div>
                <div>
                    <h3>{{ $grupo->nombre . " " . $grupo->apellido}}</h3>
                    <p>{{ $grupo->posicion }}</p>
                    <p>{!! $grupo->resumen !!}</p>
                    <p>{{ $grupo->facebook }}</p>
                    <p>{{ $grupo->twitter }}</p>
                    <p>{{ $grupo->instagram }}</p>
                </div>
            </div>
        @endforeach
    </div>
</section>

<section class="container-fluid mt-5">
    <h2>Comentarios</h2>
    <table class="table table-hover text-center">
        <thead>
            <tr class="bg-primary text-white">
                <th>#</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Correo</th>
                <th>Comentario</th>
                <th>Creado el</th>
            </tr>
        </thead>
        <tbody>
            @foreach($comentarios as $comentario)
                <tr>
                    <td>{{ $comentario->id }}</td>
                    <td>{{ $comentario->nombre }}</td>
                    <td>{{ $comentario->apellido }}</td>
                    <td>{{ $comentario->email }}</td>
                    <td class="text-left">{{ $comentario->comentario }}</td>
                    <td>
                        @php
                            $fecha = $comentario->created_at
                        @endphp
                        <fecha-componentes fecha="{{ $fecha }}"></fecha-componentes>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</section>

<section class="container-fluid mt-5">
    <h2>Boletin</h2>
    <table class="table table-hover text-center">
        <thead>
            <tr class="bg-primary text-white">
                <th>#</th>
                <th>Correo</th>
                <th>Registrado el</th>
            </tr>
        </thead>
        <tbody>
            @foreach($boletines as $boletin)
                <tr>
                    <td>{{ $boletin->id }}</td>
                    <td>{{ $boletin->email }}</td>
                    <td>
                        @php
                            $fecha = $boletin->created_at
                        @endphp
                        <fecha-componentes fecha="{{ $fecha }}"></fecha-componentes>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</section>

@endsection

