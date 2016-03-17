@extends('painel.template')
@section('content')

<div class="container-fluid">
    <div class="side-body">
        <div class="page-title">
            <span class="title">Editar Matrícula</span>
            <div class="description">Editando matrícula de ID: {{ $matricula->id }}</div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-12 col-xs-12">
                <div class="card">
                    <div class="card-body">

                        @if($errors->any())
                            @foreach($errors->all() as $error)
                                <ul class="alert alert-warning alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    {{ $error }}
                                </ul>
                            @endforeach
                        @endif

                        {!! Form::model($matricula, ['route'=>['matriculas.update', $matricula->id], 'method'=>'put']) !!}

                            @include('painel.matriculas._form')

                            <button type="submit" class="btn btn-primary">Atualizar</button>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection