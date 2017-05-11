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
                    <p class="about">949-299-9653</p>
                    <h3>Location</h3>
                    <p class="about">Irvine, California</p>
                    <h3>Email</h3>
                    <p class="about">khaldane19@gmail.com</p>
                </div>
            </div>
        </div>
        <div class="content-right about">
            <div class="about-website">
                <div class="row">
                    <div class="contact-content col-lg-offset-1 col-lg-10">
                        <h1>About me!</h1>
                        <p class="about" >I am gamer and an outdoor enthusiast. If you don't see me jeeping around, camping, sport climbing, or surprisingly not regretting that 6 hour+ motorcycle ride. I am probably hiding in my cave playing my hunter in WoW, or saving the world in Overwatch. Some of my other favorite past times are building new cosplays for the next big convention, playing D&D with awesome friends, or working on my next pet project.</p>
                        <p class="about" >My website is my playground and currently still under construction. As much of a mobile and backend developer as I am; I am always interested in learning new languages and techniques as well as keeping up with the latest technology trends.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="contact-stack col-lg-offset-1 col-lg-10">
                        <div class="col-md-3">
                            <h4>Languages</h4>
                            <ul class="about featured-list">
                                <li>HTML5</li>
                                <li>CSS</li>
                                <li>JavaScript</li>
                                <li>PHP</li>
                            </ul>
                        </div>
                         <div class="col-md-3">
                             <h4>Frameworks</h4>
                             <ul class="about featured-list">
                                 <li>Laravel</li>
                                 <li>Bootstrap</li>
                             </ul>
                        </div>
                         <div class="col-md-3">
                             <h4>Libraries</h4>
                             <ul class="about featured-list">
                                 <li>Font Awesome</li>
                                 <li>JVectorMap</li>
                                 <li>CKEditor</li>
                             </ul>
                        </div>
                         <div class="col-md-3">
                             <h4>Services &amp; APIs</h4>
                             <ul class="about featured-list">
                                 <li>Digital Ocean</li>
                                 <li>World of Warcraft</li>
                                 <li>Diablo 3</li>
                             </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div id="world-map-markers"/>
        </div>
    </div>
@stop
