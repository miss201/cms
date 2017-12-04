@extends('admin.layouts.admin')

@section('admin-content')
    <div id="content" class="content">
        <!-- begin breadcrumb -->
        {{--<ol class="breadcrumb pull-right">--}}
            {{--<li><a href="javascript:;">{{trans('menu.dashboard')}}</a></li>--}}
            {{--<li><a href="javascript:;" class="active">{{trans('menu.index')}}</a></li>--}}
            {{--<li class="active">index</li>--}}
        {{--</ol>--}}
        <!-- end breadcrumb -->
        <!-- begin page-header -->
        <h1 class="page-header">{{trans('menu.dashboard')}} <small>{{trans('menu.index')}}</small></h1>
        <!-- end page-header -->

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-inverse">
                    <div class="panel-heading">
                        <div class="panel-heading-btn">
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                        </div>
                        <h4 class="panel-title"></h4>
                    </div>
                    <div class="panel-body">
                        {{trans('messages.welcome')}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection