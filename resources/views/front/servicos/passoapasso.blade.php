@extends('front.template')
@section('content')

    <section class="big-title-container" id="page-title-about">
        <div class="big-title dark-cover-8">
            <div class="big-title-wrapper">
                <div class="container">
                    <div class="big-title-content">
                        <h1>Habilitação Passo a Passo</h1>
                        Faça sua matrícula agora mesmo!
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>

        <div class="container">
            <div class="col-md-12">

                <div class="row text-center">
                    <div class="col-md-12">
                        <h2 class="short word-rotator-title">Tirar sua Habilitação na Parada Certa é <span class="js-rotating word-rotate">Fácil. | Tranquilo. | Seguro. | Confortável.</span></h2>
                        <p class="lead">Pensando em você, a Auto Escola Parada Certa explica abaixo todo o passo a passo para você tirar sua 1ª Habilitação. Para fazer sua Matrícula Online agora, <a href="{{ route('matricula.online') }}" class="yellow-text">Clique Aqui!</a></p>
                    </div>
                </div>

                <hr />

                <h2>Passo a Passo</h2>
                <div>
                    <h4>1º Passo:</h4>
                    <p> Solicite no CFC Parada Certa a abertura do processo junto ao DETRAN-RJ e matrícula do aluno(a), mediante a emissão do boleto bancário para pagamento da Taxa (DUDA) do DETRAN-RJ  para o processo de 1ª habilitação e efetue o recolhimento das taxas junto ao Banco Bradesco  e devolva na secretaria do CFC.</p>

                    <h4>2º Passo:</h4>
                    <p>Na secretaria do CFC solicite o agendamento da foto e biometria junto ao DETRAN-RJ (Captura de Imagem e Digitais). Com o protocolo em mãos vá ao local indicado (DETRAN) com antecedência mínima de 30 minutos. Não esqueça o seu RG, imprescindível para captura de imagens e digitais, após retorne ao CFC.</p>

                    <h4>3º Passo:</h4>
                    <p>Na secretaria do CFC solicite o agendamento do Exame de Aptidão Física e Mental e Avaliação Psicológica. Com o protocolo em mãos vá ao local indicado (CLINICAS CREDENCIADAS PELO DETRAN), chegando com antecedência mínima de 30 minutos. Não esqueça o RG, é imprescindível para realização dos exames. Não esqueça, caso utilize lentes corretivas (lentes ou óculos) serão obrigatória para o exame.</p>

                    <h4>4º Passo:</h4>
                    <p>Na secretaria do CFC solicite o agendamento das aulas teóricas. Para iniciar as aulas é necessário que esteja apto nos exames. São 45 aulas divididas em 20 dias, no período da manhã, tarde ou noite. Este curso abrange as matérias e as respectivas cargas horárias conforme quadro abaixo:</p>

                    <table border="0" cellspacing="0" cellpadding="0">
                        <tbody>
                        <tr>
                            <th width="240" align="center">Disciplina</th>
                            <th width="90">Horas/Aula</th>
                        </tr>
                        <tr>
                            <td>Direção Defensiva</td>
                            <td>16</td>
                        </tr>
                        <tr>
                            <td>Primeiros Socorros</td>
                            <td>04</td>
                        </tr>
                        <tr>
                            <td>Legislação de Trânsito</td>
                            <td>18</td>
                        </tr>
                        <tr>
                            <td>Meio Ambiente e Cidadania</td>
                            <td>04</td>
                        </tr>
                        <tr>
                            <td>Mecânica Básica de Veículos</td>
                            <td>03</td>
                        </tr>
                        </tbody>
                    </table>

                    <div class="margin-40"></div>

                    <h4>5º Passo:</h4>
                    <p>Após concluir as aulas teóricas, o aluno(a) deverá realizar o teste simulado, a fim de avaliar seus conhecimentos para realização do exame teórico no DETRAN-RJ.</p>

                    <h4>6º Passo:</h4>
                    <p>Mediante o resultado apto no simulado, na Secretaria do CFC, será agendado o seu Exame Teórico (Exame de Legislação) junto ao DETRAN. Com o protocolo de agendamento do exame em mãos vá ao local indicado com antecedência mínima de 30 minutos. Não esqueça o RG, imprescindível para realização dos exames.</p>

                    <p>O exame é realizado depois da aprovação nos exames médico e psicotécnico e conclusão do curso teórico. O teste é de múltipla escolha, com duração de 30 minutos e acontece no DETRAN/RJ. Há necessidade de acerto de 70% para a aprovação.</p>

                    <h4><strong>7º Passo:</strong></h4>
                    <p>Na Secretaria do CFC solicite o agendamento das aulas práticas de direção veicular, escolhendo os horários e datas mais adequados às suas necessidades, respeitando os horários de funcionamento do CFC. Nas aulas práticas, o aluno(a) fará treinamento.</p>

                    <p>O curso prático de carro consiste em uma carga horária de 20 (vinte) aulas práticas de 50 minutos, sendo obrigatórias 4(quatro) aulas no período noturno.</p>

                    <h4>8º Passo:</h4>
                    <p>Seu instrutor durante todo o aprendizado prático emite relatório de desenvolvimento e faltas utilizando-se do mesmo critério de avaliação do DETRAN, a fim de corrigir suas dificuldades a cada aula. Ao final da carga horária ira avaliar os resultados alcançados e emitir a liberação para o Exame Prático, seguindo os critérios de avaliação do DETRAN, depois de cumprido com a pontuação exigida para aprovação junto ao DETRAN.</p>

                    <h4>9º Passo:</h4>
                    <p>Parabéns! Aguarde a chegada de sua CNH em cinco dias ao posto do DETRAN-RJ qe foi feito o cadastro.</p>
            </div>
        </div>
        <hr />

        <div class="container">

            <div class="row">
                <div class="col-md-12">

                        <h2>Dicas</h2>
                        <div class="col-md-4">
                            <div class="feature-box secundary">
                                <div>
                                    <p><i class="fa  fa-asterisk"></i> Não tenha pressa. Ao realizar suas aulas com tranquilidade, conseguirá absorver melhor o conteúdo, manter a calma é fundamental para o seu desempenho;</p>
                                </div>
                            </div>
                            <div class="feature-box secundary">
                                <div>
                                    <p><i class="fa fa-asterisk"></i> Para as aulas práticas, use um calçado confortável, baixo e fechado, isso vai ajudá-lo numa melhor percepção da sensibilidade dos pedais;</p>
                                </div>
                            </div>
                            <div class="feature-box secundary">
                                <div>
                                    <p><i class="fa fa-asterisk"></i> Não tente dirigir antes de tirar a carteira, pois é necessário seguir as orientações de um instrutor, ou isso pode prejudicá-lo nas aulas;</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="feature-box secundary">
                                <div>
                                    <p><i class="fa fa-asterisk"></i> Ajuste o banco em uma posição confortável, que lhe proporcione não só o alcance dos pedais mas também uma boa movimentação dos braços e pernas;</p>
                                </div>
                            </div>
                            <div class="feature-box secundary">
                                <div>
                                    <p><i class="fa fa-asterisk"></i> Mantenha os retrovisores ajustados. Para dirigir bem o motorista deve sentir-se seguro em relação ao que consegue ver;</p>
                                </div>
                            </div>
                            <div class="feature-box secundary">
                                <div>
                                    <p><i class="fa fa-asterisk"></i> Observar o trânsito ao longe, condiciona o motorista à utilização da direção defensiva;</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="feature-box secundary">
                                <div>
                                    <p><i class="fa fa-asterisk"></i> Lembre-se: antes de ser condutor, você também é um pedestre. Respeite-o;</p>
                                </div>
                            </div>
                            <div class="feature-box secundary">
                                <div>
                                    <p><i class="fa fa-asterisk"></i> Respeite seus limites. Não adianta forçar o aprendizado, isso apenas aumenta o nervosismo e o prejudica como aluno;</p>
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