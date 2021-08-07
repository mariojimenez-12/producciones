@extends('layouts.app')

@section('botones')
    <a href="{{ route('administradores.index') }}" class="btn btn-primary">Regresar</a>
@endsection

@section('content')
    <section class="container-fluid mt-5">
        <h2>Boletin</h2>
        <table class="table table-hover text-center">
            <thead>
                <tr class="bg-primary text-white">
                    <th>#</th>
                    <th>Correo</th>
                    <th>Creado el</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($boletines as $boletin)
                    <tr>
                        <td>{{ $boletin->id }}</td>
                        <td>{{ $boletin->email }}</td>
                        <td>{{ $boletin->created_at }}</td>
                        <td>
                            <eliminar-boletin
                                articulo-id="{{ $boletin->id }}"
                            ></eliminar-boletin>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
            <div class="col-12 mt-4 justify-content-center d-flex">
                {{ $boletines->links() }}
            </div>
    </section>
@endsection