@extends('layouts.app')

@section('botones')
    <a href="{{ route('galeria.index') }}" class="btn btn-primary">
        <svg class="icono w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z"></path></svg>
        Regresar
    </a>
@endsection

@section('content')
    <div>
        <form action="{{ route('galeria.store') }}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="form-group">
                <label for="imagen">Imagen</label>
                <input type="file" class="form-control @error('imagen') is-invalid @enderror" name="imagen" id="imagen">

                @error('imagen')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="descripcion">Descripción de la imagen</label>
                <textarea name="descripcion" id="descripcion" class="form-control @error('descripcion') is-invalid @enderror"></textarea>
                @error('descripcion')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <input class="btn btn-success" type="submit" value="Subir imagen">
        </form>
    </div>
@endsection
