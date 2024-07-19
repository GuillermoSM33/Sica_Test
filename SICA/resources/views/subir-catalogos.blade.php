<x-app-layaout>

    @section('title', 'Subir Catálogos')

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

    </style>

    <div class="content">

        <div class="blue-bar">
            <h1 class="section-title">Subir Catálogo</h1>
        </div>
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        <form action="{{ route('upload.pdf') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="image" class="form-label">SUBIR IMAGEN</label>
                <input type="file" class="form-control" id="image" name="image" required>
            </div>

            <div class="mb-3">
                <label for="pdf" class="form-label">SUBIR PDF</label>
                <input type="file" class="form-control" id="pdf" name="pdf" required>
            </div>

            <button type="submit" class="btn btn-primary">Subir</button>
        </form>


    </div>

</x-app-layaout>
