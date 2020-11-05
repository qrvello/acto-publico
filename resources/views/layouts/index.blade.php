<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.css')}} " rel="stylesheet">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/jpg" href="{{ asset('favicon.jpg') }}" />

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/app.css')}}" rel="stylesheet">
    <link href="{{ asset('css/heroic-features.css')}}" rel="stylesheet">

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{url('/')}}">Acto Público</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li>
                        <a class="nav-link padding-right" href="{{url('/')}}">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.523-3.356c.329-.314.158-.888-.283-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767l-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288l1.847-3.658 1.846 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.564.564 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{url('/mis-participaciones')}}">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-calendar-event" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                                <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{url('/mis-datos')}}">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-lines-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm7 1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm2 9a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
                            </svg>
                        </a>
                    </li> 
                        @if (Route::has('login'))
                            @auth
                                <li>
                                    <div class="dropdown">
                                        <a href="#dropdown" class="nav-link" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> {{ $user->name}} {{$user->lastname}} </a>

                                        <div id="dropdown" class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            @if(@Auth::user()->hasPermissionTo('admin'))
                                                <div id="dropdown" class="dropdown-item">
                                                    <a href="{{url('/admin')}}">Panel</a>
                                                </div>
                                            @endif
                                            <div id="dropdown" class="dropdown-item">
                                                <a href="{{url('/usuario')}}">Perfil</a>
                                            </div>
                                            <div id="dropdown" class="dropdown-item">
                                                <a href="{{url('/mis-participaciones')}}">Mis participaciones</a>
                                            </div>
                                            <div id="dropdown" class="dropdown-item">
                                                <a class="" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar Sesión</a>
                                            </div>

                                        </div>
                                    </div>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            @else
                        <li>
                            <a class="nav-link" href="{{ url('/login') }}">
                                Iniciar sesión
                            </a>
                        </li>
                        <li>
                            <a class="nav-link" href="{{ route('register') }}">Registrame</a>
                        </li>
                        @endif
                        @endif
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="container my-4">

        <!-- Jumbotron Header -->
        <!-- <header class="jumbotron my-4">
		<h1 class="display-4">Actos publicos Móron!</h1>
		<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.</p>
		<a href="#" class="btn btn-primary btn-lg">Call to action!</a>
		</header> -->
        @yield('content')

    </div>
    <!-- /.container -->




    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
        </div>
        <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="{{asset ('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset ('vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
    <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
</body>

</html>
