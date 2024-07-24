<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'SICA' }}</title>

    {{-- Área de links --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" crossorigin="anonymous">

    {{-- Estilo de la vista --}}
    <style>
        body,
        html {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
            overflow-x: hidden;
        }

        .content {
            flex: 1 0 auto;
        }

        .carousel-container {
            width: 100%;
        }

        .img-for-carousel img {
            width: 100%;
            height: 70vh;
            object-fit: cover;
        }

        footer {
            flex-shrink: 0;
        }

        .container-fluid {
            padding-right: 0;
            padding-left: 0;
            max-width: 100%;
        }

        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .section-title {
            margin-left: 6%;
        }

        .navbar-brand {
            padding-left: 20px;
        }

        .navbar-collapse .form-control {
            margin-right: 20px;
        }

        /* Estilos específicos */

        .card-shrimp {
            width: 100%;
            height: 300px;
            perspective: 1000px;
        }

        .card-inner-shrimp {
            width: 100%;
            height: 100%;
            position: relative;
            transform-style: preserve-3d;
            transition: transform 0.999s;
        }

        .card-shrimp:hover .card-inner-shrimp {
            transform: rotateY(180deg);
        }

        .card-front-shrimp,
        .card-back-shrimp {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 20px;
        }

        .card-front-shrimp img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 20px;
        }

        .card-front-shrimp {
            background-color: #ffffff;
            transform: rotateY(0deg);
        }

        .card-back-shrimp {
            background-color: #F08A5D;
            color: #fff;
            padding: 20px;
            box-sizing: border-box;
            transform: rotateY(180deg);
            border-radius: 20px;
        }
    </style>

</head>
<body>

    {{-- Esta es la barra de navegación --}}
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img src="img/SICA_VECTORIZADO_transparent.png" alt="SICA Logo" style="height: 60px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/nosotros">Nosotros</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="/producto" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Productos
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/productos">Producto 1</a></li>
                            <li><a class="dropdown-item" href="/productos">Producto 2</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="/productos">Producto 3</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="/descargables" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Descargables
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/catalogos">Catálogo</a></li>
                            <li><a class="dropdown-item" href="#">Descargable 2</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Descargable 3</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="/servicios" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Servicios
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/servicios">Todos nuestros servicios</a></li>
                            <li><a class="dropdown-item" href="/osmosis">Osmosis</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Servicio 3</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contacto">Contacto</a>
                    </li>
                    @auth
                        <li class="nav-item">
                            <a class="nav-link" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar Sesión</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="/login">Iniciar Sesión</a>
                        </li>
                    @endauth
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </nav>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>

    {{ $slot }}

    {{-- Pié de página --}}
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top bg-light">
        <div class="container d-flex flex-wrap justify-content-between align-items-center">
            <div class="col-md-4 d-flex align-items-center">
                <a class="navbar-brand" href="/">
                    <img src="img/SICA_VECTORIZADO_transparent.png" alt="SICA Logo" style="height: 60px; padding-right: 20px">
                </a>
                <span class="mb-3 mb-md-0 text-body-secondary">&copy; 2024 SICA, Inc</span>
            </div>
            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                <li class="ms-3"><a class="text-body-secondary" href="https://wa.me/9982428928"><i class="fab fa-whatsapp fa-2x"></i></a></li>
                <li class="ms-3"><a class="text-body-secondary" href="#"><i class="fab fa-instagram fa-2x"></i></a></li>
                <li class="ms-3"><a class="text-body-secondary" href="https://www.facebook.com/profile.php?id=61561158332942"><i class="fab fa-facebook fa-2x"></i></a></li>
            </ul>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
