<div class="gaming about">
    <div class="container">
        <div class="row">
            <div class=" col-sm-4">
                <div>
                    <h3>Career</h3>
                    <dl>
                        <dt>Battle Tag</dt>
                        <dd> {{ $career->battleTag }} </dd>
                        <dt>Lifetime Kills</dt>
                        <dd>{{ $career->monsters}} </dd>
                        <dt>Elite Kills</dt>
                        <dd>{{ $career->elites}} </dd>
                        <dt>Paragon Level</dt>
                        <dd>{{ $career->paragonLevel}} </dd>
                    </dl>
                </div>
                <div>
                    <h3>Time Played</h3>
                    <dl>
                        <dt>Barbarian</dt>
                        <dd>
                               <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                    aria-valuemin="0" aria-valuemax="100" style="width:9%">
                                    </div>
                                </div>
                        </dd>
                        <dt>Crusader</dt>
                        <dd>
                           <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                aria-valuemin="0" aria-valuemax="100" style="width:20%">
                                </div>
                            </div>
                        </dd>
                        <dt>Demon Hunter</dt>
                        <dd>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                    aria-valuemin="0" aria-valuemax="90" style="width:90%">
                                    </div>
                                </div>
                        </dd>
                        <dt>Monk</dt>
                        <dd>
                           <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                aria-valuemin="0" aria-valuemax="100" style="width:7%">
                                </div>
                            </div>
                        </dd>
                        <dt>Witch Doctor</dt>
                        <dd>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                aria-valuemin="0" aria-valuemax="100" style="width:100%">
                                </div>
                            </div>
                        </dd>
                        <dt>Wizard</dt>
                        <dd>
                           <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                aria-valuemin="0" aria-valuemax="100" style="width:35%">
                                </div>
                            </div>
                        </dd>
                    </dl>
                </div>
            </div>
            <div class="col-sm-8">
                @foreach($characters as $char)
                    <div class="character-header col-sm-12">
                        <div class="character-header">
                            <div class="character-details black">
                                <div class="diablo-img {{ $char->style }}"> </div>
                                <h3>{{ $char->name }} </h3>
                                <p class="about">{{ $char->level}} {{ $char->class }}</p>
                            </div>
                            <hr class="hr-gaming">
                        </div>
                        <div class="col-sm-4 character-attributes">
                            <h3>Attributes</h3>
                            <dl>
                                <dt>Strength</dt>
                                <dd>{{ $char->strength }}</dd>
                                <dt>Dexterity</dt>
                                <dd>{{ $char->dexterity }}</dd>
                                <dt>Intelligence</dt>
                                <dd>{{ $char->Intelligence }}</dd>

                                <dt>Vitality</dt>
                                <dd>{{ $char->vitality }}</dd>
                            </dl>
                            <dl>
                                <dt>Damage</dt>
                                <dd>{{ $char->damage }}</dd>
                                <dt>Toughness</dt>
                                <dd>{{ $char->toughness }}</dd>
                                <dt>Healing</dt>
                                <dd>{{ $char->healing }}</dd>
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
                                            <td class="right-shift"> {{ $g->slot }} </td>
                                            <td class="{{ $g->displayColor}}"> [{{ $g->name }}] </td>
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
</div>