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
            <div class=" col-sm-4">
                <h3>Account</h3>
                <dl>
                    <dt>
                        <dd>Battle Tag</dd>
                        <dd> {{{ $data->battleTag}}} </dd>
                    </dt>
                    <dt>
                        <dd>Lifetime Kills</dd>
                        <dd>{{{ $data->kills->monsters}}} </dd>
                    </dt>
                    <dt>
                        <dd>Elite Kills</dd>
                        <dd>{{{ $data->kills->elites}}} </dd>
                    </dt>
                    <dt>
                        <dd>Paragon Level</dd>
                        <dd>{{{ $data->paragonLevel}}} </dd>
                    </dt>
                </dl>
                <h3>Time Played</h3>
                <dl>
                    <dt>
                        <dd>Barbarian</dd>
                        <dd> {{{ $data->timePlayed->barbarian }}}</dd>
                    </dt>
                    <dt>
                        <dd>Crusader</dd>
                        <dd> {{{ $data->timePlayed->crusader }}} </dd>
                    </dt>
                    <dt>
                        <dd>Demon Hunter</dd>
                        <dd> $data->timePlayed->demon-hunter </dd>
                    </dt>
                    <dt>
                        <dd>Monk</dd>
                        <dd> {{{ $data->timePlayed->monk }}} </dd>
                    </dt>
                    <dt>
                        <dd>Witch Doctor</dd>
                        <dd> $data->timePlayed->witch-doctor </dd>
                    </dt>
                    <dt>
                        <dd>Wizard</dd>
                        <dd> {{{ $data->timePlayed->wizard }}} </dd>
                    </dt>
                </dl>
            </div>
            <div class="character-header col-sm-8">
                
            </div>
        </div>
    </div>
@stop
