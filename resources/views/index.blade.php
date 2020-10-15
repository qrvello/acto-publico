@extends('layouts.index')

@section('title', 'Bienvenido/a')

@section('content')

<div class="container my-4">

    @if(session('error'))
        <div class="alert alert-danger mt-4">{{ session('error') }}</div>
    @endif

    @if ($publications)

    <div class="row text-left">

        @foreach ($publications as $publication)

        <div class="col-lg-6 col-md-6 mb-2">
            <x-publication-card :publication="$publication">

                {{-- Verifica si el usuario está logueado. --}}
                @auth
                    {{-- Verifica si el usuario ya estaba relacionado con esa publicación para mostrar el botón de postularse, sino muestra el botón de desistir. --}}
                    @if(!$user->publications->contains($publication->id))
                        <x-slot name="button">
                            <form action="{{ url('participacion/'.$publication->id.'/postularse')}}" method="POST"
                                autocomplete="off">
                                @csrf
                                <button type="submit" class="btn btn-success">Postularse</button>
                            </form>
                        </x-slot>
                    @else
                        <x-slot name="button">
                            <form action="{{ url('participacion/'.$publication->id.'/desistir')}}" method="POST" autocomplete="off">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger">Desistir</button>
                            </form>
                        </x-slot>
                    @endif
                @endauth

            </x-publication-card>
        </div>

        @endforeach

    </div>

    {{$publications->withQueryString()->links()}}

    @endif

</div>

@endsection
