@extends('front.template')

@section('content')

    <?php echo phpinfo(); ?>

    <section class="no-padding">
        <div class="master-slider ms-skin-default has-thumbnails" id="main-slider">
            <div class="ms-slide bg-pattern-clean" data-delay="7">
                <img src="{{ asset('front-assets/images/slider/slide1.jpg') }}" data-src="{{ asset('front-assets/images/slider/slide1.jpg') }}" alt="slider image">   
            </div><!-- .ms-slide -->
            <div class="ms-slide bg-pattern-clean" data-delay="7">
                <img src="{{ asset('front-assets/images/slider/slide1.jpg') }}" data-src="{{ asset('front-assets/images/slider/slide1.jpg') }}" alt="slider image">   
            </div><!-- .ms-slide -->
            <div class="ms-slide bg-pattern-clean" data-delay="7">
                <img src="{{ asset('front-assets/images/slider/slide1.jpg') }}" data-src="{{ asset('front-assets/images/slider/slide1.jpg') }}" alt="slider image">   
            </div><!-- .ms-slide -->
        </div>
    </section>

    <section class="section-dark section-small">
        <div class="container text-center text-promote">
            Faça já sua matrícula online para tirar sua CNH.
            <span class="btn-group-full">
                <a href="{{ route('procedimentos') }}" class="btn-box-color btn-big margin-left-lg">Saiba mais...</a> <a href="{{ route('matricula.online') }}" class="btn-box-color btn-big margin-left-md">Matrícula online</a>
            </span>
        </div>
    </section>
    
    <section>
        <div class="section-header">
            <div class="container">
                <div class="section-header-content">
                    <h1>Quem somos</h1>
                    <p>
                        O Centro de Formação de Condutores PARADA CERTA, atuando hoje na cidade de Niterói, tem como missão a qualidade de ensino e a formação de condutores conscientes.
                        Ensinando a dirigir com excelência para um trânsito cada vez mais seguro. Desde o início está vinculada à inovação tecnológica, adaptando-se rapidamente às constantes mudanças.
                        <a href="{{ route('quemsomos') }}"><strong>Saiba mais...</strong></a>
                    </p>
                </div>
            </div>
        </div><!-- .section-header -->
        <div class="huge-icons">
            <div class="row row-tiny">
                <div class="col-lg-12-5 col-sm-6">
                    <div class="huge-icon">
                        <div class="huge-icon-content">
                            <i class="fa fa-clock-o"></i>
                            <h2>Horários</h2>
                            <div class="huge-icon-hover">
                                <p>Fique por dentro dos nossos horários de funcionamento.</p>
                                <a href="{{ route('quemsomos') }}" class="read-more-link">Saiba mais</a>
                            </div>
                        </div><!-- .huge-icon-content -->
                    </div><!-- .huge-icon -->
                </div><!-- .col-lg-12-5 -->
                <div class="col-lg-12-5 col-sm-6">
                    <div class="huge-icon">
                        <div class="huge-icon-content">
                            <i class="fa fa-car"></i>
                            <h2>Veículos</h2>
                            <div class="huge-icon-hover">
                                <p>Conheça os nossos veículos. Carros e motos novos.</p>
                                <a href="{{ route('veiculos') }}" class="read-more-link">Saiba mais</a>
                            </div>
                        </div><!-- .huge-icon-content -->
                    </div><!-- .huge-icon -->
                </div><!-- .col-lg-12-5 -->
                <div class="col-lg-12-5 col-sm-6">
                    <div class="huge-icon">
                        <div class="huge-icon-content">
                            <i class="fa fa-map-marker"></i>
                            <h2>Unidade</h2>
                            <div class="huge-icon-hover">
                                <p>Veja onde se encontra a Auto Escola Parada Certa.</p>
                                <a href="{{ route('quemsomos') }}" class="read-more-link">Saiba mais</a>
                            </div>
                        </div><!-- .huge-icon-content -->
                    </div><!-- .huge-icon -->
                </div><!-- .col-lg-12-5 -->
                <div class="col-lg-12-5 col-sm-6">
                    <div class="huge-icon">
                        <div class="huge-icon-content">
                            <i class="fa fa-calendar-check-o"></i>

                            <h2>Matrícula</h2>                            
                            <div class="huge-icon-hover">
                                <p>Faça já sua Matrícula online e ganhe tempo!</p>
                                <a href="{{ route('matricula.online') }}" class="read-more-link">Saiba mais</a>
                            </div>
                        </div><!-- .huge-icon-content -->
                    </div><!-- .huge-icon -->
                </div><!-- .col-lg-12-5 -->
                <div class="col-lg-12-5 col-sm-6 col-sm-offset-3 col-lg-offset-0">
                    <div class="huge-icon">
                        <div class="huge-icon-content">
                            <i class="fa fa-phone"></i>
                            <h2>Contato</h2>                            
                            <div class="huge-icon-hover">
                                <p>Ainda tem dúvidas? Entre em contato conosco.</p>
                                <a href="{{ route('contato') }}" class="read-more-link">Saiba mais</a>
                            </div>
                        </div><!-- .huge-icon-content -->
                    </div><!-- .huge-icon -->
                </div><!-- .col-lg-12-5 -->
            </div><!-- .row -->
        </div><!-- .huge-icons -->
    </section>
    
    <section class="no-top-padding">
        <div class="section-header">
            <div class="container">
                <div class="section-header-content">
                    <h1>Passo a passo</h1>
                </div>
            </div>
        </div><!-- .section-header -->
        <div class="container">
            <div class="row">
                <div class="centered-columns">
                    <div class="centered-column col-md-6 responsive-column-md">
                        <ul class="icon-tabs" role="tablist">
                            <li class="active">
                                <a href="#tab1-content" aria-controls="tab1-content" role="tab" data-toggle="tab">
                                    <article class="row">
                                        <div class="centered-columns">
                                            <div class="col-sm-4 centered-column">
                                                <div class="circle-icon">
                                                    <i class="fa fa-calendar-check-o"></i>
                                                </div>
                                            </div>
                                            <div class="col-sm-8 centered-column circle-icon-info">
                                                <h4>Matrícula</h4>
                                                <p>O primeiro passo é fazer a Matrícula online. Preencha os seus dados e aproveite esta comodidade.</p>
                                            </div>
                                        </div>
                                    </article>
                                </a>
                            </li>
                            <li>
                                <a href="#tab2-content" aria-controls="tab2-content" role="tab" data-toggle="tab">
                                    <article class="row">
                                        <div class="centered-columns">
                                            <div class="col-sm-4 centered-column">
                                                <div class="circle-icon">
                                                    <i class="fa fa-eye"></i>
                                                </div>
                                            </div>
                                            <div class="col-sm-8 centered-column circle-icon-info">
                                                <h4>Exame de vista e psicotécnico</h4>
                                                <p>Nós te encaminhamos para fazer todos os exames necessários em uma clínica mais perto de você.</p>
                                            </div>
                                        </div>
                                    </article>
                                </a>
                            </li>
                            <li>
                                <a href="#tab3-content" aria-controls="tab3-content" role="tab" data-toggle="tab">
                                    <article class="row">
                                        <div class="centered-columns">
                                            <div class="col-sm-4 centered-column">
                                                <div class="circle-icon">
                                                    <i class="fa fa-car"></i>
                                                </div>
                                            </div>
                                            <div class="col-sm-8 centered-column circle-icon-info">
                                                <h4>Aulas e avaliações</h4>
                                                <p>Com nossas aulas teóricas e práticas você estará apto a fazer as avaliações e finalmente tirar sua CNH.</p>
                                            </div>
                                        </div>
                                    </article>
                                </a>
                            </li>
                        </ul>
                    </div><!-- .centered-column -->
                    <div class="centered-column col-md-6 responsive-column-md">
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="tab1-content">
                                <img class="img-full" alt="photo" src="{{ asset('front-assets/images/matricula.jpg') }}">
                                <p class="description text-center">
                                    <a href="{{ route('matricula.online') }}" class="btn-box-color btn-big">Matrícula Online</a>
                                </p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab2-content">
                               <img class="img-full" alt="photo" src="{{ asset('front-assets/images/exames.jpg') }}">
                                <p class="description text-center">
                                    <a href="{{ route('passoapasso') }}" class="btn-box-color btn-big">Saiba mais</a>
                                </p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab3-content">
                                <img class="img-full" alt="photo" src="{{ asset('front-assets/images/avaliacoes.jpg') }}">
                                <p class="description text-center">
                                    <a href="{{ route('passoapasso') }}" class="btn-box-color btn-big">Saiba mais</a>
                                </p>
                            </div>
                        </div><!-- .tab-content -->
                    </div><!-- .centered-column -->
                </div><!-- .centered-columns -->
            </div><!-- .row -->
        </div><!-- .container -->
    </section>

    {{--<section>--}}
        {{--<div class="section-header">--}}
            {{--<div class="container">--}}
                {{--<div class="section-header-content">--}}
                    {{--<h1>Marcas / Parceiros</h1>--}}
                    {{--<p>--}}
                        {{--Lorem ipsum dolor sit amet, consectetur adipisicing elit.<br> Reiciendis error optio delectus, quos sit nam, suscipit pariatur deleniti. --}}
                    {{--</p>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div><!-- .section-header -->--}}
        {{--<div class="container text-center">--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-12-5">--}}
                    {{--<div class="logo-hover">--}}
                        {{--<img alt="logo" src="./Built_files/1.png">--}}
                        {{--<div class="logo-hover-img">--}}
                            {{--<img alt="logo" src="./Built_files/1_hover.png">--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-12-5">--}}
                    {{--<div class="logo-hover">--}}
                        {{--<img alt="logo" src="./Built_files/2.png">--}}
                        {{--<div class="logo-hover-img">--}}
                            {{--<img alt="logo" src="./Built_files/2_hover.png">--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-12-5">--}}
                    {{--<div class="logo-hover">--}}
                        {{--<img alt="logo" src="./Built_files/3.png">--}}
                        {{--<div class="logo-hover-img">--}}
                            {{--<img alt="logo" src="./Built_files/3_hover.png">--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-12-5">--}}
                    {{--<div class="logo-hover">--}}
                        {{--<img alt="logo" src="./Built_files/4.png">--}}
                        {{--<div class="logo-hover-img">--}}
                            {{--<img alt="logo" src="./Built_files/4_hover.png">--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-12-5">--}}
                    {{--<div class="logo-hover">--}}
                        {{--<img alt="logo" src="./Built_files/5.png">--}}
                        {{--<div class="logo-hover-img">--}}
                            {{--<img alt="logo" src="./Built_files/5_hover.png">--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div><!-- .row -->--}}
        {{--</div><!-- .container -->--}}
    {{--</section>--}}

    @endsection