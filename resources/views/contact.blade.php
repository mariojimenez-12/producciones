@extends('welcome')

@section('seccion')
    <main class="contact">
        <div class="container-fluid">
            <div class="contenedor-contact">
                <div class="contact-info">
                    <div class="contact-about">
                        <div class="contact-element">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-2" width="32" height="32" viewBox="0 0 24 24" stroke-width="2" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <line x1="18" y1="6" x2="18" y2="6.01" />
                                <path d="M18 13l-3.5 -5a4 4 0 1 1 7 0l-3.5 5" />
                                <polyline points="10.5 4.75 9 4 3 7 3 20 9 17 15 20 21 17 21 15" />
                                <line x1="9" y1="4" x2="9" y2="17" />
                                <line x1="15" y1="15" x2="15" y2="20" />
                            </svg>
                            <div class="contact-text">
                                <h3>Dirección de la empresa</h3>
                                <p>Colotlan, Jalisco, México</p>
                            </div>
                        </div><!--contact element-->
                        <div class="contact-element">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-phone" width="32" height="32" viewBox="0 0 24 24" stroke-width="2" stroke="#000000" fill="#000000" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
                            </svg>
                            <div class="contact-text">
                                <h3>Llámenos</h3>
                                <p>+52 (33) 33 33 33 33</p>
                            </div>
                        </div>
                        <div class="contact-element">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail" width="32" height="32" viewBox="0 0 24 24" stroke-width="2" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <rect x="3" y="5" width="18" height="14" rx="2" />
                                <polyline points="3 7 12 13 21 7" />
                            </svg>
                            <div class="contact-text">
                                <h3>Envíenos un correo electrónico</h3>
                                <p>example@mail.com</p>
                            </div>
                        </div>
                        <div class="contact-element">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-headset" width="32" height="32" viewBox="0 0 24 24" stroke-width="2" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <rect x="4" y="13" rx="2" width="4" height="6" />
                                <rect x="16" y="13" rx="2" width="4" height="6" />
                                <path d="M4 15v-3a8 8 0 0 1 16 0v3" />
                                <path d="M18 19a6 3 0 0 1 -6 3" />
                            </svg>
                            <div class="contact-text">
                                <h3>Apoyo al cliente</h3>
                                <p>info@support.com</p>
                            </div>
                        </div>
                    </div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29570.66232773635!2d-103.28415922461286!3d22.113283766931154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8682a0c3ccda58a3%3A0x9c2850febac46ff9!2zQ29sb3Rsw6FuLCBKYWwu!5e0!3m2!1ses-419!2smx!4v1623177337888!5m2!1ses-419!2smx" width="350" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div><!--contact info-->
                
            </div>
        </div>
    </main>

    <div class="container mt-3 mb-3">
        <form id="formulario" action="{{ route('contacto.store') }}" method="POST" class="row row-cols-1 row-cols-sm-2">
            @csrf
            <div class="col">
                <img class="img-fluid" src="{{ asset('img/contact.jpg') }}" alt="">
            </div>
            <div class="col">
                <h2>Informacion personal</h2>
                <p></p>
                <div class="form-group">
                    <label for="nombre">Nombre Completo *</label>
                    <input type="text" name="nombre" id="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ old('nombre') }}">

                    @error('nombre')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="asunto">Asunto *</label>
                    <input type="text" name="asunto" id="asunto" class="form-control @error('asunto') is-invalid @enderror" value="{{ old('asunto') }}">

                    @error('asunto')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="mensaje">Mensaje *</label>
                    <textarea type="textarea" name="mensaje" id="mensaje" class="form-control @error('mensaje') is-invalid @enderror" value="{{ old('mensaje') }}"></textarea>

                    @error('mensaje')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <h3>Como desea ser contactado</h3>
                    <label for="contactar-telefono">Telefono</label>
                    <input name="contacto[contacto]" type="radio" value="telefono" id="contactar-telefono">
                    
                    <label for="contactar-email">E-Mail</label>
                    <input name="contacto[contacto]" type="radio" value="email" id="contactar-email">
                </div>

                <p>Si eligió telefono</p>
                <p>Eliga la hora y la fecha y nos pondremos en contacto con usted.</p>
                <div class="form-group">
                    <label for="telefono">Telefono</label>
                    <input class="form-control" type="tel" name="telefono" id="telefono">
                    <label for="fecha">Fecha:</label>
                    <input class="form-control" type="date" id="fecha" name="fecha">
        
                    <label for="hora">Hora:</label>
                    <input class="form-control" type="time" name="hora" id="hora">
                </div>

                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input class="form-control mb-3" type="email" name="email" id="email">
                </div>

                <input id="enviar" type="submit" class="btn btn-primary" value="Enviar">
            </div>
        </form>
    </div>
@endsection
