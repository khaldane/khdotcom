@extends('partials.default')

@section('meta_title', 'khaldane - tutorials')
@section('meta_description', 'I am a full-stack developer that specializes in web and mobile development.')
@section('content')
    <div id="portfolio-wrap">
        <div class="portfolio-header">
            <div class="portfolio-title">
                <h2>Tutorials</h2>
                <hr class="hr-small">
                @include('partials.tutorials.tutorial-nav')
            </div>
        </div>
        <div class="tutorials-content row about">
            @include('partials.tutorials.tutorial')
        </div>
    </div>
@stop
