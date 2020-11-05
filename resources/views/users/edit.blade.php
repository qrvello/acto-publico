@extends('layouts.index')

@section('title', 'Perfil')

@section('content')

<form action="{{ url('/mis-datos/editar/'.$user->id)}}" method="POST" autocomplete="off" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="col-md-12">
        <div class="modal-header">
            <h3 class="card-title">Mis datos</h3>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" class="form-control" value="{{ $user -> name }}" name="name">
            </div>
            <div class="form-group">
                <label for="lastname">Apellido</label>
                <input type="text" class="form-control" value="{{ $user -> lastname }}" name="lastname">
            </div>
            <div class="form-group">
                <label for="age">Edad</label>
                <input type="text" class="form-control" value="{{ $user -> age }}" name="age">
            </div>
            <div class="form-group">
                <label for="birthdate">Fecha de nacimiento</label>
                <input type="date" class="form-control" value="{{ $user -> birthdate }}" name="birthdate">
            </div>
            <div class="form-group">
                <label for="location">Localidad</label>
                <input type="text" class="form-control" value="{{ $user -> location }}" name="location">
            </div>

        </div>
        <div class="modal-footer text-center">
            <div class="col-12">
                <button type="submit" class="btn btn-success">
                    Guardar
                </button>
                <a type="button" data-dismiss="modal">
                    Cancelar
                </a>
            </div>
        </div>
    </div>
</form>

@endsection