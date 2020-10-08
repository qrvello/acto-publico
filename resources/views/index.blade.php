@extends('layouts.index')

@section('title', 'Bienvenido/a')

@section('content')

<!-- Page Features -->

<div class="row text-center">

	<div class="col-lg-3">
		<div class="container">
			<div class="collapse" id="map">
				<div class="card h-100">
					<img class="card-img-top" src="http://placehold.it/500x325" alt="">
					<div class="card-body">
						<h4 class="card-title">Card title</h4>
						<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo magni
							sapiente, tempore debitis beatae culpa natus architecto.</p>
					</div>
					<div class="card-footer">

					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-lg-3 col-md-6 mb-4">

	</div>

	<div class="col-lg-3 col-md-6 mb-4">

	</div>

	<div class="col-lg-3 col-md-6 mb-4">
		<div class="container">
			<div class="collapse" id="search">
				<div class="card h-100">
					<img class="card-img-top" src="http://placehold.it/500x325" alt="">
					<div class="card-body">
						<h4 class="card-title">Card title</h4>
						<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo magni
							sapiente, tempore debitis beatae culpa natus architecto.</p>
					</div>
					<div class="card-footer">
					</div>
				</div>
			</div>
		</div>
	</div>

</div>

<div class="container">
	<div class="row text-left">

		@if ($publications)

		@foreach ($publications as $publication)

		<div class="col-lg-6 col-md-6 mb-4">
			<div class="card h-100">
				<div class="card-body">
					<h4 class="card-title">{{ $publication->name }}</h4>
					<p class="card-text">
						@if($publication->state)
						<span class="badge badge-primary">Publicado</span>
						@else
						<span class="badge badge-danger">No publicado</span>
						@endif
					</p>
					<p class="card-text">
                        <i class="fas fa-clock fa-fw"></i>
                        Turno: {{$publication->turn}}</p>
					<p class="card-text">
                        <i class="fas fa-place-of-worship fa-fw"></i>
						Establecimiento del Cargo: {{$publication->establishment->name}}
					</p>
					<p class="card-text">
						<i class="fas fa-map-marker fa-fw"></i>
						Dirección del Establecimiento del Cargo: {{$publication->establishment->adress}}
					</p>
					<p class="card-text">
						<i class="fas fa-chalkboard-teacher fa-fw"></i>
						Carácter: {{$publication->character}}
					</p>
					<p class="card-text">
						<i class="fas fa-user-clock fa-fw"></i>
						Horas de cátedra: {{$publication->hours}}
					</p>
					<p class="card-text">
                        <i class="fas fa-calendar-day fa-fw"></i>
						Fecha del acto público: {{$publication->date}}
					</p>
					<p class="card-text">
                        <i class="far fa-sticky-note fa-fw"></i>
						Observación: {{$publication->observation}}
					</p>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal{{$publication->id}}">
                        Ver más
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="modal{{$publication->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <h4 class="card-title">{{ $publication->name }}</h4>
                                    <p class="card-text">
                                        @if($publication->state)
                                        <span class="badge badge-primary">Publicado</span>
                                        @else
                                        <span class="badge badge-danger">No publicado</span>
                                        @endif
                                    </p>
                                    <p class="card-text">
                                        <i class="fas fa-clock fa-fw"></i>
                                        Turno: {{$publication->turn}}</p>
                                    <p class="card-text">
                                        <i class="fas fa-place-of-worship fa-fw"></i>
                                        Establecimiento del Cargo: {{$publication->establishment->name}}
                                    </p>
                                    <p class="card-text">
                                        <i class="fas fa-map-marker fa-fw"></i>
                                        Dirección del Establecimiento del Cargo: {{$publication->establishment->adress}}
                                    </p>
                                    <p class="card-text">
                                        <i class="fas fa-chalkboard-teacher fa-fw"></i>
                                        Carácter: {{$publication->character}}
                                    </p>
                                    <p class="card-text">
                                        <i class="fas fa-user-clock fa-fw"></i>
                                        Horas de cátedra: {{$publication->hours}}
                                    </p>
                                    <p class="card-text">
                                        <i class="fas fa-calendar-day fa-fw"></i>
                                        Fecha del acto público: {{$publication->date}}
                                    </p>
                                    <p class="card-text">
                                        <i class="far fa-sticky-note fa-fw"></i>
                                        Observación: {{$publication->observation}}
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    @auth
                                    <a href="#" class="btn btn-primary">Postularse</a>
                                    @endauth
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div>
					@auth
					<a href="#" class="btn btn-secondary">Postularse</a>
					@endauth
				</div>

			</div>
		</div>
		{{-- <x-card-content :content="$publication" />

            <x-modal-content :content="$publication" /> --}}

		@endforeach

		{{-- Paginación --}}
		{{-- {{ $publications->appends(['search' => $search ?? ''])->links() }} --}}

		@endif


	</div>
</div>
<!-- /.row -->
@endsection
