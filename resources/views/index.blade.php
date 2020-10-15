@extends('layouts.index')

@section('title', 'Bienvenido/a')

@section('content')

    @if (session('error'))
        <div class="alert alert-danger mt-4">{{ session('error') }}</div>
    @endif

    @if ($publications)

        <div class="row text-left">

            @foreach ($publications as $publication)

                <div class="col-lg-6 col-md-6 mb-4">

                    <x-publication-card :publication="$publication">

                        {{-- Verifica si el usuario está logueado. --}}
                        @auth
                            {{-- Verifica si el usuario ya estaba relacionado con esa publicación para mostrar el botón de postularse, sino muestra el botón de desistir. --}}
                            @if (!$user->publications->contains($publication->id))

                                <x-slot name="button">
                                    <button type="button" class="btn btn-success" data-toggle="modal"
                                        data-target="#confirm{{ $publication->id }}">Postularse</button>
                                </x-slot>

                            @else

                                <x-slot name="button">
                                    <button type="button" class="btn btn-danger" data-toggle="modal"
                                        data-target="#confirm{{ $publication->id }}">Desistir</button>
                                </x-slot>

                            @endif

                        @endauth

                    </x-publication-card>

                </div>

                @auth

                    {{-- Verifica si el usuario ya estaba relacionado con esa publicación para mostrar el botón de postularse, sino muestra el botón de desistir. --}}
                    @if (!$user->publications->contains($publication->id))

                        <x-confirm-alert :publication="$publication->id">
                            <x-slot name="title">Postulación de cargo</x-slot>
                            <x-slot name="message">¿Seguro que desea postularse al cargo de {{ $publication->name }}?</x-slot>
                            <x-slot name="button">
                                <form action="{{ url('participacion/' . $publication->id . '/postularse') }}" method="POST"
                                    autocomplete="off">
                                    @csrf
                                    <button type="submit" class="btn btn-success" id="postularse">Postularse</button>
                                </form>
                            </x-slot>
                        </x-confirm-alert>

                    @else

                        <x-confirm-alert :publication="$publication->id">
                            <x-slot name="title">Desistir</x-slot>
                            <x-slot name="message">¿Estás seguro/a que querés desistir al cargo de {{ $publication->name }}?
                            </x-slot>
                            <x-slot name="button">
                                <form action="{{ url('participacion/' . $publication->id . '/desistir') }}" method="POST"
                                    autocomplete="off">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Desistir</button>
                                </form>
                            </x-slot>
                        </x-confirm-alert>

                    @endif

                @endauth

            @endforeach

        </div>

        {{ $publications->withQueryString()->links() }}

    @endif

@endsection
