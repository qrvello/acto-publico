@extends('layouts.index')

@section('title', 'Perfil')

@section('content')

    <div class="container my-3">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Bienvenido al acto publico de  Móron</h2>
            <h3 class="section-subheading"><em>{{$user->name}}</em></h3>
        </div>
        <div class="row text-center">
            <div class="col-md-6">
                <a href="{{url('/')}}">
                    <svg width="9em" height="9em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                    <h4 class="my-3">Ver publicaciones</h4>
                </a>
            </div>
            <div class="col-md-6">
                <a href="{{url('usuario/'.$user->id.'/participaciones')}}">
                    <svg width="9em" height="9em" viewBox="0 0 16 16" class="bi bi-calendar-event" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                        <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/>
                    </svg>
                    <h4 class="my-3">Mis Participaciones</h4>
                </a>
            </div>
            <!-- <div class="col-md-4">
                <a href=" ">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-play-circle fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Mis Preferencias</h4>
                </a>
            </div> -->
        </div>
    </div>

@endsection
