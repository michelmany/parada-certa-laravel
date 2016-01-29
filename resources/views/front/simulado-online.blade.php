@extends('front.template')
@section('content')

    <section class="big-title-container" id="page-title-about">
        <div class="big-title dark-cover-8">
            <div class="big-title-wrapper">
                <div class="container">
                    <div class="big-title-content">
                        <h1>Simulado Detran</h1>
                        Faça aqui seu simulado
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">

            <iframe id="blockrandom"
            name="iframe"
            src="http://simulado.detran.rj.gov.br/"
            width="100%"
            height="800px"
            scrolling="yes"
            align="center"
            frameborder="0"
            class="wrapper">
            Esta opção não irá funcionar corretamente. Infelizmente seu navegador não oferece suporte a iframes.
        </iframe>

        <div class="margin-35"></div>

    </div><!-- .container -->
    <div class="margin-70"></div>

    </section>

@stop