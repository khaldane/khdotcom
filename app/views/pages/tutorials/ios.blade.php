@extends('partials.default')

@section('meta_title', 'khaldane - portfolio')
@section('meta_description', 'my description')

@section('content')
    <div id="portfolio-wrap">
        <div class="portfolio-header">
            <div class="portfolio-title">
                <h2>Tutorials</h2>
                <hr class="hr-small">
                 <div class="tutorial-types row">
                    <div class="col-sm-3 white" >
                        <a href="/tutorials">
                            <h3 class="header-center">Cosplay</h3>
                        </a>
                     </div>
                    <div class="col-sm-3 white">
                         <a href="/android">
                            <h3 class="header-center">Android</h3>
                        </a>
                     </div>
                    <div class="col-sm-3 white">
                         <a href="/ios">
                            <h3 class="header-center">iOS</h3>
                        </a>
                     </div>
                      <div class="col-sm-3 white">
                           <a href="/php">
                            <h3 class="header-center">PHP</h3>
                        </a>
                     </div>
                </div>
            </div>
        </div>
        <div class="tutorials-content row">
            @if(sizeof($tutorials) > 0)
                @foreach($tutorials as $tutorial)
                    <div class="col-sm-3">
                        <div class="case-study"  style="background-image: url(../{{{ $tutorial->featuredImg }}});">
                            <div class="case-study-img-overlay">
                            </div>
                            <div class="case-study-body">
                                <p class="about"> {{{ $tutorial->title }}}
                                    @if($tutorial->type == 'Android' || $tutorial->type == 'iOS')
                                        <img class="portfolio-icon-type" src="/images/assets/webIcon.png" alt="img" /> </p>
                                    @else
                                        <img class="portfolio-icon-type" src="/images/assets/mobileIcon.png" alt="img" /> </p>
                                    @endif
                                <p> <a class="redirect" href="/tutorial-details?id={{{ $tutorial->id }}}"> LEARN MORE </a> <img class="learn-more-img" src="images/assets/arrow.png"/> </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <p>Coming Soon...</p>
            @endif
        </div>
    </div>
@stop
