@extends('welcome')

@section('seccion')

<header class="header" style="background-image: url({{ asset('img/music.jpg') }}); background-position: center center;  background-repeat: no-repeat; background-size: cover; height: 70vh; background-attachment: fixed;">
    <div class="contenedor">
        <h1 style="font-size: 3rem;
        font-weight: 600;
        margin: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 70vh;
        color: #fff;">R&R Producciones</h1>
    </div>
</header>

<main class="main mt-5">
    <div class="container">
        <div class="contenido-main">
            <div class="contenido-texto-main">
                <h2>Los Consentidos del sierreño</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint magnam fugit suscipit veritatis odio autem eligendi eum ab aspernatur beatae soluta in cumque aliquam, dolorem voluptatem totam omnis officia ipsum!</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis enim deserunt provident veniam sed voluptatibus ab soluta recusandae error neque vero quod beatae, voluptates et! Totam laboriosam mollitia error molestias.</p>
                <a class="btn btn-dark" href="#">Leer más</a>
            </div>
            <div>
                <img class="img-fluid" src="{{ asset('img/sierreño.jpg') }}" alt="Imagen Grupo Sierreño">
            </div>
        </div>
    </div>
</main>

<section class="main">
    <div class="container">
        <div class="contenido-main">
            <div>
                <img class="img-fluid mb-4" src="{{ asset('img/los consentidos.webp') }}" alt="Imagen grupo ismael">
            </div>
            <div class="contenido-texto-main">
                <h2>Ismael y los elegidos</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint magnam fugit suscipit veritatis odio autem eligendi eum ab aspernatur beatae soluta in cumque aliquam, dolorem voluptatem totam omnis officia ipsum!</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis enim deserunt provident veniam sed voluptatibus ab soluta recusandae error neque vero quod beatae, voluptates et! Totam laboriosam mollitia error molestias.</p>
                <a class="btn btn-dark" href="#">Leer más</a>
            </div>
        </div>
    </div>
</section>

<section class="comentarios">
    @php
        $resultado = $_GET['resultado'];
    @endphp

    @if($resultado === '1')
        <div class="container">
            <div class="col-md-5">
                <p class="alert alert-success text-center" role="alert">Comentario creado exitosamente</p>
            </div>
        </div>
    @endif

    <div class="container">
        <h2>Comentarios</h2>
        <p>A continuación puedes leer acerca de los grupos en general</p>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
            @foreach($comentarios as $comentario)
                <div class="col">
                    <div class="card shadow mt-2 mb-2 m-md-0">
                        <img src="{{ asset('img/user.png') }}" alt="Imagen comentario" class="card-img-top">   
                        <div class="card-body">
                            <h4 class="card-title">{{ $comentario->nombre . " " . $comentario->apellido }}</h4>
                            <p class="card-text">
                                {!! $comentario->comentario !!}    
                            </p>    
                        </div> 
                    </div>    
                </div>                
            @endforeach
        </div>
    </div>

    <div class="col-12 mt-4 justify-content-center d-flex">
        {{ $comentarios->links() }}
    </div>

    <div class="comentario contenedor">
       
        <form action="{{ route('comentarios.store') }}" method="POST" class="container" novalidate>
            @csrf
            <h2>Deja tu comentario</h2>
            <div class="row row-cols-1 row-cols-sm-2">
                <div class="form-group col">
                    <input class="form-control mb-3" type="text" placeholder="Nombre" id="nombre" name="nombre" required>
                    @error('nombre')
                        <span class="alert alert-danger d-flex justify-content-center mt-3" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <input class="form-control mb-3" type="text" name="apellido" id="apellido" placeholder="Apellido" required>
                    @error('apellido')
                        <span class="alert alert-danger d-flex justify-content-center mt-3" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <input class="form-control mb-3" type="email" placeholder="Email" id="email" name="correo" required>
                    @error('correo')
                        <span class="alert alert-danger d-flex justify-content-center mt-3" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group col">
                    <textarea class="form-control mb-3" name="comentario" id="comentario" placeholder="Comentario:" required></textarea>
                    @error('comentario')
                        <span class="alert alert-danger d-flex justify-content-center mt-3" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <button class="btn btn-primary" type="submit">
                Publicar comentario
            </button>
        </form>
    </div>

</section><!--Comentarios-->

<section class="mt-5 mb-5">
    <div style=" background-image: url({{ asset('img/fondo.jpg') }}); background-size: cover; background-position: center center; background-attachment: fixed;">
        <div class="fondo-color">
            <div class="container">
                <div class="p-5">
                    <div class="contenido-blog">
                        <h2 class="text-white">Nuestro blog</h2>
                        <h3 class="text-white">Suscríbete para recibir nuestras mejores actualizaciones antes que nadie</h3>
                    </div>
                    <div class="contenido-blog">
                        <form action="{{ route('boletin.create') }}" method="POST">
                            @csrf
                            <div class="submit-blog">
                                <input type="email" name="email" id="boletin" placeholder="Dirección de correo electrónico" required>
                                <button class="submit" type="submit">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-telegram" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M15 10l-4 4l6 6l4 -16l-18 7l4 2l2 6l3 -4" />
                                    </svg>
                                </button>

                                
                            </div>
                            @error('email')
                                <span class="alert alert-danger d-flex justify-content-center mt-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection