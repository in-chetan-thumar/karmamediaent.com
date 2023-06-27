@extends('admin.layouts.master')

@section('title') Webseries list @endsection
@section('css')
<link rel="stylesheet" href="{{asset('assets/frontend/css/movie.css')}}">
<meta name="csrf-token" content="{{ csrf_token() }}">

@endsection
@section('content')

    @component('components.breadcrumb',['lists'=>['Dashboard'=>route('root')]])
        @slot('title') Webseries list  @endslot
    @endcomponent

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="float-end">
                        @can('webseries.create')
                        <a href="{{route('webseries.create')}}" onclick="showMovieSaveModel(event)" class="btn btn-primary"><i
                                class="mdi mdi-plus"></i>&nbsp;Add webseries</a>
                        @endcan
                    </div>
                    <div class="float-start">
                        {!! Form::open(['url' =>route('webseries.index'),'id' =>'form-search','class'=>'row row-cols-lg-auto g-3 align-items-center','method' => 'get']) !!}
                        <div class="form-group">
                            {!! Form::text('query_str',request()->query('query_str'),['class'=>'form-control','placeholder'=>'Search more webseries','style="width: 330px;"']) !!}
                        </div>
                        <button type="submit" name="type" value="submit" class="btn btn-primary waves-effect waves-light">
                            Submit
                        </button>
                        &nbsp;
                        <a href="{{route('webseries.index')}}" class="btn btn-secondary waves-effect waves-light">
                            Reset
                        </a>
                        {!! Form::close() !!}
                    </div>
                    <div class="clearfix"></div>
                    <div class="divtable">
                        {!! $table !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="divOffcanvas">

        </div>
    </div>
@endsection
@section('script-bottom')
    <script type="text/javascript" src="{{ asset('assets/vendor/jsvalidation/js/jsvalidation.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/movie.js')}}"></script>
@endsection
