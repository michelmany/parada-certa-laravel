@extends('painel.template')
@section('content')

<div class="container-fluid">
    <div class="side-body">

        <div class="page-title">
            <span class="title">Editando Banner ID#{{$banner->id}}</span>
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

                        {!! Form::model($banner, ['route'=>['sliders.update', $banner->id]]) !!}

                            <div class="sub-title">Envie de arquivo</div>

                            <div class="row">

                                <div class="col-md-4">
                                    <div class="form-group">
                                        {!! Form::label('title', 'Título:') !!}
                                        {!! Form::text('title', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        {!! Form::label('link', 'Link:') !!}
                                        {!! Form::text('link', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>     

                            </div>
                       
                            <button type="submit" class="btn btn-primary">Atualizar</button>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection