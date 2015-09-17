@extends('partials.default')

@section('meta_title', 'khaldane - portfolio')
@section('meta_description', 'my description')

@section('content')
    <div id="portfolio-wrap">
        <div class="portfolio-header">
            <div class="portfolio-title">
                <h2>Gaming</h2>
                <hr class="hr-small">
                <div class="game-types row">
                    <div class="col-sm-4 white" >
                        <a href="/gaming">
                            <h3 class="header-center"> World of Warcraft</h3>
                        </a>
                    </div>
                    <div class="col-sm-4 white"> 
                        <a href="/diablo"> 
                            <h3 class="header-center"> Diablo 3</h3> 
                        </a>
                    </div>
                    <div class="col-sm-4 white">
                        <a href="/hots"> 
                            <h3 class="header-center">Heroes of the Storm</h3>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="gaming about">
            <div class=" col-sm-12">
                <h2>Check out my Hots Logs :)<a href="https://www.hotslogs.com/Player/Profile?PlayerID=3888922"> maiomi#1598 </a>
                </h2>
            </div>
        </div>
    </div>
@stop
