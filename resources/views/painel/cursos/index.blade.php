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
                        <form class="form-inline">
                            <div class="form-group">
                                <input type="text" class="form-control input-lg" id="exampleInputName2" placeholder="Ex.: Habilitação Categoria A (Moto)" style="min-width:350px;">
                            </div>

                            <button type="submit" class="btn btn-primary btn-lg">Cadastrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@stop