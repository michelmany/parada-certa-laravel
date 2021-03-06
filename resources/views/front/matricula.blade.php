@extends('front.template')
@section('content')

    <section class="big-title-container" id="page-title-about" xmlns="http://www.w3.org/1999/html">
        <div class="big-title dark-cover-8">
            <div class="big-title-wrapper">
                <div class="container">
                    <div class="big-title-content">
                        <h1>Matrícula Online</h1>
                        Faça já sua Matrícula online
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if(Session::has('flash_message'))
                <div class="alert alert-success">
                    <i class="fa fa-check"></i><em> {!! session('flash_message') !!}</em>
                </div>
            @endif

            {!! Form::open(['method'=>'post', 'route'=>'matriculassite.store']) !!}

            <div class="sub-title">Informações pessoais</div>

            <div class="row">
                <div class="col-md-3">
                    <!-- Nome Form Input -->
                    <div class="form-group{{ $errors->has('nome') ? ' has-error' : '' }}">
                        {!! Form::label('nome', 'Nome:') !!}
                        {!! Form::text('nome', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="col-md-3">
                    <!-- Email Form Input -->
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        {!! Form::label('email', 'Email:') !!}
                        {!! Form::text('email', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="col-md-3">
                    <!-- Telefone Form Input -->
                    <div class="form-group">
                        {!! Form::label('telefone', 'Telefone fixo (DDD):') !!}
                        {!! Form::text('telefone', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="col-md-3">
                    <!-- Celular Form Input -->
                    <div class="form-group">
                        {!! Form::label('celular', 'Celular (DDD):') !!}
                        {!! Form::text('celular', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-2">
                    <!-- Cpf Form Input -->
                    <div class="form-group{{ $errors->has('cpf') ? ' has-error' : '' }}">
                        {!! Form::label('cpf', 'CPF:') !!}
                        {!! Form::text('cpf', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="col-md-2">
                    <!-- Rg Form Input -->
                    <div class="form-group">
                        {!! Form::label('rg', 'RG:') !!}
                        {!! Form::text('rg', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="col-md-2">
                    <!-- Emissor Form Input -->
                    <div class="form-group">
                        {!! Form::label('emissor', 'Orgão Emissor:') !!}
                        {!! Form::text('emissor', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="col-md-2">
                    <!-- Data_nasc Form Input -->
                    <div class="form-group">
                        {!! Form::label('data_nasc', 'Data de nascimento:') !!}
                        {!! Form::text('data_nasc', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="col-md-2">
                    <!-- Nome_mae Form Input -->
                    <div class="form-group">
                        {!! Form::label('nome_mae', 'Nome da mãe:') !!}
                        {!! Form::text('nome_mae', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="col-md-2">
                    <!-- Nome_pai Form Input -->
                    <div class="form-group">
                        {!! Form::label('nome_pai', 'Nome do pai:') !!}
                        {!! Form::text('nome_pai', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
            </div>

            <div class="sub-title">Endereço</div>

            <div class="row">
                <div class="col-md-4">
                    <!-- Logradouro Form Input -->
                    <div class="form-group">
                        {!! Form::label('logradouro', 'Logradouro:') !!}
                        {!! Form::text('logradouro', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="col-md-2">
                    <!-- Numero Form Input -->
                    <div class="form-group">
                        {!! Form::label('numero', 'Número:') !!}
                        {!! Form::text('numero', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- Complemento Form Input -->
                    <div class="form-group">
                        {!! Form::label('complemento', 'Complemento:') !!}
                        {!! Form::text('complemento', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <!-- Bairro Form Input -->
                    <div class="form-group">
                        {!! Form::label('bairro', 'Bairro:') !!}
                        {!! Form::text('bairro', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="col-md-3">
                    <!-- Cidade Form Input -->
                    <div class="form-group">
                        {!! Form::label('cidade', 'Cidade:') !!}
                        {!! Form::text('cidade', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="col-md-4">
                    <!-- Cep Form Input -->
                    <div class="form-group">
                        {!! Form::label('cep', 'Cep:') !!}
                        {!! Form::text('cep', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="col-md-2">

                    <!-- Uf Form Select -->
                    <div class="form-group">
                        {!! Form::label('uf', 'UF:') !!}
                        {!! Form::select('uf',
                        array(
                        'AC' => 'AC',
                        'AL' => 'AL',
                        'AM' => 'AM',
                        'AP' => 'AP',
                        'BA' => 'BA',
                        'BA' => 'BA',
                        'CE' => 'CE',
                        'DF' => 'DF',
                        'ES' => 'ES',
                        'GO' => 'GO',
                        'MA' => 'MA',
                        'MT' => 'MT',
                        'MS' => 'MS',
                        'MG' => 'MG',
                        'PA' => 'PA',
                        'PB' => 'PB',
                        'PR' => 'PR',
                        'PE' => 'PE',
                        'PI' => 'PI',
                        'RJ' => 'RJ',
                        'RN' => 'RN',
                        'RS' => 'RS',
                        'RO' => 'RO',
                        'RR' => 'RR',
                        'SC' => 'SC',
                        'SP' => 'SP',
                        'SE' => 'SE',
                        'TO' => 'TO',
                        ), isset($matricula->uf) ? $matricula->uf : 'RJ',

                        ['class' => 'form-control']) !!}

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="sub-title">Cursos e Categorias</div>

                    <!-- Curso_id Form Input -->

                        @foreach ($cursos as $curso)
                        <div class="checkbox">
                            <label>
                            {!! Form::checkbox('curso_id[]', $curso->id, isset($selectedCursos) ? array_key_exists($curso->id, $selectedCursos) : false, ['class' => 'checkbox', 'id' => $curso->id]) !!}
                            {{ $curso->nome }}
                            </label>
                        </div>
                        @endforeach


                </div>

                <div class="col-md-6">
                    <div class="sub-title">Como conheceu a Auto Escola Parada Certa?</div>

                    <!-- Como Conheceu Form Select -->
                    <div class="form-group">
                        {!! Form::select('como_conheceu',
                        array(
                        'Tradição / Referência' => 'Tradição / Referência',
                        'Panfleto' => 'Panfleto',
                        'Facebook' => 'Facebook',
                        'Localização' => 'Localização',
                        'Indicação' => 'Indicação',
                        'Outros' => 'Outros',
                        ), isset($matricula->como_conheceu) ? $matricula->como_conheceu : 'Selecione',

                        ['class' => 'form-control']) !!}
                    </div>


                </div>
            </div>

            <button type="submit" class="btn btn-box-gray btn-big">Finalizar inscrição</button>

            {!! Form::close() !!}


        </div><!-- .container -->
    <div class="margin-70"></div>

    </section>

@endsection