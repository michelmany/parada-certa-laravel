@extends('front.template')
@section('content')

    <section class="big-title-container" id="page-title-about">
        <div class="big-title dark-cover-8">
            <div class="big-title-wrapper">
                <div class="container">
                    <div class="big-title-content">
                        <h1>Categoria A (Moto)</h1>
                        Faça sua matrícula agora mesmo!
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>

        <div class="container">

            @include('front.servicos._menu-categoria-a')

            <div class="margin-60"></div>

            <div class="col-md-9">

                <h1>Aulas Práticas Avulsas</h1>

                <hr>

                <div class="row">
                    <div class="col-md-8">
                        <p class="lead">
                            "O bom condutor é aquele que pratica".
                        </p>
                        <p>Serão considerados pacotes quando ultrapassar ou igualar a quantidade de 5 treinos. Só serão permitidos treinos avulsos para quem: Possui CNH ou está em processo de habilitação já estando na etapa de treinamento.</p>

                        <p><strong>O candidato deve atender aos seguintes pré-requisitos:</strong></p>
                        <ul>
                            <li>Ser habilitado na categoria para a qual deseja realizar as aulas ou estar no processo de treinamento prático;</li>
                            <li>A Carteira Nacional de Habilitação (CNH) deverá estar em situação regular (não ter sido cassada, suspensa ou com portaria do Detran;</li>
                        </ul>

                        <p><strong>Documentos necessários.</strong></p>
                        <ul>
                            <li>RG, CPF e CNH atual</li>
                        </ul>

                    </div>
                    <div class="col-md-4">
                        <a href="{{ route('tabela.precos') }}" class="btn-box-color btn-big margin-left-lg">Ver Preço</a>
                    </div>
                </div>

                <div class="margin-80"></div>

                <div class="row">
                    <div class="col-md-12">
                        <h3>Passo a Passo</h3><hr>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="feature-box">
                                    <div class="feature-box-info">
                                        <h4><span class="label label-warning">1</span> Matrícula</h4>
                                        <p>Realizar a matricula na Auto Escola Plazza apresentando toda documentação necessária e pagamento do pacote solicitado. Mais, se você já é nosso aluno, basta solicitar seu pacote extra;</p>
                                    </div>
                                </div>
                                <div class="feature-box">
                                    <div class="feature-box-info">
                                        <h4><span class="label label-warning">2</span> Marcação da Aula</h4>
                                        <p>Realizar o agendamento de aulas junto a secretaria da Auto Escola Plazza;</p>
                                    </div>
                                </div>
                                <div class="feature-box">
                                    <div class="feature-box-info">
                                        <h4><span class="label label-warning">3</span> Realização do Treinamento</h4>
                                        <p>Iniciar o treinamento no dia e horário marcados.</p>
                                    </div><strong></strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="margin-80"></div>

                {{--<div class="row col-md-6">--}}

                    {{--<h3>Vantagens:</h3><hr>--}}

                    {{--<div class="panel-group" id="accordion">--}}
                        {{--<div class="panel panel-default">--}}
                            {{--<div class="panel-heading">--}}
                                {{--<h4 class="panel-title">--}}
                                    {{--<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">--}}
                                        {{--<i class="fa fa-dashboard"></i>--}}
                                        {{--Veículos--}}
                                    {{--</a>--}}
                                {{--</h4>--}}
                            {{--</div>--}}
                            {{--<div id="collapseOne" class="accordion-body collapse in">--}}
                                {{--<div class="panel-body">--}}
                                    {{--<p>Veículos novos;<br/>--}}
                                        {{--Leves;<br/>--}}
                                        {{--Controle de velocidade.<br/>--}}
                                    {{--</p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="panel panel-default">--}}
                            {{--<div class="panel-heading">--}}
                                {{--<h4 class="panel-title">--}}
                                    {{--<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">--}}
                                        {{--<i class="fa fa-sitemap"></i>--}}
                                        {{--Auto Escola--}}
                                    {{--</a>--}}
                                {{--</h4>--}}
                            {{--</div>--}}
                            {{--<div id="collapseTwo" class="accordion-body collapse">--}}
                                {{--<div class="panel-body">--}}
                                    {{--Centro de Formação de Condutores próprio;<br/>--}}
                                    {{--Instrutores experientes;<br/>--}}
                                    {{--Atendimento qualificado;<br/>--}}
                                    {{--Agilidade no processo;<br/>--}}
                                    {{--Disponibilidade de horários;<br/>--}}
                                    {{--Facilidade no pagamento;<br/>--}}
                                    {{--Preço justo.<br/>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                    {{--</div>--}}
                {{--</div>--}}
            </div>

        </div>



        <div class="margin-70"></div>

    </section>

@endsection