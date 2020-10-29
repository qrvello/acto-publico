@extends('layouts.admin')

@section('title', 'Publicaciones')

@section('content')
    <!-- Content Wrapper. Contains page content -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">

                            {{-- Cantidad de resultados de la búsqueda
                            --}}
                            @if (isset($search))
                                <div class="alert alert-secondary"" role=" alert">
                                    Hay {{ $categories->total() }} resultados para tu búsqueda de '{{ $search }}'.
                                </div>
                            @endif
                            @if (isset($error))
                                <div class="alert alert-danger" role="alert">
                                    {{ $error }}
                                </div>
                            @endif
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <div class="card-tools">
                                <form action="{{ url('/admin/publicaciones') }}">
                                    <div class="input-group input-group-sm float-right">
                                        <input type="text" name="search" class="form-control ">
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-default">
                                                <i class="fas fa-search"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Observación</th>
                                        <th>Carácter</th>
                                        <th>Turno</th>
                                        <th>Horas de cátedra</th>
                                        <th>Fecha del acto público</th>
                                        <th>Estado</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($publications))
                                        @foreach ($publications as $publication)
                                            <tr>
                                                <td>{{ $publication->name }}</td>
                                                <td>{{ $publication->observation }}</td>
                                                <td>{{ $publication->character }}</td>
                                                <td>{{ $publication->turn }}</td>
                                                <td>{{ $publication->hours }}</td>
                                                <td>{{ $publication->date }}</td>
                                                <td>{{ $publication->state }}</td>
                                                <td class="admin-button">
                                                    <form action="{{ url('admin/publicacion/borrar/'. $publication->id) }}" method="POST">
                                                        {{ csrf_field() }}
                                                        {{ method_field('DELETE') }}
                                                        <button type="button" class="btn" data-toggle="modal" data-target="#confirmacionBorrar{{$publication->id}}">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                        <!-- Modal -->
                                                        {{-- <x-alert-confirm-delete :id="$publication->id">
                                                            <x-slot name="title">Borrar contenido</x-slot>
                                                            <x-slot name="message">¿Desea borrar la publicacion?</x-slot>
                                                        </x-alert-confirm-delete> --}}
                                                        {{-- // TODO arreglar alerta --}}
                                                    </form>

                                                    <a href="{{ url('/admin/publicacion/editar/'.$publication->id) }}" type="button" class="btn">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <div class="alert alert-warning">Aún no hay categorías creadas.</div>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
