@extends('welcome')

@section('seccion')
    <div class="mt-5">.</div>

    @php
        $resultado = $_GET['resultado'];
    @endphp

    @if($resultado === '1')
        <div class="container mt-5">
            <div class="col-md-5">
                <p class="alert alert-success text-center" role="alert">Reservación creada exitosamente</p>
            </div>
        </div>
    @endif

    <main class="container mt-5">
        <h2 class="mb-5">Haz tu reservación para tu próximo evento</h2>
        
        <form id="enviar-mail" action="{{ route('reservaciones.store') }}" method="POST">
            @csrf
            <div class="row row-cols-1 row-cols-sm-2">
                <div class="col">
                    <h2>Datos personales</h2>
                    <div class="form-group">

                        <label for="nombre">Nombre *</label>
                        <input type="text" name="nombre" id="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ old('nombre') }}">
    
                        @error('nombre')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
    
                    </div>
                    <div class="form-group">
    
                        <label for="apellido">Apellido *</label>
                        <input type="text" name="apellido" id="apellido" class="form-control @error('apellido') is-invalid @enderror" value="{{ old('apellido') }}">
    
                        @error('apellido')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
    
                    </div>
                    <div class="form-group">
    
                        <label for="telefono1">Telefono 1 *</label>
                        <input type="text" name="telefono1" id="telefono1" class="form-control @error('telefono1') is-invalid @enderror" value="{{ old('telefono1') }}">
    
                        @error('telefono1')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
    
                    </div>
                    <div class="form-group">
    
                        <label for="telefono2">Telefono 2</label>
                        <input type="text" name="telefono2" id="telefono2" class="form-control @error('telefono2') is-invalid @enderror" value="{{ old('telefono2') }}">
    
                        @error('telefono2')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
    
                    </div>
                </div>
                <div class="col">
                    <h2>Datos del evento</h2>
                    <div class="form-group">

                        <label for="domicilio">Domicilio *</label>
                        <input type="text" name="domicilio" id="domicilio" class="form-control @error('domicilio') is-invalid @enderror" value="{{ old('domicilio') }}">
    
                        @error('domicilio')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
    
                    </div>
                    <div class="form-group">
    
                        <label for="referencias">Referencias *</label>
                        <input type="text" name="referencias" id="referencias" class="form-control @error('referencias') is-invalid @enderror" value="{{ old('referencias') }}">
    
                        @error('referencias')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
    
                    </div>
    
                    <div class="form-group">
    
                        <label for="colonia">Colonia *</label>
                        <input type="text" name="colonia" id="colonia" class="form-control @error('colonia') is-invalid @enderror" value="{{ old('colonia') }}">
    
                        @error('colonia')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
    
                    </div>
    
                    <div class="form-group">
    
                        <label for="codigopostal">Codigo postal *</label>
                        <input type="number" name="codigopostal" id="codigopostal" class="form-control @error('codigopostal') is-invalid @enderror" value="{{ old('codigopostal') }}">
    
                        @error('codigopostal')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
    
                    </div>
    
                    <div class="form-group">
    
                        <label for="horas">horas *</label>
                        <input type="number" min="1" max="5" name="horas" id="horas" class="form-control @error('horas') is-invalid @enderror" value="{{ old('horas') }}">
    
                        @error('horas')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
    
                    </div>
                    <div class="form-group">
    
                        <label for="fecha">Fecha *</label>
                        <input type="date" name="fecha" id="fecha" class="form-control @error('fecha') is-invalid @enderror" value="{{ old('fecha') }}">
    
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
                                @foreach($servicios as $servicio)
                                    <option value="{{$servicio->id}}" {{ old('servicio') === $servicio->id ? 'selected' : '' }}>{{$servicio->servicio}}</option>
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
                            @foreach($grupos as $grupo)
                                <option value="{{ $grupo->id}}">{{ $grupo->grupo }}</option>
                            @endforeach
                        </select>
    
                        @error('grupo')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
            <input id="enviar" type="submit" class="btn btn-primary" value="Reservar">
        </form>
    </main>
@endsection

@section('javascript')
    <script src="/js/reservacion.js"></script>
@endsection