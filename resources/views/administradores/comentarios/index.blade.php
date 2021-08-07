@extends('layouts.app')

@section('botones')
    <a href="{{ route('administradores.index') }}" class="btn btn-primary">
        <svg class="icono w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z"></path></svg>
        Regresar
    </a>
@endsection

@section('content')
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
                    <th>Acciones</th>
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
                        <td>
                            <eliminar-comentarios
                            articulo-id="{{ $comentario->id }}"
                            ></eliminar-comentarios>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
            <div class="col-12 mt-4 justify-content-center d-flex">
                {{ $comentarios->links() }}
            </div>
    </section>
@endsection