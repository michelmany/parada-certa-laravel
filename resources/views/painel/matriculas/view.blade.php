@extends('painel.template')
@section('content')

    <div class="container-fluid">
        <div class="side-body">

            <div class="page-title">
                <span class="title">Matrículas</span>
                <div class="description">Cadastre novas matrículas no sistema</div>
            </div>

            <div class="row">
                <div class="col-lg-8 col-md-12 col-xs-12">
                    <div class="card">
                        <div class="card-body">

                            {!! Form::model($matricula) !!}
                            @include('painel.matriculas._form')

                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection