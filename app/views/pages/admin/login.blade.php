@extends('partials.default')

@section('meta_title', 'khaldane - login')
@section('meta_description', 'my description')

@section('content')
    <div id="contact-wrap">
        <div class="login-form">
            <p class="about"> Shhh... it's a secret! <br> Why is it a secret? <br> Because it is a secret!</p>
            <hr class="login-hr">
           {{ Form::open(array('action' => 'AdminController@authenticate', 'class' => 'form-horizontal')) }}
                <div class="form-group">
                    {{ Form::password('secret', array('placeholder'=>'Secret', 'autofocus'=>'autofocus')) }} 
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Authenticate</button>
                </div>
            {{ Form::close() }}
        </div>
    </div>
@stop
