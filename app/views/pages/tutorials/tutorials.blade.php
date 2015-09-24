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
                         <a href="/tutorials/android">
                            <h3 class="header-center">Android</h3>
                        </a>
                     </div>
                    <div class="col-sm-3 white">
                         <a href="/tutorials/ios">
                            <h3 class="header-center">iOS</h3>
                        </a>
                     </div>
                      <div class="col-sm-3 white">
                           <a href="/tutorials/php">
                            <h3 class="header-center">PHP</h3>
                        </a>
                     </div>
                </div>
            </div>
        </div>
        <div class="tutorials-content row">
            @foreach($tutorials as $tutorial)
                <div class="col-sm-3">
                    <div class="case-study"  style="background-image: url(../{{{ $tutorial->featuredImg }}});">
                        <div class="case-study-img-overlay">
                        </div>
                        <div class="case-study-body">
                            <p class="about"> {{{ $tutorial->title }}}
                                    <img class="portfolio-icon-type" src="/images/assets/cosplayIcon.png" alt="img" /> </p>
                            <p> <a class="redirect" href="/tutorials/details?id={{{ $tutorial->id }}}"> LEARN MORE </a> <img class="learn-more-img" src="images/assets/arrow.png"/> </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@stop
