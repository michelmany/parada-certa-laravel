@extends('front.template')
@section('content')

    <section class="big-title-container" id="page-title-about">
        <div class="big-title dark-cover-8">
            <div class="big-title-wrapper">
                <div class="container">
                    <div class="big-title-content">
                        <h1>Todas categorias</h1>
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

                <h1>Real Infrator</h1>

                <hr>

                <div class="row">
                    <div class="col-md-8">
                        <p class="lead">
                            "O bom condutor é aquele que pratica".
                        </p>

                        <p>O Real Infrator é aquele que chegou ao limite de pontuação em sua CNH, cometeu 20 pontos ou mais e com isso o mesmo terá que entregar sua CNH ao orgão (DETRAN). Se tiver vencida o mesmo renovará pagando um DUDA de renovação e fará o trâmite da renovãção.</p>

                        <p><strong>O candidato deve atender aos seguintes pré-requisitos:</strong></p>
                        <ul>
                            <li>Ser habilitado na categoria para a qual deseja realizar o treinamento;</li>
                        </ul>

                        <p><strong>Documentos necessários.</strong></p>
                        <ul>
                            <li>RG, CPF, (também são válidos documentos de identidade militar emitidos pelo Ministério da Defesa);</li>
                            <li>Comprovante de endereço(conta de luz, água, telefone, etc), preferencialmente no nome do candidato ou no nome dos pais), e que seja recente;</li>
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
                                        <p>Realizar a matricula na Auto Escola Plazza apresentando toda documentação necessária e pagamento do pacote solicitado;</p>
                                    </div>
                                </div>
                                <div class="feature-box">
                                    <div class="feature-box-info">
                                        <h4><span class="label label-warning">2</span> Aula Teórica</h4>
                                        <p>Realizar o agendamento das aulas do curso teórico (30 aulas);</p>
                                    </div>
                                </div>
                                <div class="feature-box">
                                    <div class="feature-box-info">
                                        <h4><span class="label label-warning">3</span> Exame Teórico</h4>
                                        <p>Concluído o curso teórico, realizar o exame teórico de habilitação;</p>
                                    </div>
                                </div>
                                <div class="feature-box">
                                    <div class="feature-box-info">
                                        <h4><span class="label label-warning">4</span> Retirada da Habilitação</h4>
                                        <p>Após a aprovação o infrato deverá ir ao Detran em que entregou sua CNH e entregará o certificado que a AutoEscola irá emitir junto com o Renach de aprovação de prova teórica e pegará a sua CNH.</p>
                                    </div><strong></strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="margin-80"></div>

                <div class="row col-md-6">

                    <h3>Vantagens:</h3><hr>

                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                        <i class="fa fa-dashboard"></i>
                                        Veículos
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="accordion-body collapse in">
                                <div class="panel-body">
                                    <p>Veículos novos;<br/>
                                        Ar-condicionado;<br/>
                                        Direção Elétrica/Hidráulica.<br/>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                        <i class="fa fa-sitemap"></i>
                                        Auto Escola
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="accordion-body collapse">
                                <div class="panel-body">
                                    Centro de Formação de Condutores próprio;<br/>
                                    Instrutores experientes;<br/>
                                    Atendimento qualificado;<br/>
                                    Agilidade no processo;<br/>
                                    Disponibilidade de horários;<br/>
                                    Facilidade no pagamento;<br/>
                                    Preço justo.<br/>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>



        <div class="margin-70"></div>

    </section>

@endsection