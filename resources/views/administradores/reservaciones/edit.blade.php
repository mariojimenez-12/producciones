@extends('layouts.app')

@section('botones')
    <div class="p-5">
        <a href="{{ route('reservaciones.index') }}" class="btn btn-primary">
            <svg class="icono w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z"></path></svg>
            Regresar
        </a>
    </div>
@endsection

@section('content')
    <h2 class="text-center mb-5">Editar evento</h2>

    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <form action="{{ route('reservaciones.update', ['reservacion' => $reservacion->id]) }}" method="post">
                @csrf
                @method('put')
                <div class="form-group">

                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ $reservacion->nombre }}">

                    @error('nombre')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>
                <div class="form-group">

                    <label for="apellido">Apellido</label>
                    <input type="text" name="apellido" id="apellido" class="form-control @error('apellido') is-invalid @enderror" value="{{ $reservacion->apellido }}">

                    @error('apellido')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>
                <div class="form-group">

                    <label for="telefono1">Telefono 1</label>
                    <input type="text" name="telefono1" id="telefono1" class="form-control @error('telefono1') is-invalid @enderror" value="{{ $reservacion->telefono1 }}">

                    @error('telefono1')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>
                <div class="form-group">

                    <label for="telefono2">Telefono 2</label>
                    <input type="text" name="telefono2" id="telefono2" class="form-control @error('telefono2') is-invalid @enderror" value="{{ $reservacion->telefono2 }}">

                    @error('telefono2')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>
                <div class="form-group">

                    <label for="domicilio">Domicilio</label>
                    <input type="text" name="domicilio" id="domicilio" class="form-control @error('domicilio') is-invalid @enderror" value="{{ $reservacion->domicilio }}">

                    @error('domicilio')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>
                <div class="form-group">

                    <label for="referencias">Referencias</label>
                    <input type="text" name="referencias" id="referencias" class="form-control @error('referencias') is-invalid @enderror" value="{{ $reservacion->referencias }}">

                    @error('referencias')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>

                <div class="form-group">

                    <label for="colonia">Colonia</label>
                    <input type="text" name="colonia" id="colonia" class="form-control @error('colonia') is-invalid @enderror" value="{{ $reservacion->colonia }}">

                    @error('colonia')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>

                <div class="form-group">

                    <label for="codigopostal">Codigo postal</label>
                    <input type="number" name="codigopostal" id="codigopostal" class="form-control @error('codigopostal') is-invalid @enderror" value="{{ $reservacion->codigo_postal }}">

                    @error('codigopostal')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>

                <div class="form-group">

                    <label for="horas">horas</label>
                    <input type="number" min="1" max="5" name="horas" id="horas" class="form-control @error('horas') is-invalid @enderror" value="{{ $reservacion->horas }}">

                    @error('horas')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>
                <div class="form-group">

                    <label for="fecha">Fecha</label>
                    <input type="date" name="fecha" id="fecha" class="form-control @error('fecha') is-invalid @enderror" value="{{ $reservacion->fecha }}">

                    @error('fecha')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>

                <div class="form-group">
                    <label for="grupo">Servicio</label>

                    <select name="servicio" class="form-control @error('servicio') is-invalid @enderror" id="servicio">
                        <option value="">--Seleccione--</option>
                            @foreach($servicios as $key => $value)
                                <option value="{{$key}}">{{$value}}</option>
                            @endforeach
                    </select>

                    @error('servicio')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="grupo">Grupo musical</label>

                    <select name="grupo" class="form-control @error('grupo') is-invalid @enderror" id="grupo">
                        <option value="">--Seleccione--</option>
                        @foreach($grupos as $key => $value)
                            <option value="{{ $key }}">{{ $value }}</option>
                        @endforeach
                    </select>

                    @error('grupo')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Registrar evento">
                </div>
            </form>
        </div>
    </div>
@endsection 