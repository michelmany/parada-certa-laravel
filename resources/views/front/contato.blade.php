@extends('front.template')

@section('content')

    <section class="big-title-container" id="page-title-contact">
        <div class="big-title dark-cover-8">
            <div class="big-title-wrapper">
                <div class="container">
                    <div class="big-title-content">
                        <h1>Contato</h1>
                        Fale conosco
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="no-top-padding">
        <div id="map-container">
            <div id="map-canvas"></div>
            <div id="map-placeholder"></div>
            <div class="container">
                <div class="box">
                    <h5>Envie-nos uma mensagem</h5>
                    <form id="form-contact" action="assets/php/send_email.php" method="post" data-email-not-set-msg="Email obrigatório" data-message-not-set-msg="Message is required" data-name-not-set-msg="Name is required" data-ajax-fail-msg="Request could not be sent, try later" data-success-msg="Email successfully sent.">
                        <div class="row">
                            <div class="col-sm-5">
                                <input type="text" name="name" placeholder="Nome">
                                <input type="email" name="email" placeholder="Email">
                                <input type="text" name="website" placeholder="Assunto">
                            </div>
                            <div class="col-sm-7">
                                <textarea name="message" placeholder="Mensagem"></textarea>
                                <div class="text-right">
                                    <input type="submit" value="Enviar Mensagem">
                                </div>
                            </div>
                        </div>
                        <div class="return-msg"></div>
                    </form>
                    <hr>
                    <div class="row row-big">

                        <div class="col-md-6 col-sm-6 responsive-column-xs">
                            <h5>Endereço</h5>
                            <p>
                                Av. Feliciano Sodré, 101 - Centro - Niterói - RJ
                            </p>
                        </div>
                        <div class="col-md-6 col-sm-6 responsive-column-xs">
                            <h5>Fale conosco</h5>
                            <p>
                                Tel.: (21) 3021-7611<br>
                                Tel.: (21) 3021-7712<br>
                                contato@autoescolaparadacerta.com.br<br>
                            </p>
                        </div>
                    </div><!-- .row -->
                </div><!-- .box -->
            </div><!-- .container -->
        </div><!-- #map-container -->
    </section>

@stop