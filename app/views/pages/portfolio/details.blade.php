@extends('partials.default')

@section('meta_title', 'khaldane - details')
@section('meta_description', 'I am a full-stack developer that specializes in web and mobile development.')

@section('content')
    <div id="details-wrap" class="about" style="background-image: url(../{{ $caseStudy->mainImg }}">
        <div class="details-header">
            <div class="case-study-title">
                <div class="case-study-title-head">
                    <h2>{{ $caseStudy->companyName }}</h2>
                    <hr>
                </div>
                <h3 class="featured-title">{{ $caseStudy->shortDescription }}</h3>
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
                            <div class="language-list"> {{ $language }} </div>
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
                        <a href="{{ $caseStudy->website}}" class="details-website" target="_blank">
                    @endif
                        @if($caseStudy->type == 'Mobile')
                             <img class="details-icon-type" src="/images/assets/mobileIcon.png" alt="mobile" />
                        @else
                            <img class="details-icon-type" src="/images/assets/webIcon.png" alt="web" />
                        @endif
                        <div class="details-website-text">
                            @if(strpos(strtolower($caseStudy->website),'release'))
                                {{ $caseStudy->website }}
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
                        <div class="details-content about">
                            <?php echo($caseStudy->description) ?>
                            <div class="details-tools">
                                <h4>Tools</h4>
                                <?php $countTools = 1; ?>
                                @foreach(explode(',', $caseStudy->tools) as $tools)
                                    @if($countTools % 1 == 0)
                                        <div class="col-sm-4">
                                            <ul class="featured-list">
                                    @endif
                                            <li> {{ $tools }} </li>
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
                            @elseif($caseStudy->tag == 'surfline')
                                @include('partials.portfolio.surflineMobile')
                            @elseif($caseStudy->tag == 'buoyweather')
                                @include('partials.portfolio.buoyweatherMobile')
                            @elseif($caseStudy->tag == 'fishtrack')
                                @include('partials.portfolio.fishtrackMobile')
                            @endif
                        @else
                            <img class="details-seconday-img" src="/{{ $caseStudy->secondaryImg }}" />
                        @endif
                        <div class="details-features about">
                            <h4>Features</h4>
                            <p>Below is a general list of features I worked on within the project.</p>
                            <?php $countFeat = 1; ?>
                            @foreach(explode(',', $caseStudy->features) as $feature)
                                @if($countFeat % 2 != 0)
                                <div class="row">
                                    <ul class="featured-list">
                                    @endif
                                        <li class="col-sm-6"> {{ $feature }} </li>
                                    @if($countFeat % 2 == 0)
                                    </ul>
                                </div>
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
