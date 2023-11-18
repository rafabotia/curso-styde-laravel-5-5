@include('header')

    <div class="row mt-5">
        <div class="col-8">
            <h1>{{ $title }}</h1>

            <ul>
                @forelse ($users as $user)
                    <li>{{ $user }}</li>
                @empty
                    <li>No hay usuarios registrados</li>
                @endforelse
            </ul>
        </div>
        <div class="col-4">
            @include('sidebar')
        </div>
    </div>

@include('footer')