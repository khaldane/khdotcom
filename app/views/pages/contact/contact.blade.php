@extends('partials.default')

@section('meta_title', 'khaldane - contact')
@section('meta_description', 'I am a full-stack developer that specializes in web and mobile development.')

@section('content')
    <div id="contact-wrap">
       <div class="content-left">
            <div class="contact-info">
                <h1 class="header-center">Contact</h1>
                <hr class="hr-small">
                <div class="contact-body about">
                    <h3>Mobile Phone</h3>
                    <p class="about">519-872-6992</p>
                    <h3>Location</h3>
                    <p class="about">London, Ontario</p>
                    <h3>Email</h3>
                    <p class="about">khaldane19@gmail.com</p>
                </div>
            </div>
        </div>
        <div class="content-right about">
            <div class="about-website">
                <div class="row">
                    <div class="contact-content col-lg-offset-1 col-lg-10">
                        <h1>About katherinehaldane.com</h1>
                        <p class="about" >My website is my playground! It is currently still under construction and I continue to work endlessly on it. There are many things to come such as an angular front-end and more tutorials. As much of a mobile and backend developer as I am; I am alway interested in learning new languages and techniques as well as keeping up with the always advancing technology.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="contact-stack col-lg-offset-1 col-lg-10">
                        <div class="col-md-3">
                            <h4>Languages</h4>
                            <li><ul class="about featured-list">HTML5</ul></li>
                            <li><ul class="about featured-list">CSS</ul></li>
                            <li><ul class="about featured-list">JavaScript</ul></li>
                            <li><ul class="about featured-list">PHP</ul></li>
                        </div>
                         <div class="col-md-3">
                             <h4>Frameworks</h4>
                             <li><ul class="about featured-list">Laravel</ul></li>
                             <li><ul class="about featured-list">Bootstrap</ul></li>
                        </div>
                         <div class="col-md-3">
                             <h4>Libraries</h4>
                             <li><ul class="about featured-list">Font Awesome</ul></li>
                             <li><ul class="about featured-list">JVectorMap</ul></li>
                             <li><ul class="about featured-list">CKEditor</ul></li>
                        </div>
                         <div class="col-md-3">
                             <h4>Services &amp; APIs</h4>
                             <li><ul class="about featured-list">Digital Ocean</ul></li>
                             <li><ul class="about featured-list">World of Warcraft</ul></li>
                             <li><ul class="about featured-list">Diablo 3</ul></li>
                        </div>
                    </div>
                </div>
            </div>
            <div id="world-map-markers"/>
        </div>
    </div>
@stop
