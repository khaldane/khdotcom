
@extends('partials.default')

@section('meta_title', 'khaldane - update/edit tutorial')
@section('meta_description', 'my description')

@section('content')
    <div id="portfolio-wrap">
        <div class="admin-header">
            <div class="portfolio-title">
                <h2>Create/Update Tutorial</h2>
                <hr class="hr-small">
            </div>
        </div>
        <div class="col-sm-12" >
            <div class="form">
                @if($errors->any())
                    <h4>{{$errors->first()}}</h4>
                @endif

                {{ Form::open(array('action' => 'AdminController@tutorialSave', 'class' => 'form-horizontal')) }}
                    <div class="form-group">
                        <label for="title" class="col-sm-2 control-label">Title:</label>
                        <div class="col-sm-10">
                            {{ Form::text('title', isset($tutorial->title) ? $tutorial->title : '') }}
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="type" class="col-sm-2 control-label">Type:</label>
                        <div class="col-sm-10">
                            {{ Form::select('type', array('Cosplay' => 'Cosplay', 'Android' => 'Android', 'iOS' => 'iOS', 'PHP' => 'PHP')) }}
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="description" class="col-sm-2 control-label">Description:</label>
                        <div class="col-sm-10">
                            <textarea name="description" id="description" rows="10" cols="80">
                                @if(isset($tutorial->description))
                                    {{ $tutorial->description }}
                                @endif
                            </textarea>
                            <script>
                                CKEDITOR.replace( 'description' );
                            </script>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
@stop
