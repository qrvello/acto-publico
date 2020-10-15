<div class="card h-100 shadow">
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
            Fecha del acto público: {{\Carbon\Carbon::parse($publication->date)->formatLocalized('%d de %B de %Y')}}
        </p>
        <p class="card-text">
            <i class="far fa-sticky-note fa-fw"></i>
            Observación: {{$publication->observation}}
        </p>
        <div class="row text-center">
            <div class="col-md-6 mb-4">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal{{$publication->id}}">
                    Ver detalle
                </button>
            </div>
            <div class="col-md-6">
                {{ $button ?? ''}}
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modal{{$publication->id}}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">{{ $publication->name }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
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
                    <div class="modal-footer justify-content-start">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Volver</button>
                        {{ $button ?? ''}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
