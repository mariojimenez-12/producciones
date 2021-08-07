@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.css" integrity="sha512-CWdvnJD7uGtuypLLe5rLU3eUAkbzBR3Bm1SFPEaRfvXXI2v2H5Y0057EMTzNuGGRIznt8+128QIDQ8RqmHbAdg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('botones')
    <a href="{{ route('grupos.consentidos.index') }}" class="btn btn-primary">
        <svg class="icono w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z"></path></svg>
        Regresar
    </a>
@endsection

@section('content')
    <h2>Actualizar artista</h2>


    <div class="row justifi-content-center mt-5">
        <div class="col-md-8">
            <form action="{{ route('grupos.consentidos.update', ['consentido' => $consentido->id]) }}" enctype="multipart/form-data" method="POST">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ $consentido->nombre }}">

                    @error('nombre')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="apellido">Apellido</label>
                    <input type="text" name="apellido" id="apellido" class="form-control @error('apellido') is-invalid @enderror" value="{{ $consentido->apellido }}">

                    @error('apellido')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="posicion">posicion</label>
                    <input type="text" name="posicion" id="posicion" class="form-control @error('posicion') is-invalid @enderror" value="{{ $consentido->posicion }}">

                    @error('posicion')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="imagen">Imagen</label>

                    <input type="file" id="imagen" class="form-control @error('imagen') is-invalid @enderror" name="imagen">

                    @error('imagen')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mt-4 mb-4">
                    <p>Imagen actual:</p>
                    <img src="/storage/{{ $consentido->imagen }}" style="width: 300px;" alt="Imagen Artista">
                </div>

                <div class="form-group">
                    <label for="historia">Historia</label>

                    <input id="historia" type="hidden" name="historia" value="{{ $consentido->historia }}">

                    <trix-editor class="form-control @error('historia') is-invalid @enderror" input="historia"></trix-editor>

                    @error('historia')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="resumen">Resumen</label>

                    <input id="resumen" type="hidden" name="resumen" value="{{ $consentido->resumen }}">

                    <trix-editor class="form-control @error('resumen') is-invalid @enderror" input="resumen"></trix-editor>

                    @error('resumen')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="facebook">Facebook</label>
                    <input type="text" name="facebook" id="facebook" class="form-control @error('facebook') is-invalid @enderror" value="{{ $consentido->facebook }}">

                    @error('facebook')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="twitter">Twitter</label>
                    <input type="text" name="twitter" id="twitter" class="form-control @error('twitter') is-invalid @enderror" value="{{ $consentido->twitter }}">

                    @error('twitter')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="instagram">Instagram</label>
                    <input type="text" name="instagram" id="instagram" class="form-control @error('instagram') is-invalid @enderror" value="{{ $consentido->instagram }}">

                    @error('instagram')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="correo">Correo</label>
                    <input type="text" name="correo" id="correo" class="form-control @error('correo') is-invalid @enderror" value="{{ $consentido->correo }}">

                    @error('correo')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

            
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Actualizar artista">
                </div>
            </form>
        </div>
    </div>
@endsection


@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.js" integrity="sha512-/1nVu72YEESEbcmhE/EvjH/RxTg62EKvYWLG3NdeZibTCuEtW5M4z3aypcvsoZw03FAopi94y04GhuqRU9p+CQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection