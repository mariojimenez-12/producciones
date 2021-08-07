@extends('welcome')

@section('seccion')
<div class="mt-5">.</div>
   
<section class="mt-5">
    <div class="container">
        <div class="grid-column-2">
            <div>
                <img class="img-fluid" src="{{ asset("/storage/$grupo1->imagen") }}" alt="Imagen artista">
            </div>
            <div class="mt-3 ml-3">
                <h2>Hola, me llamo {{ $grupo1->nombre }}</h2>
                <div class="linea"></div>
                <div class="m-2">
                    {!! $grupo1->historia !!}
                </div>
                <h3 class="mt-2">Informacion detallada</h3>
                <div class="m-2">
                    {!! $grupo1->resumen !!}
                </div>
                <p>Mi nombre completo: <span class="text-primary ml-3">{{ $grupo1->nombre . " " . $grupo1->apellido }}</span></p>
                <p>Mi profesion: <span class="text-primary ml-3">{{ $grupo1->posicion }}</span></p>
                <p>Nacionalidad: <span class="text-primary ml-3">Mexicano</span></p>
                <p>Redes sociales:</p>
                <a href="{{ $grupo1->facebook }}" class="btn btn-info text-white">Facebook</a>
                <a href="{{ $grupo1->instagram }}" class="btn btn-pink text-white">Instagram</a>
            </div>
        </div>
    </div>
</section>
@endsection

