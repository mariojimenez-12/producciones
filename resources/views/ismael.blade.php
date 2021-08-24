@extends('welcome')

@section('seccion')
<div class="mt-5">.</div>

    <section class="team mt-5">
        <div class="container-fluid">
            <h2>Ismael y los elegidos</h2>
            <div class="linea"></div>
            <div class="contenido-artista">
                @foreach ($grupo2 as $artista)
                <div class="artista">
                    <a href="/ismael/{{ $artista->id }}" class="titulo-artista">
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

    <section class="history mt-5 mb-3 container-fluid">
        <div class="contenedor">
            <div class="app">
                <h2 class="mg-tp-5">Nuestra historia</h2>
                <div class="linea"></div>
                <nav class="app-tabs">
                    <button type="button" class="boton-tab" data-paso="1">2017</button>
                    <button type="button" class="boton-tab" data-paso="2">2018</button>
                    <button type="button" class="boton-tab" data-paso="3">2019</button>
                    <button type="button" class="boton-tab" data-paso="4">2020</button>
                </nav>
    
                <!--inicia contenido app-->
    
                <div id="paso-1" class="seccion">
                     <div class="ofertas-texto">
                             <h3>2017</h3>
                             <p>Contenido historia</p>
                             <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim aut at sapiente, mollitia nemo ea nesciunt labore, adipisci distinctio, qui velit provident sint illo odit perspiciatis. Dolorum sunt nihil impedit?</p>
                             <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet aliquam commodi, quia voluptatibus cum assumenda hic quae sapiente vel debitis iure facere corrupti placeat optio perferendis. Est distinctio obcaecati accusamus.</p>
                     </div>
                </div>
                <div id="paso-2" class="seccion">
                     <div class="ofertas-texto">
                             <h3>2018</h3>
                             <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim aut at sapiente, mollitia nemo ea nesciunt labore, adipisci distinctio, qui velit provident sint illo odit perspiciatis. Dolorum sunt nihil impedit?</p>
                             <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet aliquam commodi, quia voluptatibus cum assumenda hic quae sapiente vel debitis iure facere corrupti placeat optio perferendis. Est distinctio obcaecati accusamus.</p>
                     </div>
                </div>
                <div id="paso-3" class="seccion">
                     <div class="ofertas-texto">
                             <h3>2019</h3>
                             <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim aut at sapiente, mollitia nemo ea nesciunt labore, adipisci distinctio, qui velit provident sint illo odit perspiciatis. Dolorum sunt nihil impedit?</p>
                             <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet aliquam commodi, quia voluptatibus cum assumenda hic quae sapiente vel debitis iure facere corrupti placeat optio perferendis. Est distinctio obcaecati accusamus.</p>
                     </div>
                </div>
                <div id="paso-4" class="seccion">
                     <div class="ofertas-texto">
                             <h3>2020</h3>
                             <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim aut at sapiente, mollitia nemo ea nesciunt labore, adipisci distinctio, qui velit provident sint illo odit perspiciatis. Dolorum sunt nihil impedit?</p>
                             <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet aliquam commodi, quia voluptatibus cum assumenda hic quae sapiente vel debitis iure facere corrupti placeat optio perferendis. Est distinctio obcaecati accusamus.</p>
                     </div>
                </div>
            </div><!--cierre tab-->
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
    <script src="/js/tab.js"></script>
    <script src="/js/galeria.js"></script>
@endsection