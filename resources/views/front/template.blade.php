<!DOCTYPE html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-gb" xml:lang="en-gb" class="no-js"> <!--<![endif]-->

<head>
    <meta charset="utf-8">
    <!--[if lt IE 9]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
    <meta name="description" content="Auto Escola Parada Certa">
    <meta name="keywords" content="">
    <meta name="author" content="Nitdesign.com.br">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="">
    <link rel="shortcut icon" href="{{ asset('front-assets/ico/favicon.ico') }}">

    <!--[if lt IE 9]>
        <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
    <link rel="stylesheet" href="{{ asset('front-assets/font-awesome/css/font-awesome.min.css') }}" type="text/css">

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700,900italic,300,400italic%7CMontserrat:400,700' rel='stylesheet' type='text/css'>
    
    <link rel="stylesheet" href="{{ asset('front-assets/bootstrap/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('front-assets/owl-carousel2/assets/owl.carousel.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('front-assets/lightbox/css/lightbox.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('front-assets/masterslider/style/masterslider.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('front-assets/styles/morphext.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('front-assets/styles/animate.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('front-assets/styles/main.css') }}" type="text/css">

    <title>Auto Escola Parada Certa - Niterói/RJ</title>
    
    <script type="text/javascript" src="{{ asset('front-assets/js/modernizr-custom.min.js') }}"></script>
</head>


<body cz-shortcut-listen="true" data-gclp-initialized="true" data-gistbox-initialized="true">
    <div class="site-top">
        <div class="container clearfix">
            <div class="site-top-left">
                <span class="site-top-part">
                    <i class="fa fa-clock-o"></i> Seg. à Sexta: 08:00-19:40 | Sáb. 07:00-12:00
                </span>
            </div>
            <div class="site-top-right">
                <span class="site-top-part">
                    <i class="fa fa-phone"></i> (21) 3021-7611 / (21) 3021-7712
                </span>
                <span class="site-top-part">
                    <i class="fa fa-envelope-o"></i> contato@autoescolaparadacerta.com.br
                </span>
                <span class="site-top-part">
                    <a href="{{ url('/painel') }}"><i class="fa fa-sign-in"></i>Painel</a>
                </span>
            </div>
        </div><!-- .container -->
    </div><!-- .site-top -->

    <header class="page-header">
        <nav class="navbar navbar-default clearfix">
            <div class="container">
                <a href="{{ route('home') }}"><h1 class="site-logo"><img alt="Parada Certa" src="{{ asset('front-assets/images/logo.png') }}"></h1></a>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
                    <i class="fa fa-reorder"></i>
                </button>
                <div class="main-navigation-wrapper">
                    <div class="collapse navbar-collapse" id="navbar-collapse">
                        <ul class="nav navbar-nav main-navigation clearfix">

                            <li><a href="{{ route('home') }}">Home</a></li>

                            <li>
                                <a class="dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    Auto Escola
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <li><a href="{{ route('quemsomos') }}">Quem somos</a></li>
                                    <li><a href="{{ route('veiculos') }}">Veículos</a></li>
                                </ul>
                            </li>

                            <li>
                                <a class="dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    Serviços
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                    <li><a href="{{ route('habilitacao.a') }}">Categoria A (Moto)</a></li>
                                    <li><a href="{{ route('habilitacao.b') }}">Categoria B (Carro)</a></li>
                                    <li><a href="{{ route('habilitacao.ab') }}">Categoria AB</a></li>
                                    <li><a href="{{ route('tabela.precos') }}">Tabela de preços</a></li>
                                    <li><a href="{{ route('passoapasso') }}">Matrícula (Passo a Passo)</a></li>

                                </ul>
                                {{--<ul class="dropdown-menu" aria-labelledby="dropdownMenu2">--}}
                                    {{--<li><a href="{{ route('habilitacao.a') }}">1ª Habilitação</a></li>--}}
                                    {{--<li><a href="{{ route('inclusao.a') }}">Inclusão de categoria</a></li>--}}
                                    {{--<li><a href="{{ route('aulapratica.a') }}">Aulas práticas avulsas</a></li>--}}
                                    {{--<li><a href="{{ route('reciclagemhabilitado.a') }}">Reciclagem para habilitados</a></li>--}}
                                    {{--<li><a href="{{ route('realinfrator') }}">Real infrator</a></li>--}}
                                {{--</ul>--}}
                            </li>

                            <li>
                                <a class="dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    Matrícula
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                    <li><a href="{{ route('procedimentos') }}">Procedimentos</a></li>
                                    <li><a href="{{ route('matricula.online') }}">Matrícula Online</a></li>
                                </ul>
                            </li>                              

                            <li>
                                <a class="dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    Links úteis
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                    <li><a href="{{ route('simulado.online') }}">Simulado Detran</a></li>
                                    <li><a href="http://www.bradesco.com.br/html/classic/produtos-servicos/outros/pagamentos.shtm" target="_blank">Bradesco Detran</a></li>
                                    <li><a href="#">Exame Prático</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="{{ route('contato') }}">contato</a>
                            </li>
                        </ul>
                    </div><!-- .collapse -->
                </div><!-- .main-navigation-wrapper -->
            </div><!-- .container -->
        </nav>
    </header>
 
    @yield('content')

    <div class="section section-color section-tiny">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-sm-center responsive-column-xs">
                    <div class="margin-5"></div>
                    <span class="text-uppercase text-font-alt">Siga-nos nas Redes Sociais</span>
                </div>
                <div class="col-md-6 text-right text-sm-center responsive-column-xs">
                    <a href="https://www.facebook.com/autoescolaparadacerta" class="social" target="_blank"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="social"><i class="fa fa-youtube-play"></i></a>
                    <a href="#" class="social"><i class="fa fa-instagram"></i></a>
                </div>
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .section -->
    
    <footer class="page-footer">
        <div class="scroll-top-container">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 footer-col">
                        <h6 class="bottom-line-alt">Quem somos</h6>
                        <p>O Centro de Formação de Condutores PARADA CERTA, atuando hoje na cidade de Niterói, tem como missão a qualidade de ensino e a formação de condutores conscientes.</p>
                        <a href="{{ route('quemsomos') }}" class="read-more-link">Saiba mais</a>
                    </div><!-- .col-md-3 -->
                    <div class="col-md-3 footer-col">
                        <h6 class="bottom-line-alt">Links ùteis</h6>
                        <ul class="list-links">
                            <li><a href="{{ route('simulado.online') }}">Simulado Detran</a></li>
                            <li><a href="#">Exame prático</a></li>
                            <li><a href="#">Bradesco Detran</a></li>
                            <li><a href="{{ route('matricula.online') }}">Matrícula Online</a></li>
                        </ul>
                    </div><!-- .col-md-3 -->
                    <div class="col-md-3 footer-col">
                        <h6 class="bottom-line-alt">Contatos</h6>
                        <p><i class="fa fa-map-marker"></i> End.: Rua Visconde de Itaboraí, 396<br>
                        Centro - Niterói - RJ</p>
                        <p><i class="fa fa-phone"></i> (21) 3021-7611 / (21) 3021-7712</p>
                    </div><!-- .col-md-3 -->
                    <div class="col-md-3 footer-col">
                        <h6 class="bottom-line-alt">Newsletter</h6>
                        <p>Se inscreva em nossa lista e receba atualizações e promoções.</p>
                        <form id="form-newsletter" class="form-subscribe" action="" method="post" data-email-not-set-msg="Você esqueceu de digitar seu e-mail!" data-success-msg="Email adicionado">
                            <input type="email" name="email" placeholder="Digite seu e-mail">
                            <input type="submit" value="">
                            <div class="return-msg"></div>
                        </form>
                        <p class="text-smaller">Nós respeitamos sua privacidade</p>
                    </div><!-- .col-md-3 -->
                </div><!-- .row -->
            </div><!-- .container -->
            <div id="scroll-top"></div>
        </div><!-- .scroll-top-container -->
        <div class="site-info">
            <div class="container clearfix">
                <div class="site-info-left">
                    © Auto Escola Parada Certa 2016. Desenvolvido por <a href="http://www.nitdesign.com.br" target="_blank">NITDESIGN</a>
                </div>
                <div class="site-info-right">
                    <ul class="main-navigation">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('quemsomos') }}">Auto Escola</a></li>
                        <li><a href="{{ route('simulado.online') }}">Simulado Detran</a></li>
                        <li><a href="{{ route('contato') }}">Contato</a></li>
                    </ul>
                </div>
            </div><!-- .container -->
        </div><!-- .site-info -->
    </footer>
      
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    <script type="text/javascript" src="{{ asset('front-assets/js/jquery-1.11.3.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('front-assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('front-assets/owl-carousel2/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('front-assets/lightbox/js/lightbox.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('front-assets/masterslider/jquery.easing.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('front-assets/masterslider/masterslider.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('front-assets/js/jquery.scrollTo.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('front-assets/js/jquery.stellar.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('front-assets/js/isotope.pkgd.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('front-assets/js/morphext.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('front-assets/js/custom.js') }}"></script>


    </body>
</html>    

