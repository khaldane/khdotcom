@extends('partials.default')

@section('meta_title', 'khaldane - details')
@section('meta_description', 'my description')

@section('content')

    <div id="details-wrap" class="about" style="background-image: url(../{{{ $caseStudy->mainImg }}}">
        <div class="details-header">
            <div class="case-study-title">
                <div class="case-study-title-head">
                    <h2>{{{ $caseStudy->companyName }}}</h2>
                    <hr>
                </div>
                <h3 class="featured-title">{{{ $caseStudy->shortDescription }}}</h3>
            </div>
            <div class="details-nav">
                <div class="col-sm-8">
                    <div class="detail-nav-header">
                         <h4>Languages</h4>
                    </div>
                    <?php $count = 1; ?>
                    @foreach(explode(',', $caseStudy->languages) as $language)
                        @if($count % 1 == 0)
                        <div class="col-sm-4">
                        @endif
                            <div class="language-list"> {{{ $language }}} </div>
                        @if($count % 1 == 0)
                        </div>
                        @endif
                    <?php $count++; ?>
                    @endforeach
                </div>
                <div class="col-sm-4 visit-site-callout">
                    @if(strpos(strtolower($caseStudy->website),'release'))
                        <a href="#" class="details-website">
                    @else
                        <a href="{{{ $caseStudy->website}}}" class="details-website">
                    @endif
                        @if($caseStudy->type == 'Mobile')
                             <img class="details-icon-type" src="/images/assets/mobileIcon.png" alt="mobile" />
                        @else
                            <img class="details-icon-type" src="/images/assets/webIcon.png" alt="web" />
                        @endif
                        <div class="details-website-text">
                            @if(strpos(strtolower($caseStudy->website),'release'))
                                {{{ $caseStudy->website }}}
                            @else
                                Visit Site
                                <i class="fa fa-long-arrow-right"></i>
                            @endif
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="details-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="details-title">About The Project</h2>
                        <div class="details-content">
                            <?php echo($caseStudy->description) ?>
                            <div class="details-tools">
                                <h4>Tools</h4>
                                <?php $countTools = 1; ?>
                                @foreach(explode(',', $caseStudy->tools) as $tools)
                                    @if($countTools % 1 == 0)
                                        <div class="col-sm-4">
                                            <ul>
                                    @endif
                                            <li> <div class="featured-list"> {{{ $tools }}} </div> </li>
                                    @if($countTools % 1 == 0)
                                            </ul>
                                        </div>
                                    @endif
                                <?php $countTools++; ?>
                                @endforeach
                            </div>
                        </div>
                        @if($caseStudy->type == 'Mobile')
                            @if($caseStudy->tag == 'goodlife')
                                @include('partials.portfolio.goodlifeMobile')
                            @elseif($caseStudy->tag == 'connex')
                                @include('partials.portfolio.connexMobile')
                            @elseif($caseStudy->tag == 'playon')
                                @include('partials.portfolio.playonMobile')
                            @endif
                        @else
                            <img class="details-seconday-img" src="{{{ $caseStudy->secondaryImg }}}" />
                        @endif
                        <div class="details-features">
                            <h4>Features</h4>
                            <p>Below is a general list of features I worked on within the project.</p>
                            <?php $countFeat = 1; ?>
                            @foreach(explode(',', $caseStudy->features) as $feature)
                                @if($countFeat % 2 != 0)
                                <ul class="row">
                                @endif
                                    <li class="col-sm-6">
                                        <div class="featured-list"> {{{ $feature }}} </div>
                                    </li>
                                @if($countFeat % 2 == 0)
                                </ul>
                                @endif
                            <?php $countFeat++; ?>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
