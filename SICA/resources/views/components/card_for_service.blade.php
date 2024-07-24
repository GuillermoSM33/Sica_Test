<div class="container">
    <div class="row">
        @foreach($servicios as $servicio)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="row g-0 h-100">
                        <div class="col-md-12 img-container">
                            <img src="{{ env('APP_URL') . '/img/' . $servicio->imagen_servicio }}" class="img-fluid" alt="{{ $servicio->nombre_servicio }}">
                        </div>

                        <div class="col-md-12 d-flex flex-column">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">{{ $servicio->nombre_servicio }}</h5>
                                <p class="card-text flex-grow-1">
                                    <span class="short-text">{{ Str::limit($servicio->descripcion_servicio, 100) }}</span>
                                    <span class="full-text">{{ $servicio->descripcion_servicio }}</span>
                                </p>
                                @if(strlen($servicio->descripcion_servicio) > 100)
                                    <a href="#" class="read-more">Seguir leyendo</a>
                                @endif
                                <a href="#" class="btn btn-primary mt-2 align-self-start">Ver Servicio</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<style>
    .img-container {
        width: 100%;
        height: 150px;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        position: relative;
    }

    .img-container img {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .card-body {
        display: flex;
        flex-direction: column;
        height: 100%;
    }

    .card-text {
        flex-grow: 1;
    }

    .card-text .full-text {
        display: none;
    }

    .card-text.expanded .short-text {
        display: none;
    }

    .card-text.expanded .full-text {
        display: inline;
    }

    .read-more {
        color: #007bff;
        cursor: pointer;
        text-decoration: underline;
    }

    .read-more:hover {
        text-decoration: none;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.read-more').forEach(function(button) {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                const cardText = button.closest('.card-body').querySelector('.card-text');
                cardText.classList.toggle('expanded');
                button.textContent = cardText.classList.contains('expanded') ? 'Leer menos' : 'Seguir leyendo';
            });
        });
    });
</script>
