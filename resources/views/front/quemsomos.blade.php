@extends('front.template')
@section('content')

    <section class="big-title-container" id="page-title-about">
        <div class="big-title dark-cover-8">
            <div class="big-title-wrapper">
                <div class="container">
                    <div class="big-title-content">
                        <h1>Quem somos</h1>
                        Conheça a Auto Escola Parada Certa
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">

            <div class="col-md-6">

                <h3>Missão</h3>
                <p>Instruir e formar com responsabilidade futuros condutores, objetivando um trânsito mais seguro, humano e educado em prol de uma sociedade melhor.</p>

                <h3>Sobre Nós</h3>
                <p>O Centro de Formação de Condutores <b>PARADA CERTA</b>, atuando hoje na cidade de Niterói, tem como missão a qualidade de ensino e a formação de condutores conscientes. Ensinando a dirigir com excelência para um trânsito cada vez mais seguro. Desde o início está vinculada à inovação tecnológica, adaptando-se rapidamente às constantes mudanças.</p>
                    <p>A <b>AUTO ESCOLA PARADA CERTA</b> possui uma equipe de instrutores devidamente credenciadas pelo órgão de trânsito, e constantemente atualizada através de treinamentos técnicos. Além disso, para o conforto de seus alunos dispõe de estruturas modernas e uma frota atualizada, todos os veículos são equipados com ar condicionado e direção hidráulica.</p>
            </div>
            <div class="col-md-6">

                    <div id="slider-projects">
                        <a href="{{ asset('front-assets/images/instalacoes/001.jpg') }}" data-lightbox="gallery"><img alt="project" src="{{ asset('front-assets/images/instalacoes/001.jpg') }}"></a>
                        <a href="{{ asset('front-assets/images/instalacoes/002.jpg') }}" data-lightbox="gallery"><img alt="project" src="{{ asset('front-assets/images/instalacoes/002.jpg') }}"></a>
                        <a href="{{ asset('front-assets/images/instalacoes/003.jpg') }}" data-lightbox="gallery"><img alt="project" src="{{ asset('front-assets/images/instalacoes/003.jpg') }}"></a>
                        <a href="{{ asset('front-assets/images/instalacoes/004.jpg') }}" data-lightbox="gallery"><img alt="project" src="{{ asset('front-assets/images/instalacoes/004.jpg') }}"></a>
                        <a href="{{ asset('front-assets/images/instalacoes/005.jpg') }}" data-lightbox="gallery"><img alt="project" src="{{ asset('front-assets/images/instalacoes/005.jpg') }}"></a>
                        <a href="{{ asset('front-assets/images/instalacoes/006.jpg') }}" data-lightbox="gallery"><img alt="project" src="{{ asset('front-assets/images/instalacoes/006.jpg') }}"></a>
                        <a href="{{ asset('front-assets/images/instalacoes/007.jpg') }}" data-lightbox="gallery"><img alt="project" src="{{ asset('front-assets/images/instalacoes/007.jpg') }}"></a>
                        <a href="{{ asset('front-assets/images/instalacoes/008.jpg') }}" data-lightbox="gallery"><img alt="project" src="{{ asset('front-assets/images/instalacoes/008.jpg') }}"></a>
                        <a href="{{ asset('front-assets/images/instalacoes/009.jpg') }}" data-lightbox="gallery"><img alt="project" src="{{ asset('front-assets/images/instalacoes/009.jpg') }}"></a>
                    </div>
                    <div class="slider-projects-nav">
                        <a class="box-icon" href="{{ asset('front-assets/images/instalacoes/009.jpg') }}" data-lightbox="gallery"><i class="fa fa-th-large"></i></a>
                    </div>

            </div>


        </div><!-- .container -->
    <div class="margin-70"></div>

    </section>

@endsection