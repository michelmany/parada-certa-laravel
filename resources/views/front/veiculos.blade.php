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

            <div class="col-md-12">

                <h3>Carros e Motos - Parada Certa</h3>
                <div id="slider-projects">
                    <a href="{{ asset('front-assets/images/veiculos/001.jpg') }}" data-lightbox="gallery"><img alt="project" src="{{ asset('front-assets/images/veiculos/001.jpg') }}"></a>
                    <a href="{{ asset('front-assets/images/veiculos/002.jpg') }}" data-lightbox="gallery"><img alt="project" src="{{ asset('front-assets/images/veiculos/002.jpg') }}"></a>
                    <a href="{{ asset('front-assets/images/veiculos/003.jpg') }}" data-lightbox="gallery"><img alt="project" src="{{ asset('front-assets/images/veiculos/003.jpg') }}"></a>
                    <a href="{{ asset('front-assets/images/veiculos/004.jpg') }}" data-lightbox="gallery"><img alt="project" src="{{ asset('front-assets/images/veiculos/004.jpg') }}"></a>
                    <a href="{{ asset('front-assets/images/veiculos/005.jpg') }}" data-lightbox="gallery"><img alt="project" src="{{ asset('front-assets/images/veiculos/005.jpg') }}"></a>
                    <a href="{{ asset('front-assets/images/veiculos/009.jpg') }}" data-lightbox="gallery"><img alt="project" src="{{ asset('front-assets/images/veiculos/009.jpg') }}"></a>
                    <a href="{{ asset('front-assets/images/veiculos/010.jpg') }}" data-lightbox="gallery"><img alt="project" src="{{ asset('front-assets/images/veiculos/010.jpg') }}"></a>
                    <a href="{{ asset('front-assets/images/veiculos/006.jpg') }}" data-lightbox="gallery"><img alt="project" src="{{ asset('front-assets/images/veiculos/006.jpg') }}"></a>
                    <a href="{{ asset('front-assets/images/veiculos/007.jpg') }}" data-lightbox="gallery"><img alt="project" src="{{ asset('front-assets/images/veiculos/007.jpg') }}"></a>
                    <a href="{{ asset('front-assets/images/veiculos/008.jpg') }}" data-lightbox="gallery"><img alt="project" src="{{ asset('front-assets/images/veiculos/008.jpg') }}"></a>
                </div>
                <div class="slider-projects-nav">
                    <a class="box-icon" href="{{ asset('front-assets/images/veiculos/010.jpg') }}" data-lightbox="gallery"><i class="fa fa-th-large"></i></a>
                </div>
            </div>


        </div><!-- .container -->
    <div class="margin-70"></div>

    </section>

@endsection