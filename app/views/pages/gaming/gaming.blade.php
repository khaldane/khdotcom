@extends('partials.default')

@section('meta_title', 'khaldane - gaming')
@section('meta_description', 'I am a full-stack developer that specializes in web and mobile development.')

@section('content')
    <div id="portfolio-wrap">
       @include('partials.gaming.gaming-nav')
        @if($type == 'warcraft')
            @include('partials.gaming.warcraft')
        @elseif($type == 'diablo')
            @include('partials.gaming.diablo')
        @elseif($type == 'hots')
            @include('partials.gaming.hots')
        @endif
    </div>
@stop
