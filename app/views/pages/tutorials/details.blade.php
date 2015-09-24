@extends('partials.default')

@section('meta_title', 'khaldane - tutorials')
@section('meta_description', 'I am a full-stack developer that specializes in web and mobile development.')

@section('content')
    <div id="portfolio-wrap" class="about">
        <div class="portfolio-header">
            <div class="portfolio-title">
                <h2>{{ $tutorial->title}}</h2>
                <hr class="hr-small">
                 @include('partials.tutorials.tutorial-nav')
            </div>
        </div>
        <div class="tutorials-body">
            <div class="container">
                <div class="row about">
                    <?php echo($tutorial->description) ?>
                </div>
            </div>
        </div>
    </div>
@stop
