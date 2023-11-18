@include('header')

    <div class="row mt-5">
        <div class="col-8">
            <h1>Usuario #{{ $id }}</h1>

            Mostrando detalle del usuario: {{ $id }}
        </div>
        <div class="col-4">
            @include('sidebar')
        </div>
    </div>

@include('footer')