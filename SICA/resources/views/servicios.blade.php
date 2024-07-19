<x-app-layaout>

    @section('title', 'Nuestros Servicios')

    {{-- En este apartado irá la información relevante de los servicios --}}

    <style>
        .content-for-myself {
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: stretch;
            margin-top: 2px;
            padding-left: 0;
            padding-right: 0;
        }

        .myself,
        .experience {
            flex: 1;
            padding: 40px;
            color: white;
            font-family: Arial, sans-serif;
            position: relative;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: justify;
            transition: transform 0.3s ease, background-color 0.3s ease;
        }

        .myself {
            background-color: #0d6efd;
            clip-path: polygon(0 0, 100% 0, 95% 100%, 0 100%);
        }

        .experience {
            background-color: #0d6efd;
            clip-path: polygon(5% 0, 100% 0, 100% 100%, 0 100%);
        }

        .myself:hover,
        .experience:hover {
            transform: scale(1.05);
            background-color: #0056b3;
        }

        .myself h1,
        .experience h1 {
            color: black;
            font-size: 24px;
            margin-bottom: 10px;
        }

        .myself p,
        .experience p {
            color: white;
            font-size: 16px;
            margin: 0;
        }
    </style>

    <div class="content-for-myself">
        <div class="myself">
            <div>
                <h1>NUESTROS SERVICIOS</h1>
                <p>Todos los servicios que manejamos, son atendidos
                    por los profesionales mejor preparados que puedes encontrar en el mercado,
                    trabajamos en base a competencias y estamos felices de que decidas confiar en nosotros,
                    si te interesa saber más acerca de cada uno de nuestros servicios estás en el lugar correcto.</p>
            </div>
        </div>
        <div class="experience">
            <div>
                <h1>GARANTIZAMOS</h1>
                <p>Servicios Industriales del Caribe nos preocupamos por la completa satisfacción
                    de todos y cada uno de nuestros clientes, por lo cuál estamos comprometidos en
                    brindar un servicio completo y dedicado, para nosotros lo más importante es su
                    satisfacción y el profesionalismo en cada uno de nuestros servicios.
                </p>
            </div>
        </div>
    </div>

    <br>

    <h2 class="section-title">SERVICIOS DE MANTENIMIENTO</h2>

    <x-card_for_service :servicios="$servicios"> </x-card_for_service>

</x-app-layaout>
