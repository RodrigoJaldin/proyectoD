@extends('layouts.app')
<head>
    <link rel="stylesheet" href="{{asset('css/mascotas.css')}}">
</head>
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card-container">
                    <div class="card-header">Mascotas</div>

                    <div class="card-body">
                        @if ($mascotas->isEmpty())
                            <p>No hay mascotas disponibles.</p>
                        @else
                            <div class="card-columns">
                                @foreach ($mascotas as $mascota)
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $mascota->nombre }}</h5>
                                            <p class="card-text">Talla: {{ $mascota->talla }}</p>
                                            <p class="card-text">Edad: {{ $mascota->edad }}</p>
                                            <p class="card-text">Tipo: {{ $mascota->tipo }}</p>
                                            <form action="{{ route('favoritos.store') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="mascota_id" value="{{ $mascota->id }}">
                                                <button type="submit" class="btn btn-primary">Agregar a favoritos</button>
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
