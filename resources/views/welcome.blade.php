<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="R&R Producciones, Los consentidos del sierreño, Ismael y los elegidos">
    <meta name="keywords" content="Música, Eventos, Reservaciones, Sierreño, Banda, Eventos músicales, Grupos músicales, Producciones">
    <meta name="author" content="Mario Alejandro Jimenez">
    <meta name="copyright" content="R&R Producciones, MJ ING">
    <title>R&R Producciones</title>
    <!-- CSRF Token -->
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;900&display=swap" rel="stylesheet"> 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preload" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>

    @if (Route::has('login'))
        <div class="top-right links text-white bg-primary">
            @auth
                <a href="{{ url('/admin') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

            @endauth
        </div>
    @endif

    <div class="bg-primary p-3 fixed-top">
        <div class="container-fluid">
                <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
                    <a href="/" class="text-white navbar-brand">ICONO</a>
                    <button class="navbar-toggler active" data-target="#menu" data-toggle="collapse" type="button">
                        <span class="navbar-toggler-icon"></span>
                    </button>
        
                    <div class="collapse navbar-collapse" id="menu">
                        <ul class="navbar-nav ml-auto pl-6">
                            <li class="nav-item"><a href="/" class="nav-link text-white">Inicio</a></li>
                            <li class="nav-item"><a href="/about" class="nav-link text-white">Acerca de</a></li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link text-white dropdown-toggle" data-toggle="dropdown" data-target="desplegable">Grupos musicales</a>
                                <div class="dropdown-menu mr-5">
                                    <a href="/consentidos" class="dropdown-item">Los consentidos del sierreño</a>
                                    <a href="/ismael" class="dropdown-item">Ismael y los Elegidos</a>
                                </div>
                            </li>
                            <li class="nav-item"><a class="nav-link text-white" href="/contact">Contacto</a></li>
                            <li class="nav-item"><a class="nav-link text-white" href="/reservations">Reservaciones</a></li>
                        </ul>
                    </div>
                </nav>
        </div>
    </div>

    @yield('seccion')

    <footer class="footer bg-primary mt-4">
        <div class="contenedor">
            <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias iusto temporibus id corrupti veniam natus qui, ipsa quis doloremque aut explicabo quo ullam.</h2>
            <div class="footer-contenido">
                <div class="footer-elemento">
                    <h3>Acerca de</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime ipsa quas, dicta expedita, magnam quaerat blanditiis id et obcaecati at doloremque nobis cupiditate similique consequuntur harum, eaque modi distinctio quasi.</p>
                </div>
                <div class="footer-elemento footer-navegacion">
                    <h3>Navegación</h3>
                    <a href="/">Inicio</a>
                    <a href="/about">Acerca de</a>
                    <a href="/contact">Contacto</a>
                    <a href="/reservaciones">Reservaciones</a>
                    <a href="/login">Login</a>
                </div>
                <div class="footer-elemento">
                    <h3>Contacto</h3>
                    <div class="elemento">
                       <p class="mr-2">Teléfono: +52 33-33-33-33-33</p>
                    </div> 
                    <div class="elemento">
                        <p class="mr-2">Domicilio: </p>
                        <p>Colotlan, Jalisco, México</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright bg-primary">
            <div class="footer-social">
                <a href=""><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-facebook" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="#ffffff" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
                  </svg></a>
                <a href=""><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-youtube" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <rect x="3" y="5" width="18" height="14" rx="4" />
                    <path d="M10 9l5 3l-5 3z" />
                  </svg></a>
                <a href=""><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-twitter" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="#ffffff" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M22 4.01c-1 .49 -1.98 .689 -3 .99c-1.121 -1.265 -2.783 -1.335 -4.38 -.737s-2.643 2.06 -2.62 3.737v1c-3.245 .083 -6.135 -1.395 -8 -4c0 0 -4.182 7.433 4 11c-1.872 1.247 -3.739 2.088 -6 2c3.308 1.803 6.913 2.423 10.034 1.517c3.58 -1.04 6.522 -3.723 7.651 -7.742a13.84 13.84 0 0 0 .497 -3.753c-.002 -.249 1.51 -2.772 1.818 -4.013z" />
                  </svg></a>
                <a href=""><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-instagram" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <rect x="4" y="4" width="16" height="16" rx="4" />
                    <circle cx="12" cy="12" r="3" />
                    <line x1="16.5" y1="7.5" x2="16.5" y2="7.501" />
                  </svg></a>
            </div>
            <div>
                <p>&copy;<?php echo date('Y') ?> R&R Producciones. Todos los derechos reservados. Design By <a href="">Mario Jimenez</a></p>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
    @yield('javascript')
</body>
</html>