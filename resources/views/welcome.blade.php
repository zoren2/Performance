<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    {{-- Put this in a Blade Template --}}
    <link rel="apple-touch-icon" sizes="76x76" href="{{URL::asset('/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{URL::asset('/img/favicon.png') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Computer Performance Manager
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('css/now-ui-dashboard.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/demo.css') }}"  />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"  />


</head>

<body class="offline-doc">
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
    <div class="container">
        <div class="navbar-wrapper">
            <div class="navbar-toggle">
                <button type="button" class="navbar-toggler">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>
            <a class="navbar-brand" href="{{route('home')}}">Dashboard</a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href={{route('login')}}>
                        Login
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->
<div class="page-header clear-filter" filter-color="blue">
    <div class="page-header-image" style="background-image: url( {{URL::asset('img/header2.jpg')}});"></div>
    <div class="container text-center">
        <div class="col-md-8 ml-auto mr-auto">
            <div class="brand">
                <h1 class="title">
                    Performance Statistics
                </h1>
                <h3 class="description">Cron Database v1.0.0</h3>
                <br/>
                <a href="{{route('login')}}" class="btn btn-primary btn-round btn-lg">Login</a>
            </div>
        </div>
    </div>
</div>
<footer class="footer">
    <div class="container-fluid">
        <nav>
            <ul>
                <li>
                    <a href="#">
                        Now-UI Bootstrap 4 Theme
                    </a>
                </li>
            </ul>
        </nav>
        <div class="copyright" id="copyright">
            &copy;
            <script>
                document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>, UI Designed by
            <a href="#" target="_blank">Invision</a>. Application coded by
            <a href="#" target="_blank">Jack Tsang</a>.
        </div>
    </div>
</footer>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
</body>

</html>