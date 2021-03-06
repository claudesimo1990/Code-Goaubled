<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Colissend - Admin</title>
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet"></link>
        <link href="{{ mix('/css/app.css') }}" rel="stylesheet"></link>
    </head>
    <body class="sb-nav-fixed">
    @if(Auth::guard('admin')->check())
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="{{route('admin.home')}}">Colissend Admin</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" @click.prevent="toggle()" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Settings</a>
                        <a class="dropdown-item" href="#">Activity Log</a>
                        <div class="dropdown-divider"></div>
                        <form action="{{route('admin.logout')}}" method="post">
                            @csrf
                            <input type="submit" value="deconnexion" class="dropdown-item">
                        </form>
                    </div>
                </li>
            </ul>
        </nav>
    @endif
        @inertia

        @routes

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
