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
            <div class="container">
                <div class="row">
                    <div class=" col-sm-5">
                        @foreach($characters as $char)
                            @if($char->name != 'Khaazix')
                                <div class="character-header">
                            <img class="character-img" src="http://us.battle.net/static-render/us/{{{ $char->thumbnail }}}" alt="Khaazix"/>
                                    <div class="character-details black">
                                        <h3><a href="{{{ $char->armory}}}" target="_blank">{{{ $char->name }}}</a></h3>
                                <p class="about">{{{ $char->level}}} {{{ $char->type }}} {{{ $char->raceName }}} {{{ $char->className }}} <br> {{{ $char->realm }}} </p>
                                    </div>
                                    <hr class="hr-gaming">
                                </div>
                        @endif

                        @endforeach
                    </div>
                    <div class="character-header col-sm-7">
                        <img class="character-img" src="http://us.battle.net/static-render/us/{{{ $character->thumbnail }}}" alt="Khaazix"/>
                        <div class="character-details black">
                            <h3><a href="{{{ $character->armory}}}" target="_blank">{{{ $character->name }}}</a> </h3>
                    <p class="about">{{{ $character->level}}} {{{ $character->type }}} {{{ $character->raceName }}} {{{ $character->className }}} <br> {{{ $character->realm }}} </p>
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
                            <hr>
                             <h4>Arena</h4>
                                <dl>
                                    <dt>2v2</dt>
                                    <dd>0</dd>
                                    <dt>3v3</dt>
                                    <dd>0</dd>
                                    <dt>5v5</dt>
                                    <dd>0</dd>
                                </dl>
                            </div>
                        <div class="col-sm-12 gaming-break">
                            <hr class="hr-line-break">
                        </div>
                        <div class="col-sm-12 equipment-table">
                            <h4>Equipment</h4>
                            <p class="about"> Average Item Level: 682 </p>
                            <table>
                                <thead>
                                    <tr>
                                        <th>Slot</th>
                                        <th>Level</th>
                                        <th>Item</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($equipment as $e)
                                    <tr>
                                        <td class="right-shift"> {{{ $e->slot }}} </td>
                                        <td> {{{ $e->level }}} </td>
                                        <td class="purple"> {{{ $e->itemName }}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class=" col-sm-12 gaming-break">
                            <h3>Achievements</h3>
                            <dl class="col-sm-6">
                                <dt>Total</dt>
                                <div class="progress">
                                  <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                  aria-valuemin="0" aria-valuemax="100" style="width:43%">
                                    1082 / 2510 
                                  </div>
                                </div>
                            </dl>
                            <dl class="col-sm-6">
                                <dt>General</dt>
                                <div class="progress">
                                  <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                  aria-valuemin="0" aria-valuemax="100" style="width:66%">
                                    40/ 60
                                  </div>
                                </div>
                            </dl>
                            <dl class="col-sm-6">
                                <dt>Collections</dt>
                                <div class="progress">
                                  <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                  aria-valuemin="0" aria-valuemax="100" style="width:47%">
                                    16 / 34
                                  </div>
                                </div>
                            </dl>
                            <dl class="col-sm-6">
                                <dt>Quests</dt>
                                <div class="progress">
                                  <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                  aria-valuemin="0" aria-valuemax="100" style="width:25%">
                                    64 / 254
                                  </div>
                                </div>
                            </dl>
                            <dl class="col-sm-6">
                                <dt>Dungeons &amp; Raids</dt>
                                <div class="progress">
                                  <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                  aria-valuemin="0" aria-valuemax="100" style="width:50%">
                                    448 / 883
                                  </div>
                                </div>
                            </dl>
                            <dl class="col-sm-6">
                                <dt>Player vs Player</dt>
                                <div class="progress">
                                  <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                  aria-valuemin="0" aria-valuemax="100" style="width:33%">
                                    96 / 285 
                                  </div>
                                </div>
                            </dl>
                            <dl class="col-sm-6">
                                <dt>Exploration</dt>
                                <div class="progress">
                                  <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                  aria-valuemin="0" aria-valuemax="100" style="width:57%">
                                    87 / 152 
                                  </div>
                                </div>
                            </dl>
                            <dl class="col-sm-6">
                                <dt>Professions</dt>
                                <div class="progress">
                                  <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                  aria-valuemin="0" aria-valuemax="100" style="width:27%">
                                    63 / 231 
                                  </div>
                                </div>
                            </dl>
                            <dl class="col-sm-6">
                                <dt>Reputations</dt>
                                <div class="progress">
                                  <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                  aria-valuemin="0" aria-valuemax="100" style="width:40%">
                                    33 / 81 
                                  </div>
                                </div>
                            </dl>
                            <dl class="col-sm-6">
                                <dt>Scenarios</dt>
                                <div class="progress">
                                  <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                  aria-valuemin="0" aria-valuemax="100" style="width:18%">
                                    14 / 77 
                                  </div>
                                </div>
                            </dl>
                            <dl class="col-sm-6">
                                <dt>Garrisons</dt>
                                <div class="progress">
                                  <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                  aria-valuemin="0" aria-valuemax="100" style="width:33%">
                                    40 / 121 
                                  </div>
                                </div>
                            </dl>
                            <dl class="col-sm-6">
                                <dt>Pet Battles</dt>
                                <div class="progress">
                                  <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                  aria-valuemin="0" aria-valuemax="100" style="width:33%">
                                    34 / 103 
                                  </div>
                                </div>
                            </dl>
                            <dl class="col-sm-6">
                                <dt>World Events</dt>
                                <div class="progress">
                                  <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                  aria-valuemin="0" aria-valuemax="100" style="width:60%">
                                    137 / 228 
                                  </div>
                                </div>
                            </dl>
                            <dl class="col-sm-6">
                                <dt>Feats of Strength</dt>
                                <div class="progress">
                                  <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                  aria-valuemin="0" aria-valuemax="100" style="width:100%">
                                    29
                                  </div>
                                </div>
                            </dl>
                            <div class="col-sm-12">
                                <hr class="hr-line-break">
                            </div>
                            <div class="col-sm-12">
                                <h3>Collections</h3>
                                <dl class="col-sm-6">
                                    <dt>Mounts</dt>
                                    <div class="progress">
                                      <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                      aria-valuemin="0" aria-valuemax="100" style="width:42%">
                                        230 / 544
                                      </div>
                                    </div>
                                </dl>
                                <dl class="col-sm-6">
                                    <dt>Pets</dt>
                                    <div class="progress">
                                      <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                      aria-valuemin="0" aria-valuemax="100" style="width:53%">
                                        122 / 230
                                      </div>
                                    </div>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
