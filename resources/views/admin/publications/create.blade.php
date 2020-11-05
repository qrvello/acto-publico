@extends('layouts.admin')

@section('title', 'Agregar publicación')

@section('content')

    <!-- Main content -->
    <section class="content">
        <form action="{{ url('/admin/publicacion/crear') }}" method="POST" autocomplete="off">
            @csrf
            <div class="row justify-content-md-center">

                <div class="col-md-11">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">General</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                    data-toggle="tooltip" title="Collapse">
                                    <i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group col-md-12">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" name="state" aria-label="Checkbox for following text input">
                                        </div>
                                    </div>
                                    <label for="state" class="form-control" aria-label="Text input with checkbox">
                                        Mostrar contenido
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="title">Titulo</label>
                                <input type="text" class="form-control" value=" " name="name" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="character">character</label>
                                <input type="text" class="form-control" value=" " name="character" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="observation">Descripción</label>
                                <textarea class="form-control" name="observation" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="turn">Turno</label>
                                <input type="text" class="form-control" value=" " name="turn" placeholder="">
                            </div>
                            <div class="form-group col-md-6">
                                    <label for="matter">Materia</label>
                                    <input type="text" class="form-control" value=" " name="matter" placeholder="">
                                </div>
                            <div class="form-group">
                                <label for="hours">Horas</label>
                                <input type="text" class="form-control" value=" " name="hours" placeholder="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="date">Días</label>
                                <input type="date" class="form-control" name="date">
                            </div>
                        </div>
                        <div class="form-group col-mb-3">
                            <label for="establishiment_id">Establecimiento</label>
                            <select class="custom-select @error('establishiment_id') is-invalid @enderror" name="establishiment_id" id="select-establishiment" required>
                                <option value="">Seleccione establecimiento</option>
                                @foreach ($establishiments as $establishiment)
                                    <option value="{{ $establishiment->id }}">{{ $establishiment->name }}</option>
                                @endforeach
                            </select>
                            @error('establishiment_id')
                            <div class="alert alert-danger mt-3">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group text-center">
                            <div class="col-12">
                                    <button type="submit" class="btn btn-success col-lg-2">
                                        Crear
                                    </button>

                                    <a href="{{ url('/admin/publicaciones')}}" name="button" class="btn btn-danger col-lg-2">
                                        Cancelar
                                    </a>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>

            </div>
        </form>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection
