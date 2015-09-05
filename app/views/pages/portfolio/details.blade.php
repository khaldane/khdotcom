@extends('partials.default')

@section('meta_title', 'khaldane - details')
@section('meta_description', 'my description')

@section('content')

    <div id="details-wrap">
        <div class="details-header">
            <div class="case-study-title">
                <h2>Goodlife Fitness</h2>
                <hr>
                <h3 class="featured-title">WEB FRONT &amp; BACK END DEVELOPMENT</h3>
            </div>
            <div class="details-nav">
                <div class="col-sm-8">
                    <div class="detail-nav-header">
                         <h4>Languages</h4>
                    </div>
                    <div class="col-sm-4">
                        <div class="about language-list"> language 1 </div>
                        <div class="about language-list"> language 2 </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="about language-list"> language 1 </div>
                        <div class="about language-list"> language 2 </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="about language-list"> language 1 </div>
                        <div class="about language-list"> language 2 </div>
                    </div>
                </div>
                <div class="col-sm-4 visit-site-callout">
                    <a href="{{{ $caseStudy->website}}}" class="details-website">
                        @if($caseStudy->type == 'Mobile')
                             <img class="details-icon-type" src="/images/assets/mobileIcon.png" alt="mobile" />
                        @else
                            <img class="details-icon-type" src="/images/assets/webIcon.png" alt="web" />
                        @endif
                        <div class="details-website-text">
                            Visit Site
                            <i class="fa fa-long-arrow-right"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="details-body">
            <h2 class="details-title">About The Project</h2>
            <p  class="about details-content">
                {{{ $caseStudy->description }}}
            </p>
            
            <div col-sm-12>
                <div class="details-content-img"> </div>
            </div>
            
            <div class="details-features">
                <h4>Features</h4>
                <p class="about" >Flannel cardigan health goth plaid. Wayfarers keffiyeh Pitchfork swag.</p>
                <div class="col-sm-6">
                    <ul>
                        <li> <div class="about featured-list"> feature 1 </div> </li>
                        <li> <div class="about featured-list"> feature 2 </div> </li>
                        <li> <div class="about featured-list"> feature 3 </div> </li>
                    </ul>
                </div>
                <div class="col-sm-6">
                    <ul>
                        <li> <div class="about featured-list"> feature 1 </div> </li>
                        <li> <div class="about featured-list"> feature 2 </div> </li>
                        <li> <div class="about featured-list"> feature 3 </div> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@stop
