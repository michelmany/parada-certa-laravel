@extends('front.template')
@section('content')

    <section class="big-title-container" id="page-title-about">
        <div class="big-title dark-cover-8">
            <div class="big-title-wrapper">
                <div class="container">
                    <div class="big-title-content">
                        <h1>CATEGORIA AB (MOTO E CARRO)</h1>
                        Faça sua matrícula agora mesmo!
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>

        <div class="container">

            @include('front.servicos._menu-categoria-ab')

            <div class="margin-60"></div>

            <div class="col-md-9">
                <h1>1ª Habilitação - Moto e Carro (AB)</h1><hr>
                <div class="row">
                    <div class="col-md-8">
                        <p class="lead">
                            Esta primeira habilitação pode ser solicitada nas categorias “A e B”. (categoria A - Motocicletas. categoria B - Veículos motorizados cujo peso máximo autorizado não exceda a 3,5 toneladas e não ultrapasse de 8 (oito) lugares além do condutor).
                        </p>
                        <p><strong>O candidato deve atender aos seguintes pré-requisitos:</strong> <br>
                        </p>
                        <ul>
                            <li>ser maior de 18 anos;</li>
                            <li>saber ler e escrever;</li>
                            <li>possuir carteira de identidade ou equivalente;</li>
                            <li>possuir CPF próprio.</li>
                        </ul>
                        <p><strong>Documentos necessários.</strong></p>
                        <ul>
                            <li>RG, CPF, (também são válidos documentos de identidade militar emitidos pelo Ministério da Defesa);</li>
                            <li>Comprovante de endereço(conta de luz, água, telefone, etc), preferencialmente no nome do candidato ou no nome dos pais), e que seja recente;</li>

                        </ul>
                        <p><strong>Nota: Os documentos devem estar em bom estado de conservação e o RG deve conter foto recente que possibilite a identificação do candidato.</strong></p>
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
                                        <p class="tall">Realizar a matricula na Auto Escola PARADA CERTA apresentando toda documentação necessária e pagamento da primeira parcela;</p>
                                    </div>
                                </div>
                                <div class="feature-box">
                                    <div class="feature-box-info">
                                        <h4><span class="label label-warning">2</span> Detran</h4>
                                        <p class="tall">Pagamento do DUDA, agendamento e cadastramento no Detran</p>
                                    </div>
                                </div>
                                <div class="feature-box">
                                    <div class="feature-box-info">
                                        <h4><span class="label label-warning">3</span> Médico/psicotécnico</h4>
                                        <p class="tall">Agendar  os exames médico/psicotécnico. Com o agendamento em mão, ir até o local indicado para fazer os exames e fazer o pagamento do mesmo;</p>
                                    </div><strong></strong>
                                </div>
                                <div class="feature-box">
                                    <div class="feature-box-info">
                                        <h4><span class="label label-warning">4</span> Aula Teórica</h4>
                                        <p class="tall">Retornar a Auto Escola PARADA CERTA com exame para agendar o curso teórico (45 aulas);</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-box">
                                    <div class="feature-box-info">
                                        <h4><span class="label label-warning">5</span> Exame Teórico</h4>
                                        <p class="tall">Concluído o curso teórico, realizar o exame teórico de habilitação;</p>
                                    </div>
                                </div>
                                <div class="feature-box">
                                    <div class="feature-box-info">
                                        <h4><span class="label label-warning">6</span> Aulas no Simulador</h4>
                                        <p class="tall">Após ter sido aprovado no exame teórico, realizar as aulas no simulador de direção veicular (5 aulas);</p>
                                    </div>
                                </div>                                
                                <div class="feature-box">
                                    <div class="feature-box-info">
                                        <h4><span class="label label-warning">6</span> Aula Prática</h4>
                                        <p class="tall">Após as aulas no simulador, agendar as aulas práticas de direção veicular de carro (20 aulas) e moto (20 aulas);</p>
                                    </div>
                                </div>
                                <div class="feature-box">
                                    <div class="feature-box-info">
                                        <h4><span class="label label-warning">7</span> Exame de Direção</h4>
                                        <p class="tall">Após ter cumprido integralmente as aulas práticas, realizar o exame prático de direção;</p>
                                    </div>
                                </div>
                                <div class="feature-box">
                                    <div class="feature-box-info">
                                        <h4><span class="label label-warning">8</span> Retirada da Habilitação</h4>
                                        <p class="tall">Com a aprovação do exame prático, retirar a habilitação no Detran num prazo de 4 dias úteis.</p>
                                    </div>
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
                                    <p>Motocicletas novas;<br>
                                        Leves;<br>
                                        Controle de velocidade.<br>
                                        Carros novos;<br>
                                        Ar-condicionado;<br>
                                        Direção Elétrica/Hidráulica.
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