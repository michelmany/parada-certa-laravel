@extends('painel.template')

@section('content')

<!-- Main Content -->
<div class="container-fluid">
    <div class="side-body">

        <div class="page-title">
            <span class="title">Cursos</span>
            <div class="description">Adicione o nome do curso e categoria</div>
        </div>

        <div class="row">
            <div class="col-xs-12">
                <div class="card">
                    <!--
                    <div class="card-header">
                        <div class="card-title">
                            <div class="title">Inline form</div>
                        </div>
                    </div>
                     -->
                    <div class="card-body">


                        {!! Form::open(['method'=>'post', 'route'=>'cursos.store', 'class'=>'form-inline']) !!}

                            <!-- Nome Form Input -->
                            <div class="form-group">
                                {!! Form::text('nome', null,
                                    [
                                        'class' => 'form-control input-lg',
                                        'placeholder'=>'Ex.: Habilitação Categoria A (Moto)',
                                        'style'=>'min-width:350px;'
                                    ]) !!}
                            </div>

                            <button type="submit" class="btn btn-primary btn-lg">Cadastrar</button>

                        {!! Form::close() !!}

                        <hr>

                        <table class="datatable table table-striped" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>Nome</th>

                                <th width="50px">Ações</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>Nome</th>

                                <th>Ações</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach($cursos as $curso)
                                <tr>
                                    <td>{{ $curso->nome }}</td>
                                    <td>
                                        <a href="{{ route('cursos.destroy', ['id' => $curso->id]) }}" class="btn btn-danger btn-sm">Deletar</a>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@stop