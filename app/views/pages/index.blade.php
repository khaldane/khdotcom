@extends('partials.default')

@section('meta_title', 'khaldane')
@section('meta_description', 'my description')

@section('content')
    <div class="content-left">
        <div class="about-wrap">
            <img class="about-img" src="/images/khaldane.png" alt="Katherine Haldane" />
            <h2>Katherine Haldane</h2>
            <p class="about">
                Welcome! My name is Katherine and I craft websites and mobile apps.
            </p>
            <div class="download-resume">
                <p>
                <a href="resume/KatherineHaldaneResume.pdf" download><img class="download-img" src="images/assets/download.png"/>  DOWNLOAD RESUME</a>
                </p>
            </div>
        </div>
    </div>
    <div class="content-right">
        <div class="featured-product">
            <div class="featured-overlay"></div>
            <div class="featured-content">
                <div class="featured-title-overlay"></div>
                <div class="featured-body"> 
                    <div>
                        <img class="featured-mobile" src="/images/goodlifeFitnessNexus.png" alt="Featured Nexus"/>
                    </div>
                    <div class= "featured-text-body">
                        <h3 class="featured-title">Goodlife Fitness</h3>
                        <p class="about">Android front &amp; back end development</p>
                        <p> <a class="redirect" href="/portfolio/details?id=goodlife"> LEARN MORE </a> <img class="learn-more-img" src="images/assets/arrow.png"/> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
