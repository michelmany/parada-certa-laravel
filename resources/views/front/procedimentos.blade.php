@extends('front.template')
@section('content')

    <section class="big-title-container" id="page-title-about">
        <div class="big-title dark-cover-8">
            <div class="big-title-wrapper">
                <div class="container">
                    <div class="big-title-content">
                        <h1>Matrícula Passo a Passo</h1>
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
                        <p class="lead">Pensando em você, a Auto Escola Parada Certa criou a Matrícula Online, para você adiantar a sua inscrição na Autoescola e economizar tempo. Abaixo você pode conferir os procedimentos para sua Matrícula. Para informações completas sobre o Passo a Passo para sua 1ª Habilitaçao, <a href="{{ route('matricula.online') }}" class="yellow-text">Clique Aqui!</a></p>
                    </div>
                </div>
            </div>

            <hr />

            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4">

                            <div>
                                <h4><span class="alternative-font">1. </span>Pré-matrícula.</h4>
                                <p class="tall">Para agilizar o atendimento e sua Matrícula, será feito inicialmente a Inscrição Online, é muito simples e fácil, será preenchido algumas informações e logo em seguida, entraremos em contato com o aluno para dar continuidade. Para fazer agora, <a href="matricula.html">Clique Aqui!</a></p>
                            </div>

                            <div>
                                <h4><span class="alternative-font">2. </span>Cadastro no Sistema.</h4>
                                <p class="tall">O Candidato deverá comparecer até a Autoescola para apresentar os documentos originais, fazer o cadastro no sistema, retirar o material Didático, reconhecer o contrato e realizar o pagamento da primeira parcela do curso.</p>
                            </div>

                    </div>
                    <div class="col-md-4">

                            <div>
                                <h4><span class="alternative-font">3. </span>Pagamento do Curso.</h4>
                                <p class="tall">O pagamento do seu curso poderá ser parcelado em até 6x sem juros nos cartões de crédito ou no dinheiro, através de crediário próprio "Sem consulta ao SPC e Serasa".</p>
                            </div>

                            <div>
                                <h4><span class="alternative-font">4. </span>Cadastro no Detran.</h4>
                                <p class="tall">Mediante ao pagamento do DUDA confirmado, o Candidato será encaminhado para uma instituição, onde fará o cadastro no Dentran e retirada do seu "RENACH".</p>
                            </div>

                    </div>
                    <div class="col-md-4">

                            <div>
                                <h4><span class="alternative-font">5. </span>Exame Médico e Psicotécnico.</h4>
                                <p class="tall">Com o "RENACH" em mãos, o proximo procedimento será marcar os exames de sanidade física e mental e o psicotécnico, é cobrado uma taxa para esse serviço realizado em clinicas autorizadas pelo Detran.</p>
                            </div>

                            <div>
                                <h4><span class="alternative-font">6. </span>Pronto!</h4>
                                <p class="tall">Tudo certo, após o processo de matrícula o Canditado, está liberado e em condições de iniciar suas aulas e respectivos exames. Entenda melhor o Passo a Passo, <a href="passoapasso.html">Clique Aqui!</a></p>
                            </div>

                    </div>
                </div>

        </div>

        </div>





        <div class="margin-70"></div>

    </section>

@endsection