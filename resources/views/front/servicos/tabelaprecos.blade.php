@extends('front.template')
@section('content')

    <section class="big-title-container" id="page-title-about">
        <div class="big-title dark-cover-8">
            <div class="big-title-wrapper">
                <div class="container">
                    <div class="big-title-content">
                        <h1>Tabela de preços</h1>
                        Faça sua matrícula agora mesmo!
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>

        <div class="container">

            <div class="margin-60"></div>

            <div class="col-md-12">
                <h1>Tabela de preços</h1><hr>
                <h4>Primeira Habilitação e Inclusão:</h4>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead class="thead-inverse">
                            <tr class="warning">
                                <th>Servi&ccedil;o</th>
                                <th>Descri&ccedil;&atilde;o</th>
                                <th>Cartão</th>
                                <th>Carnê</th>
                                <th width="100px;">Dinheiro</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>Primeira Habilita&ccedil;&atilde;o <strong>&quot;A&quot; (Moto)</strong></td>
                                <td><strong>Pacote Promocional:</strong> Matrícula, Material Didático, Marcação dos Exames, Curso Teórico (45 aulas), Curso Prático (20 aulas), Veículo para Exame.</td>
                                <td><strong>R$: 1000,00</strong><br> (em até 12x sem juros)</td>
                                <td><strong>R$: 900,00</strong><span><br>(1 + 2x de R$ 300,00)</span></td>
                                <td><strong>R$: 800,00</strong><span><br>(à vista)</span></td>
                            </tr>

                            <tr>
                                <td>Primeira Habilita&ccedil;&atilde;o <strong>&quot;B&quot; (Carro)</strong></td>
                                <td><strong>Pacote Promocional:</strong> Matrícula, Material Didático, Marcação dos Exames, Curso Teórico (45 aulas), Curso Prático (25 aulas), Veículo para Exame.</td>
                                <td><strong>R$: 1300,00</strong><br> (em até 12x sem juros)</td>
                                <td><strong>R$: 1200,00</strong><span><br>(1 + 5x de R$ 200,00)</span></td>
                                <td><strong>R$: 999,00</strong><span><br>(à vista)</span></td>
                            </tr>

                            <tr>
                                <td>Primeira Habilita&ccedil;&atilde;o <strong> A/B (Moto e Carro)</strong></td>
                                <td><strong>Pacote Promocional:</strong> Matrícula, Material Didático, Marcação dos Exames, Curso Teórico (45 aulas), Curso Prático (20 aulas para Categoria "A" e 25 aulas para Categoria "B"), Veículos para Exame.</td>
                                <td><strong>R$: 1600,00</strong><br> (em até 12x sem juros)</td>
                                <td><strong>R$: 1500,00</strong><span><br>(1 + 5x de R$ 250,00)</span></td>
                                <td><strong>R$: 1400,00</strong><span><br>(à vista)</span></td>
                            </tr>

                            <tr>
                                <td>Inclus&atilde;o de Categoria <strong>A (Moto)</strong></td>
                                <td><strong>Pacote Promocional:</strong> Matrícula, Marcação dos Exames, Curso Prático (15 aulas), Veículo para Exame.</td>
                                <td><strong>R$: 600,00</strong><br> (em até 12x sem juros)</td>
                                <td><strong>R$: 500,00</strong><span><br>(1 + 1x de R$ 250,00)</span></td>
                                <td><strong>R$: 400,00</strong><span><br>(à vista)</span></td>
                            </tr>

                        <tr>
                            <td>Inclus&atilde;o de Categoria <strong>&quot;B&quot;</strong></td>
                            <td><strong>Pacote Promocional:</strong> Matrícula, Marcação dos Exames, Curso Prático (20 aulas), Veículo para Exame.</td>
                            <td><strong>R$: 900,00</strong><br> (em até 12x sem juros)</td>
                            <td><strong>R$: 800,00</strong><span><br>(1 + 1x de R$ 400,00)</span></td>
                            <td><strong>R$: 700,00</strong><span><br>(à vista)</span></td>
                        </tr>

                        </tbody>
                    </table>
                </div>

                <div class="margin-60"></div>

                <h4>Aproveitamento de categoria</h4>

                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr class="warning">
                                <th>Serviço</th>
                                <th>Aluguel da Moto</th>
                                <th>Aula de Moto</th>
                                <th>Pacote</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Aproveitamento de Categoria <strong>"A"</strong></td>
                                <td><strong>R$ 200,00</strong></td>
                                <td><strong>50,00</strong></td>
                                <td><strong>350,00</strong> (Aluguel da Moto + 5 aulas práticas de Moto)</td>
                            </tr>
                            <tr>
                                <td>Aproveitamento de Categoria <strong>"B"</strong></td>
                                <td><strong>R$ 250,00</strong></td>
                                <td><strong>80,00</strong></td>
                                <td><strong>600,00</strong> (Aluguel do Carro + 5 aulas práticas de Carro)</td>
                            </tr>

                        </tbody>
                    </table>
                </div>

                <div class="margin-60"></div>

                <h4>Pagamentos Extras (DUDA e Clínica)</h4>

                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr class="warning">
                            <th>Servi&ccedil;o</th>
                            <th>C&oacute;digo</th>
                            <th>Valor</th>
                            <th>Forma de Pagamento</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Taxa de 1&ordf; Habilita&ccedil;&atilde;o</td>
                            <td>(cod.:201-1)</td>
                            <td><strong>R$ 229,36</strong></td>
                            <td><a href="http://www.bradesco.com.br/html/classic/produtos-servicos/outros/pagamentos.shtm" target="_blank">Bradesco - Detran</a></td>
                        </tr>
                        <tr>
                            <td>Taxa de Reexame</td>
                            <td>(cod.:202-0)</td>
                            <td><strong>R$ 85,73</strong></td>
                            <td><a href="http://www.bradesco.com.br/html/classic/produtos-servicos/outros/pagamentos.shtm" target="_blank">Bradesco - Detran</a></td>
                        </tr>
                        <tr>
                            <td>Exame M&eacute;dico/vista</td>
                            <td>(cod.:----)</td>
                            <td><strong>R$ 59,00</strong></td>
                            <td>Pagamento na Cl&iacute;nica</td>
                        </tr>
                        <tr>
                            <td>Exame Psicol&oacute;gico</td>
                            <td>(cod.:----)</td>
                            <td><strong>R$ 80,00</strong></td>
                            <td>Pagamento na Cl&iacute;nica</td>
                        </tr>
                        <tr>
                            <td>Taxa de CNH Definitiva</td>
                            <td>(cod.:204-6)</td>
                            <td><strong>R$ 114,68</strong></td>
                            <td><a href="http://www.bradesco.com.br/html/classic/produtos-servicos/outros/pagamentos.shtm" target="_blank">Bradesco - Detran</a></td>
                        </tr>
                        <tr>
                            <td>Taxa de 2&ordf; Via Habilita&ccedil;&atilde;o</td>
                            <td>(cod.:205-4)</td>
                            <td><strong>R$ 114,68</strong></td>
                            <td><a href="http://www.bradesco.com.br/html/classic/produtos-servicos/outros/pagamentos.shtm" target="_blank">Bradesco - Detran</a></td>
                        </tr>
                        <tr>
                            <td>Taxa de Adi&ccedil;&atilde;o de Categoria</td>
                            <td>(cod.:203-8)</td>
                            <td><strong>R$ 114,68</strong></td>
                            <td><a href="http://www.bradesco.com.br/html/classic/produtos-servicos/outros/pagamentos.shtm" target="_blank">Bradesco - Detran</a></td>
                        </tr>
                        <tr>
                            <td>Taxa de Permiss&atilde;o Internacional (PID)</td>
                            <td>(cod.:204-6)</td>
                            <td><strong>R$ 114,68</strong></td>
                            <td><a href="http://www.bradesco.com.br/html/classic/produtos-servicos/outros/pagamentos.shtm" target="_blank">Bradesco - Detran</a></td>
                        </tr>
                        </tbody>
                    </table>
                    <p>*OS VALORES E DISPONIBILIDADES EXPRESSOS NESTAS TABELAS PODEM SOFRER ALTERAÇÕES SEM AVISO PRÉVIO.</p>
                </div>


            <div class="margin-80"></div>





            </div>

        </div>

    <div class="margin-70"></div>

    </section>

@endsection