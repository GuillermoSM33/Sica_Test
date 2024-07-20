<x-app-layaout>

    @section('title', 'Catálogos')

    <style>
        .blue-bar {
            width: 100%;
            background-color: #00a7c1;
            color: white;
            height: 55px;
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .catalogo-item {
            text-align: center;
            margin-bottom: 20px;
        }

        .catalogo-item img {
            width: 100%;
            max-width: 200px;
            cursor: pointer;
        }

        .catalogo-item a {
            display: block;
            color: #000;
            text-decoration: none;
            margin-top: 10px;
        }

    </style>

<div class="content">
    <div class="blue-bar">
        <h1 class="section-title">Conoce nuestros catálogos</h1>
    </div>

    <div class="mt-5">
        <h2>Catálogos Subidos</h2>

        <div class="row">
            @foreach($catalogos as $catalogo)
            <div class="col-md-4 catalogo-item">
                <a href="{{ Storage::url($catalogo->pdf) }}" target="_blank">
                    <img src="{{ Storage::url($catalogo->image) }}" alt="{{ $catalogo->cleanName }}">
                </a>
                <a href="{{ Storage::url($catalogo->pdf) }}" target="_blank">{{ $catalogo->cleanName }}</a>
            </div>
            @endforeach
        </div>
    </div>
</div>

</x-app-layaout>
