@extends('painel.template')

@section('content')
            <!-- Main Content -->
            <div class="container-fluid">
                <div class="side-body padding-top">
                    <div class="row">

                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <a href="#">
                                <div class="card red summary-inline">
                                    <div class="card-body">
                                        <i class="icon fa fa-users fa-4x"></i>
                                        <div class="content">
                                            <div class="title">{{ $qtdMatriculas }}</div>
                                            <div class="sub-title">Matriculas</div>
                                        </div>
                                        <div class="clear-both"></div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <a href="#">
                                <div class="card yellow summary-inline">
                                    <div class="card-body">
                                        <i class="icon fa fa-picture-o fa-4x"></i>
                                        <div class="content">
                                            <div class="title">{{ $qtdBanners }}</div>
                                            <div class="sub-title">Banners Cadastrados</div>
                                        </div>
                                        <div class="clear-both"></div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        {{--<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">--}}
                            {{--<a href="#">--}}
                                {{--<div class="card green summary-inline">--}}
                                    {{--<div class="card-body">--}}
                                        {{--<i class="icon fa fa-tags fa-4x"></i>--}}
                                        {{--<div class="content">--}}
                                            {{--<div class="title">280</div>--}}
                                            {{--<div class="sub-title">Product View</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="clear-both"></div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</a>--}}
                        {{--</div>--}}

                        {{--<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">--}}
                            {{--<a href="#">--}}
                                {{--<div class="card blue summary-inline">--}}
                                    {{--<div class="card-body">--}}
                                        {{--<i class="icon fa fa-share-alt fa-4x"></i>--}}
                                        {{--<div class="content">--}}
                                            {{--<div class="title">16</div>--}}
                                            {{--<div class="sub-title">Share</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="clear-both"></div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</a>--}}
                        {{--</div>--}}

                    </div>
                    {{--<div class="row  no-margin-bottom">--}}
                        {{--<div class="col-sm-6 col-xs-12">--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-xs-12">--}}
                                    {{--<div class="card primary">--}}
                                        {{--<div class="card-jumbotron no-padding">--}}
                                            {{--<canvas id="jumbotron-line-chart" class="chart no-padding"></canvas>--}}
                                        {{--</div>--}}
                                        {{--<div class="card-body half-padding">--}}
                                            {{--<h4 class="float-left no-margin font-weight-300">Profits</h4>--}}
                                            {{--<h2 class="float-right no-margin font-weight-300">$3200</h2>--}}
                                            {{--<div class="clear-both"></div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                        {{--</div>--}}
                        {{--<div class="col-sm-6 col-xs-12">--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-md-6 col-sm-12">--}}
                                    {{--<div class="card primary">--}}
                                        {{--<div class="card-jumbotron no-padding">--}}
                                            {{--<canvas id="jumbotron-bar-chart" class="chart no-padding"></canvas>--}}
                                        {{--</div>--}}
                                        {{--<div class="card-body half-padding">--}}
                                            {{--<h4 class="float-left no-margin font-weight-300">Orders</h4>--}}
                                            {{--<div class="clear-both"></div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-md-6 col-sm-12">--}}
                                    {{--<div class="card primary">--}}
                                        {{--<div class="card-jumbotron no-padding">--}}
                                            {{--<canvas id="jumbotron-line-2-chart" class="chart no-padding"></canvas>--}}
                                        {{--</div>--}}
                                        {{--<div class="card-body half-padding">--}}
                                            {{--<h4 class="float-left no-margin font-weight-300">Pages view</h4>--}}
                                            {{--<div class="clear-both"></div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
 {{----}}
                    {{--</div>--}}
                {{--</div>--}}
            </div>
        </div>
    @stop