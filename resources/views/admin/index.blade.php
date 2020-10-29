@extends('layouts.admin')

@section('title', 'Panel administrativo')

    <!-- Content Wrapper. Contains page content -->

@section('content')
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="container">
                <!-- Main row -->
                <div class="row">
                    <div class="card-deck text-center">
                        <div class="shadow card mb-4">
                            <div class="card-body">
                                <a href="{{url('/admin/usuarios')}}">Ver usuarios registrados</a>
                            </div>
                        </div>
                        <div class="shadow card mb-4">
                            <div class="card-body">
                                <a href="{{url('/admin/publicacion/crear')}}">Crear nueva publicacion</a>
                            </div>
                        </div>
                        <div class="shadow card mb-4">
                            <div class="card-body">
                                <a href="{{url('/admin/publicaciones')}}">Ver las publicaciones</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection

<!-- /.content-wrapper -->
