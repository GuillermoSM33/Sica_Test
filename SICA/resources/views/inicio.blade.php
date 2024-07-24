<!-- resources/views/index.blade.php -->

<x-app-layaout>

    @section('title', 'Inicio')

    <div class="content">
        {{-- Título --}}
        <h1>BIENVENIDOS A SICA</h1>

        {{-- Contenido --}}
        <x-carousel style="z-index: 1"> </x-carousel>
        <br>

        {{-- Subtítulo --}}
        <h2 class="section-title">ALGUNOS DE NUESTROS SERVICIOS</h2>
        <br>
        <x-card_for_service :servicios="$servicios"> </x-card_for_service>

        {{-- Esta será la parte que vamos a dedicar para el conoce más --}}

        <style>
            .content-for-myself {
                width: 100%;
                display: flex;
                justify-content: space-between;
                align-items: stretch;
                margin-top: 2px;
                padding-left: 0;
                padding-right: 0;
                flex-direction: column;
            }

            @media (min-width: 768px) {
                .content-for-myself {
                    flex-direction: row;
                }
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
                background-color: #0d6efd;
                clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
            }

            @media (min-width: 768px) {
                .myself {
                    clip-path: polygon(0 0, 100% 0, 95% 100%, 0 100%);
                }

                .experience {
                    clip-path: polygon(5% 0, 100% 0, 100% 100%, 0 100%);
                }
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

            /* EXTERNOS */
            .floating-tooltip {
                position: fixed;
                top: 50%;
                right: 15px;
                transform: translateY(-50%);
                background-color: #ffffff;
                color: #fff;
                padding: 10px 5px;
                border-radius: 5px;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
                z-index: 1000;
            }

            .floating-tooltip .nav {
                flex-direction: column;
                gap: 10px;
                align-items: center;
            }

            .floating-tooltip .nav .ms-3 {
                margin-left: 0;
            }

            .floating-tooltip .nav .text-body-secondary {
                color: #fff;
            }

            .floating-tooltip .nav .text-body-secondary:hover {
                color: #ccc;
            }

            @media (max-width: 768px) {
                .floating-tooltip {
                    top: auto;
                    bottom: 10px;
                    right: 10px;
                    transform: none;
                }
            }

            @media (max-width: 768px) {
                .floating-tooltip {
                    top: auto;
                    bottom: 10px;
                    right: 10px;
                    transform: none;
                }

                .social-icon:first-child {
                    display: none;
                }
            }

        </style>

        <div class="content-for-myself">
            <div class="myself">
                <div>
                    <h1>CONOCE MÁS DE NOSOTROS</h1>
                    <p>En Servicios Industriales del Caribe, nos enorgullece ser pioneros en el sureste
                        mexicano en el tratamiento del agua. Con más de dos décadas de experiencia,
                        nos hemos especializado en ofrecer soluciones integrales para la purificación y
                        reutilización del agua, promoviendo la sustentabilidad y el cuidado del medio ambiente.</p>
                </div>
            </div>
            <div class="experience">
                <div>
                    <h1>NUESTRA EXPERIENCIA</h1>
                    <p>Con más de 20 años en la industria, hemos perfeccionado nuestras técnicas en el
                        tratamiento del agua, especialmente en sistemas de ósmosis inversa, tren de
                        suavizado y mantenimiento de albercas.</p>
                </div>
            </div>
        </div>

        {{-- Tooltip flotante --}}
        <div id="floating-tooltip" class="floating-tooltip">
            <ul class="nav col-md-4">
                <li class="social-icon" style="margin-left: 5px; margin-right: 5px"><a class="text-body-secondary" href="#"><i class="fab fa-instagram fa-2x"></i></a></li>
                <li class="social-icon" style="margin-left: 5px; margin-right: 5px"><a class="text-body-secondary" href="https://wa.me/9982428928"><i class="fab fa-whatsapp fa-2x"></i></a></li>
                <li class="social-icon" style="margin-left: 5px; margin-right: 5px"><a class="text-body-secondary" href="https://www.facebook.com/profile.php?id=61561158332942"><i class="fab fa-facebook fa-2x"></i></a></li>
            </ul>
        </div>

        {{-- Subtítulo --}}
        <br>
        <h2 class="section-title">NUESTROS PROYECTOS</h2>
        <br>
        <x-card_for_proyects> </x-card_for_proyects>

    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const tooltip = document.getElementById('floating-tooltip');

            // Mostrar y ocultar tooltip al pasar el mouse
            tooltip.addEventListener('mouseover', function() {
                tooltip.style.transform = 'translateY(-50%) translateX(-10px)';
            });

            tooltip.addEventListener('mouseout', function() {
                tooltip.style.transform = 'translateY(-50%)';
            });
        });

    </script>


</x-app-layaout>
