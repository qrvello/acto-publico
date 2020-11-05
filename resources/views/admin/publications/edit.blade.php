@extends('layouts.admin')

@section('title', 'Editar publicación')

@section('id', '$publication -> id')

@section('content')

    <!-- Content Wrapper. Contains page content -->

    <!-- Main content -->
    <form action="{{ url('/admin/publicacion/editar/'. $publication->id) }}" method="POST" autocomplete="off"
        enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">General</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                    <i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="card-body">

                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <input type="checkbox" @if ($publication->active)
                                                checked="checked" @endif
                                                name="state" value="1">
                                            </div>
                                        </div>
                                        <label for="state" class="form-control">
                                            Mostrar publicación
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="title">Nombre</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        value="{{ $publication->name }} " name="name" required>
                                    @error('name')
                                    <div class="alert alert-danger mt-3">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="character">Carácter</label>
                                    <input type="text" class="form-control" value="{{ $publication->character }} " name="character" placeholder="">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="observation">Obsevación</label>
                                    <textarea class="form-control" name="observation" rows="3">{{ $publication->observation}}</textarea>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="turn">Turno</label>
                                    <input type="text" class="form-control" value="{{ $publication->turn }} " name="turn" placeholder="">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="matter">Materia</label>
                                    <input type="text" class="form-control" value="{{ $publication->matter }} " name="matter" placeholder="">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="hours">Horas de cátedra</label>
                                    <input type="text" class="form-control" value="{{ $publication->hours }} " name="hours" placeholder="">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="date">Fecha del acto público</label>
                                    <input type="date" class="form-control" value="{{ \Carbon\Carbon::parse($publication->date)->format('Y-m-d') }}" name="date">
                                </div>

                                <div class="form-group col-mb-6">
                                    <label for="establishment_id">Establecimiento</label>
                                    <select class="custom-select @error('establishment_id') is-invalid @enderror" name="establishiment_id" id="select-establishment">
                                        @foreach ($establishiments as $establishiment)
                                            <option @if ($establishiment->id === $publication->establishiment_id) selected
                                        @endif
                                        value="{{ $establishiment->id }}">{{ $establishiment->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('establishiment_id')
                                    <div class="alert alert-danger mt-3">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group text-center mt-4">
                                <button type="submit" class="btn btn-success col-lg-2">
                                    Guardar
                                </button>
                                <a href="{{ url('/admin/publicaciones') }}" name="button" class="btn btn-danger col-lg-2">
                                    Cancelar
                                </a>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>

        </section>

    </form>

@endsection
