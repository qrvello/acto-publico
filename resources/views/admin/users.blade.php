@extends('layouts.admin')

@section('title', 'Usuarios')

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
                                    Hay {{ $users->total() }} resultados para tu búsqueda de '{{ $search }}'.
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
                                <form action="{{ url('/admin/categorias') }}">
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
                                        <th>Apellido</th>
                                        <th>Email</th>
                                        <th>Rol</th>
                                        {{--<th></th>--}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($users))
                                        @foreach ($users as $user)
                                            <tr>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->lastname }}</td>
                                                <td>{{ $user->email }}</td>
                                                @if($user->hasPermissionTo('admin'))
                                                    <td>Administrador</td>
                                                @else
                                                    <td>Usuario</td>
                                                @endif
                                                {{-- <td class="admin-button">
                                                    <form action="{{ url('admin/categoria/borrar/' . $user->id) }}" method="POST">
                                                        {{ csrf_field() }}
                                                        {{ method_field('DELETE') }}
                                                        <button type="button" class="btn" data-toggle="modal" data-target="#confirmacionBorrar{{$user->id}}">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                        <!-- Modal -->
                                                        <x-alert-confirm-delete :id="$user->id">
                                                            <x-slot name="title">Borrar subcategoría</x-slot>
                                                            <x-slot name="message">¿Desea borrar la categoría?</x-slot>
                                                            <x-slot name="message"> Al borrar la subcategoría se borraran <strong>TODOS</strong> los contenidos que pertenezcan al mismo. ¿Desea borrarlo?</x-slot>
                                                        </x-alert-confirm-delete>
                                                        
                                                    </form>

                                                    <a href="{{ url('admin/categoria/editar/' . $user->id) }}" type="button" class="btn">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                </td> --}}
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
