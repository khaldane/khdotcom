@extends('partials.default')

@section('meta_title', 'khaldane - portfolio')
@section('meta_description', 'my description')

@section('content')
    <div id="portfolio-wrap">
        <div class="portfolio-header">
            <div class="portfolio-title">
                <h2>Web &amp; Mobile <br> Development Portfolio</h2>
                <hr>
            </div>
        </div>
        <div class="portfolio-case-studies row">
            @foreach($caseStudies as $caseStudy)
                <div class="col-sm-4">
                    <div class="case-study" style="background-image: url(../{{{ $caseStudy->featuredImg }}});">
                        <div class="case-study-img-overlay">
                            <h3 class="featured-title case-study-title">{{{ $caseStudy->companyName }}}</h3>
                        </div>
                        <div class="case-study-body">
                            <p class="about"> {{{ $caseStudy->shortDescription }}}  
                                @if( $caseStudy->type == 'Web')
                                    <img class="portfolio-icon-type" src="/images/assets/webIcon.png" alt="img" /> </p>
                                @else
                                    <img class="portfolio-icon-type" src="/images/assets/mobileIcon.png" alt="img" /> </p>
                                @endif
                            <p class="redirect"> LEARN MORE <img class="learn-more-img" src="images/assets/arrow.png"/> </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@stop
