<!DOCTYPE html>
<html>

<head>
    <title>NITpanel - Gerenciamento de sites</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
    <!-- CSS Libs -->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/lib/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/lib/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/lib/css/animate.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/lib/css/bootstrap-switch.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/lib/css/checkbox3.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/lib/css/jquery.dataTables.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/lib/css/dataTables.bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/lib/css/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/lib/css/jquery-ui.min.css') }}">
    <!-- CSS App -->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/css/themes/flat-blue.css') }}">
</head>

<body class="flat-blue">
    <div class="app-container">
        <div class="row content-container">
            <nav class="navbar navbar-inverse navbar-fixed-top navbar-top">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-expand-toggle">
                            <i class="fa fa-bars icon"></i>
                        </button>
                        <ol class="breadcrumb navbar-breadcrumb">
                            <li class="active">Parada Certa Auto Escola</li>
                        </ol>
                        <button type="button" class="navbar-right-expand-toggle pull-right visible-xs">
                            <i class="fa fa-th icon"></i>
                        </button>
                    </div>
                    <ul class="nav navbar-nav navbar-right">
                        <button type="button" class="navbar-right-expand-toggle pull-right visible-xs">
                            <i class="fa fa-times icon"></i>
                        </button>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-comments-o"></i></a>
                            <ul class="dropdown-menu animated fadeInDown">
                                <li class="title">
                                    Notificação <span class="badge pull-right">0</span>
                                </li>
                                <li class="message">
                                    Nenhuma nova notificação
                                </li>
                            </ul>
                        </li>
                        {{--<li class="dropdown danger">--}}
                            {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-star-half-o"></i> 4</a>--}}
                            {{--<ul class="dropdown-menu danger  animated fadeInDown">--}}
                                {{--<li class="title">--}}
                                    {{--Notification <span class="badge pull-right">4</span>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<ul class="list-group notifications">--}}
                                        {{--<a href="#">--}}
                                            {{--<li class="list-group-item">--}}
                                                {{--<span class="badge">1</span> <i class="fa fa-exclamation-circle icon"></i> new registration--}}
                                            {{--</li>--}}
                                        {{--</a>--}}
                                        {{--<a href="#">--}}
                                            {{--<li class="list-group-item">--}}
                                                {{--<span class="badge success">1</span> <i class="fa fa-check icon"></i> new orders--}}
                                            {{--</li>--}}
                                        {{--</a>--}}
                                        {{--<a href="#">--}}
                                            {{--<li class="list-group-item">--}}
                                                {{--<span class="badge danger">2</span> <i class="fa fa-comments icon"></i> customers messages--}}
                                            {{--</li>--}}
                                        {{--</a>--}}
                                        {{--<a href="#">--}}
                                            {{--<li class="list-group-item message">--}}
                                                {{--view all--}}
                                            {{--</li>--}}
                                        {{--</a>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                        <li class="dropdown profile">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ isset(Auth::user()->name) ? Auth::user()->name : 'Username' }} <span class="caret"></span></a>
                            <ul class="dropdown-menu animated fadeInDown">
                                {{--<li class="profile-img">--}}
                                    {{--<img src="" class="profile-img">--}}
                                {{--</li>--}}
                                <li>
                                    <div class="profile-info">
                                        <h4 class="username">{{ Auth::user()->name }}</h4>
                                        <p>{{ Auth::user()->email }}</p>
                                        <div class="btn-group margin-bottom-2x" role="group">
                                            {{--<button type="button" class="btn btn-default"><i class="fa fa-user"></i> Profile</button>--}}
                                            <a href="{{ route('logout') }}" type="button" class="btn btn-default"><i class="fa fa-sign-out"></i> Logout</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="side-menu sidebar-inverse">
                <nav class="navbar navbar-default" role="navigation">
                    <div class="side-menu-container">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="#">
                                <div class="icon fa fa-paper-plane"></div>
                                <div class="title">NITpanel</div>
                            </a>
                            <button type="button" class="navbar-expand-toggle pull-right visible-xs">
                                <i class="fa fa-times icon"></i>
                            </button>
                        </div>
                        <ul class="nav navbar-nav">
                            <li class="active">
                                <a href="{{ route('dashboard') }}">
                                    <span class="icon fa fa-tachometer"></span><span class="title">Dashboard</span>
                                </a>
                            </li>
                            <li class="panel panel-default dropdown">
                                <a data-toggle="collapse" href="#dropdown-element">
                                    <span class="icon fa fa-desktop"></span><span class="title">Banners</span>
                                </a>
                                <!-- Dropdown level 1 -->
                                <div id="dropdown-element" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul class="nav navbar-nav">
                                            <li><a href="{{ route('sliders') }}">Listar</a>
                                            </li>
                                            <li><a href="{{ route('sliders.create') }}">Adicionar Banner</a>
                                            </li>
                                         </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="panel panel-default dropdown">
                                <a data-toggle="collapse" href="#dropdown-table">
                                    <span class="icon fa fa-table"></span><span class="title">Matrículas</span>
                                </a>
                                <!-- Dropdown level 1 -->
                                <div id="dropdown-table" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul class="nav navbar-nav">
                                            <li><a href="{{ route('matriculas') }}">Listar</a>
                                            </li>
                                            <li><a href="{{ route('matriculas.create') }}">Adicionar</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <a href="{{ route('cursos') }}">
                                    <span class="icon fa fa-thumbs-o-up"></span><span class="title">Cursos</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </nav>
            </div>

            @yield('content')

            <footer class="app-footer">
                <div class="wrapper">
                    <span class="pull-right">2.1 <a href="#"><i class="fa fa-long-arrow-up"></i></a></span> <a href="http://www.nitdesign.com.br" target="_blank">NITDESIGN CREATIVE STUDIO</a> © 2016 COPYRIGHT.
                </div>
            </footer>
            <div>
                <!-- Javascript Libs -->
                <script type="text/javascript" src="{{ asset('admin-assets/lib/js/jquery.min.js') }}"></script>
                <script type="text/javascript" src="{{ asset('admin-assets/lib/js/jquery-ui.min.js') }}"></script>
                <script type="text/javascript" src="{{ asset('admin-assets/lib/js/bootstrap.min.js') }}"></script>
                <script type="text/javascript" src="{{ asset('admin-assets/lib/js/Chart.min.js') }}"></script>
                <script type="text/javascript" src="{{ asset('admin-assets/lib/js/bootstrap-switch.min.js') }}"></script>
                <script type="text/javascript" src="{{ asset('admin-assets/lib/js/jquery.matchHeight-min.js') }}"></script>
                <script type="text/javascript" src="{{ asset('admin-assets/lib/js/jquery.dataTables.min.js') }}"></script>
                <script type="text/javascript" src="{{ asset('admin-assets/lib/js/dataTables.bootstrap.min.js') }}"></script>
                <script type="text/javascript" src="{{ asset('admin-assets/lib/js/select2.full.min.js') }}"></script>
                <script type="text/javascript" src="{{ asset('admin-assets/lib/js/ace/ace.js') }}"></script>
                <script type="text/javascript" src="{{ asset('admin-assets/lib/js/ace/mode-html.js') }}"></script>
                <script type="text/javascript" src="{{ asset('admin-assets/lib/js/ace/theme-github.js') }}"></script>
                <!-- Javascript -->
                <script type="text/javascript" src="{{ asset('admin-assets/js/app.js') }}"></script>
                <script type="text/javascript" src="{{ asset('admin-assets/js/index.js') }}"></script>
    </body>

    </html>

