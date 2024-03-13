@extends('layouts.app')
<head>
    <link rel="stylesheet" href="{{asset('css/mascotas.css')}}">
</head>
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card-container">
                    <div class="card-header">Favoritos</div>

                    <div class="card-body">
                        @if ($favoritos->isEmpty())
                            <p>No tienes mascotas favoritas.</p>
                        @else
                            <div class="card-columns">
                                @foreach ($favoritos as $favorito)
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $favorito->mascota->nombre }}</h5>
                                            <p class="card-text">Talla: {{ $favorito->mascota->talla }}</p>
                                            <p class="card-text">Edad: {{ $favorito->mascota->edad }}</p>
                                            <p class="card-text">Tipo: {{ $favorito->mascota->tipo }}</p>
                                            <form action="{{ route('favoritos.destroy', $favorito->mascota->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Eliminar de favoritos</button>
                                            </form>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: '¡Hecho!',
                text: '{{ session('success') }}',
            })
        </script>
    @endif

    @if (session('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: '{{ session('error') }}',
            })
        </script>
    @endif
@endsection
