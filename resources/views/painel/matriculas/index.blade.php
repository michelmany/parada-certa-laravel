@extends('painel.template')
@section('content')

<div class="container-fluid">
    <div class="side-body">
        <div class="page-title">
        <span class="title">Matrículas</span>
            <div class="description">Listagem de matrículas cadastradas no sistema</div>
        </div>
        <div class="row">
            <div class="col-md-8 col-xs-12">
                <div class="card">
                    <div class="card-body">
                        <table class="datatable table table-striped" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Email</th>
                                    <th>Cidade</th>
                                    <th width="120px">Ações</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Nome</th>
                                    <th>Email</th>
                                    <th>Cidade</th>
                                    <th>Ações</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach($matriculas as $matricula)
                                <tr>
                                    <td>{{ $matricula->nome }}</td>
                                    <td>{{ $matricula->email }}</td>
                                    <td>{{ $matricula->cidade }}</td>
                                    <td>
                                        <button class="btn btn-warning btn-sm">Visualizar</button>
                                        <button class="btn btn-danger btn-sm">Deletar</button>
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