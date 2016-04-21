@extends('painel.template')
@section('content')

<div class="container-fluid">
    <div class="side-body">

        <div class="page-title">
            <span class="title">Banner da Página Principal</span>
        </div>

        <div class="row">
            <div class="col-lg-8 col-md-12 col-xs-12">
                <div class="card">
                    <div class="card-body">

                        <div class="sub-title">Clique e arraste para re-ordenar os banners</div>

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

                        @if(Session::has('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                        @endif

                        <ul id="sortable" data-token="{!! csrf_token() !!}">
                            @foreach ($banners as $banner)
                       
                                <li class="view view-first sliderImg" id="{{ $banner->id }}">
                                    <img src="{{ url('img/slider/' . $banner->image_url . '?w=200&h=130&fit=crop') }}"> 
                                    <div class="mask">
                                        <p>{{ $banner->title }}</p>
                                        <a class="btn btn-warning" href="{{ route('sliders.edit', $banner->id) }}" title="Editar">
                                            <i class="fa fa-wrench"></i>
                                        </a>                      
                                        <a class="btn btn-danger" href="{{ route('sliders.destroy', $banner->id) }}" title="Excluir"><i class="fa fa-remove"></i></a>
                                    </div> 
                                </li>  

                            @endforeach                       
                        </ul>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection