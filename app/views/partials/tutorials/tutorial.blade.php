@if(sizeof($tutorials) > 0)
    @foreach($tutorials as $tutorial)
        <div class="col-sm-3">
            <div class="case-study"  style="background-image: url(../{{ $tutorial->featuredImg }});">
                <div class="case-study-img-overlay"></div>
                <div class="case-study-body">
                    <p class="about"> {{ $tutorial->title }}
                        @if($type == 'cosplay')
                            <img class="portfolio-icon-type" src="/images/assets/cosplayIcon.png" alt="img" /> </p>
                        @elseif($type == 'android' || $type == 'ios')
                           <img class="portfolio-icon-type" src="/images/assets/mobileIcon.png" alt="img" /> </p>
                        @elseif($type == 'php')
                            <img class="portfolio-icon-type" src="/images/assets/webIcon.png" alt="img" /> </p>
                        @endif
                    <p> <a class="redirect" href="/tutorials/details?id={{ $tutorial->id }}"> LEARN MORE </a> <img class="learn-more-img" src="/images/assets/arrow.png"/> </p>
                </div>
            </div>
        </div>
    @endforeach
@else
<div class="coming-soon">
        <h2>Coming Soon...</h2>
</div>
@endif