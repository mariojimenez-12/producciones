@extends('welcome')

@section('seccion')
<div class="mt-5">.</div>

<section class="team mt-5">
    <div class="container-fluid">
        <h2>Los consentidos del sierreño</h2>
        <div class="linea"></div>
        <div class="contenido-artista">
            @foreach ($grupo1 as $artista)
            <div class="artista">
                <a href="/consentidos/{{ $artista->id }}" class="titulo-artista">
                    <img class="img-fluid" src="{{ asset("/storage/$artista->imagen") }}" alt="Imagen Artista">
                </a>
                <div class="social-artista">
                    <h3>{{ $artista->nombre . " " . $artista->apellido }}</h3>
                    <p>{{ $artista->posicion }}</p>
                    <div class="redes-sociales">
                        <a href="{{ $artista->facebook }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-facebook" width="28" height="28" viewBox="0 0 24 24" stroke-width="1" stroke="#ffffff" fill="#ffffff" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
                              </svg>
                        </a>
                        <a href="{{ $artista->instagram }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-instagram" width="34" height="34" viewBox="0 0 24 24" stroke-width="2" stroke="#fd0061" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <rect x="4" y="4" width="16" height="16" rx="4" />
                                <circle cx="12" cy="12" r="3" />
                                <line x1="16.5" y1="7.5" x2="16.5" y2="7.501" />
                            </svg>
                        </a>
                    </div><!--redes-sociales-->
                    {!! $artista->resumen !!}
                </div>
            </div><!--artista-->
            @endforeach
            
        </div><!--contenido artista-->
    </div>
</section>



    <div class="galeria container-fluid">
        <h2>Galeria</h2>
        <div class="grid-galeria-imagenes">
            @foreach ($galeria as $galeria)
                    <img src="/storage/{{ $galeria->imagen }}" alt="{{ $galeria->descripcion }}" class="img img-fluid">
            @endforeach
        </div>
        <a href="/galeria" class="btn btn-primary mt-5">Ver toda la galeria</a>
    </div>
    <div class="container-img">
        <img src="" alt="" class="img-show">
        <i class='bx bx-x'></i>
        <p class="copy"></p>
    </div>

@endsection

@section('javascript')
    <script src="{{ asset('js/tab.js') }}"></script>
    <script src="{{ asset('js/galeria.js') }}"></script>
@endsection