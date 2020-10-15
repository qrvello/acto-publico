@extends('layouts.index')

@section('title', 'Participaciones')

@section('content')

<div class="container my-4">
    <h2 class="section-heading">Mis Participaciones</h2>
    <h3 class="section-subheading">Todas las postulaciones en las que participás</h3>
    @if(session('status'))
        <div class="alert alert-success mt-4">{{ session('status') }}</div>
    @endif
    @if ($publications ?? '')
    <div class="row text-left">

        @foreach ($publications as $publication)
        <div class="col-lg-6 col-md-6 mb-4">
            <x-publication-card :publication="$publication">
                @auth
                <x-slot name="button">
                    <form action="{{ url('participacion/'.$publication->id.'/desistir')}}" method="POST"
                        autocomplete="off">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger">Desistir</button>
                    </form>
                </x-slot>
                @endauth
            </x-publication-card>
        </div>
        @endforeach

    </div>

    {{$publications->withQueryString()->links()}}
    @else
        <div class="alert alert-warning mt-4">Aún no participaste de ninguna publicación.</div>
    @endif

</div>

@endsection
