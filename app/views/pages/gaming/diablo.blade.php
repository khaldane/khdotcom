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
                <div>
                    <h3>Career</h3>
                    <dl>
                        <dt>
                            <dt>Battle Tag</dt>
                            <dd> {{{ $career->battleTag}}} </dd>
                        </dt>
                        <dt>
                            <dt>Lifetime Kills</dt>
                            <dd>{{{ $career->monsters}}} </dd>
                        </dt>
                        <dt>
                            <dt>Elite Kills</dt>
                            <dd>{{{ $career->elites}}} </dd>
                        </dt>
                        <dt>
                            <dt>Paragon Level</dt>
                            <dd>{{{ $career->paragonLevel}}} </dd>
                        </dt>
                    </dl>
                </div>
                <div>
                    <h3>Time Played</h3>
                    <dl>
                        <dt>
                            <dt>Barbarian</dt>
                               <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                    aria-valuemin="0" aria-valuemax="100" style="width:9%">
                                    </div>
                                </div>
                        </dt>
                        <dt>
                            <dt>Crusader</dt>
                           <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                aria-valuemin="0" aria-valuemax="100" style="width:20%">
                                </div>
                            </div>
                        </dt>
                        <dt>
                            <dt>Demon Hunter</dt>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                    aria-valuemin="0" aria-valuemax="90" style="width:90%">
                                    </div>
                                </div>
                        </dt>
                        <dt>
                            <dt>Monk</dt>
                           <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                aria-valuemin="0" aria-valuemax="100" style="width:7%">
                                </div>
                            </div>
                        </dt>
                        <dt>
                            <dt>Witch Doctor</dt>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                aria-valuemin="0" aria-valuemax="100" style="width:100%">
                                </div>
                            </div>
                        </dt>
                        <dt>
                            <dt>Wizard</dt>
                           <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                aria-valuemin="0" aria-valuemax="100" style="width:35%">
                                </div>
                            </div>
                        </dt>
                    </dl>
                </div>
            </div>
            <div class="col-sm-8">
                @foreach($characters as $char)
                    <div class="character-header col-sm-12">
                        <div class="character-header">
                            <div class="character-details black">
                                <img class="character-img" src="http://us.battle.net/static-render/us/{{{ $char->icon }}}" alt="Khaazix"/>
                                <h3>{{{ $char->name }}} </h3>
                                <p class="about">{{{ $char->level}}} {{{ $char->class }}}</p>
                            </div>
                            <hr class="hr-gaming">
                        </div>
                        <div class="col-sm-4">
                            <h3>Attributes</h3>
                            <dl>
                                <dt>Strength</dt>
                                <dd>{{{ $char->strength }}}</dd>
                                <dt>Dexterity</dt>
                                <dd>{{{ $char->dexterity }}}</dd>
                                <dt>Intelligence</dt>
                                <dd>{{{ $char->Intelligence }}}</dd>

                                <dt>Vitality</dt>
                                <dd>{{{ $char->vitality }}}</dd>
                            </dl>
                            <dl>
                                <dt>Damage</dt>
                                <dd>{{{ $char->damage }}}</dd>
                                <dt>Toughness</dt>
                                <dd>{{{ $char->toughness }}}</dd>
                                <dt>Healing</dt>
                                <dd>{{{ $char->healing }}}</dd>
                            </dl>
                        </div>
                        <div class="col-sm-8 equipment-table">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Slot</th>
                                        <th>Item</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($gear as $g)
                                        @if($g->characterId == $char->characterId)
                                        <tr>
                                            <td class="right-shift"> {{{ $g->slot }}} </td>
                                            <td class="{{{ $g->displayColor}}}"> [{{{ $g->name }}}] </td>
                                        </tr>
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@stop
