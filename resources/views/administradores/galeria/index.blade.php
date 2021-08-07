@extends('layouts.app')

@section('botones')
    <a href="{{ route('administradores.index') }}" class="btn btn-primary">
        <svg class="icono w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z"></path></svg>
        Regresar
    </a>
    <a href="{{ route('galeria.create') }}" class="btn btn-primary">
        <svg class="icono w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
        Subir imagen
    </a>
@endsection

@section('content')
    <div class="container-fluid galeria">
            <h2>Galeria</h2>
            <div class="grid-galeria-imagenes">
                @foreach ($galeria as $galeria)
                    <div class="m-2">
                        <img src="/storage/{{ $galeria->imagen }}" alt="{{ $galeria->descripcion }}" class="img img-fluid">
                        
                        <eliminar-registro
                            registro-id="{{ $galeria->id }}"
                        ></eliminar-registro>
                        
                    </div>
                @endforeach
            </div>
    </div>
    <div class="container-img">
        <img src="" alt="" class="img-show">
        <i class='bx bx-x'></i>
        <p class="copy"></p>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/galeria.js') }}"></script>
@endsection