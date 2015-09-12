
@extends('partials.default')

@section('meta_title', 'khaldane -edit portfolio')
@section('meta_description', 'my description')

@section('content')
    <div id="portfolio-wrap">
        <div class="admin-header">
            <div class="portfolio-title">
                <h2>Create Portfolio</h2>
                <hr class="hr-small">
            </div>
        </div>
        <div class="col-sm-12" >
            <div class="form">
                @if($errors->any())
                    <h4>{{$errors->first()}}</h4>
                @endif

                {{ Form::open(array('action' => 'AdminController@portfolioSave', 'class' => 'form-horizontal')) }}
                    @include('partials.admin.portfolio')
                {{ Form::close() }}
            </div>
        </div>
    </div>
@stop
