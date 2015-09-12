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
                    <div class="col-sm-4 white" ><h3 class="header-center">World of Warcraft</h3></div>
                    <div class="col-sm-4 white"><h3 class="header-center">Diablo 3</h3></div>
                    <div class="col-sm-4 white"><h3 class="header-center">Heroes of the Storm</h3></div>
                </div>
            </div>
        </div>
        
        <div class="gaming">
            <div class=" col-sm-3">
                @foreach($characters as $char)
                    <div class="character-header">
                <img class="character-img" src="http://us.battle.net/static-render/us/{{{ $char->thumbnail }}}" alt="Khaazix"/>
                        <div class="character-details black">
                            <h3>{{{ $char->name }}} </h3>
                    <p class="about">{{{ $char->level}}} {{{ $char->gender }}} {{{ $char->race }}} {{{ $char->class }}} <br> {{{ $char->realm }}} </p>
                        </div>
                        <hr class="hr-gaming">
                    </div>
                    
                @endforeach
            </div>
            <div class="character-header col-sm-6">
                <img class="character-img" src="http://us.battle.net/static-render/us/{{{ $character->thumbnail }}}" alt="Khaazix"/>
                <div class="character-details black">
                    <h3>{{{ $character->name }}} </h3>
            <p class="about">{{{ $character->level}}} {{{ $character->gender }}} {{{ $character->race }}} {{{ $character->class }}} <br> {{{ $character->realm }}} </p>
                </div>
                <hr class="hr-gaming">
                <div class="col-sm-6">
                    <h4>Stats</h4>
                    <dl>
                        <dt>Health</dt>
                        <dd>{{{ $stats->stats->health }}}</dd>
                        <dt>Strength</dt>
                        <dd>{{{ $stats->stats->str }}}</dd>
                        <dt>Haste</dt>
                        <dd>{{{ $stats->stats->hasteRating }}}</dd>
                        <dt>Multistrike</dt>
                        <dd>{{{ $stats->stats->multistrikeRating }}}</dd>
                        <dt>Mastery</dt>
                        <dd>{{{ $stats->stats->masteryRating }}}</dd>
                        <dt>Versatility</dt>
                        <dd>{{{ $stats->stats->versatility }}}</dd>
                        <dt>Critical Strike</dt>
                        <dd>{{{ $stats->stats->critRating }}}</dd>
                    </dl>
                </div>
                <div class="col-sm-4">
                    <h4>Honourable Kills</h4>
                    <p>{{{ $stats->totalHonorableKills }}}</p>
                    <div class="col-sm-4">
                        <dl>
                            <dt>Arena 2v2</dt>
                            <dd>0</dd>
                        </dl>
                    </div>
                    <div class="col-sm-4">
                        <dt>Arena 3v3</dt>
                        <dd>0</dd>
                    </div>
                    <div class="col-sm-4">
                        <dt>Arena 5v5</dt>
                        <dd>0</dd>
                    </div>
                </div>
                <div class="col-sm-12">
                    <hr class="hr-line-break">
                </div>
            </div>
            <div class=" col-sm-3">
                <h3>Achievements</h3>
                <dl>
                    <dt>Total</dt>
                    <dd>0</dd>
                </dl>
                <dl>
                    <dt>General</dt>
                    <dd>0</dd>
                </dl>
                <dl>
                    <dt>Collections</dt>
                    <dd>0</dd>
                </dl>
                <dl>
                    <dt>Quests</dt>
                    <dd>0</dd>
                </dl>
                <dl>
                    <dt>Dungeons &amp; Raids</dt>
                    <dd>0</dd>
                </dl>
                <dl>
                    <dt>Player vs Player</dt>
                    <dd>0</dd>
                </dl>
                <dl>
                    <dt>Exploration</dt>
                    <dd>0</dd>
                </dl>
                <dl>
                    <dt>Professions</dt>
                    <dd>0</dd>
                </dl>
                <dl>
                    <dt>Reputations</dt>
                    <dd>0</dd>
                </dl>
                <dl>
                    <dt>Scenarios</dt>
                    <dd>0</dd>
                </dl>
                <dl>
                    <dt>Garrisons</dt>
                    <dd>0</dd>
                </dl>
                <dl>
                    <dt>Pet Battles</dt>
                    <dd>0</dd>
                </dl>
                <dl>
                    <dt>World Events</dt>
                    <dd>0</dd>
                </dl>
                <dl>
                    <dt>Feats of Strength</dt>
                    <dd>0</dd>
                </dl>
                
                <h3>Collections</h3>
                <dl>
                    <dt>Mounts</dt>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" aria-valuenow="70"
                      aria-valuemin="0" aria-valuemax="100" style="width:70%">
                        {{{ $mounts->mounts->numCollected}}}/{{{ $mounts->mounts->numNotCollected}}}
                      </div>
                    </div>
                </dl>
                <dl>
                    <dt>Pets</dt>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" aria-valuenow="70"
                      aria-valuemin="0" aria-valuemax="100" style="width:70%">
                        {{{ $pets->pets->numCollected}}}/{{{ $pets->pets->numNotCollected}}}
                      </div>
                    </div>
                </dl>
            </div>
        </div>
    </div>
@stop
