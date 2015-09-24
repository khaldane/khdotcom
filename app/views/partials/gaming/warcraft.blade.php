<div class="gaming about" id="wow">
    <div class="container">
        <div class="row">
            <div class=" col-sm-5">
                @foreach($characters as $char)
                    @if($char->name != 'Khaazix')
                        <div class="character-header">
                            <div class="character-details black">
                                <img class="character-img" src="http://us.battle.net/static-render/us/{{ $char->thumbnail }}" alt="Khaazix"/>
                                <h3><a href="{{ $char->armory}}" target="_blank">{{ $char->name }}</a></h3>
                        <p class="about">{{ $char->level}} {{ $char->type }} {{ $char->raceName }} {{ $char->className }} <br> {{ $char->realm }} </p>
                            </div>
                            <hr class="hr-gaming">
                        </div>
                @endif

                @endforeach
            </div>
            <div class="character-header col-sm-7">
                <div class="character-details black">
                    <img class="character-img" src="http://us.battle.net/static-render/us/{{ $character->thumbnail }}" alt="Khaazix"/>
                    <h3><a href="{{ $character->armory}}" target="_blank">{{ $character->name }}</a> </h3>
            <p class="about">{{ $character->level}} {{ $character->type }} {{ $character->raceName }} {{ $character->className }} <br> {{ $character->realm }} </p>
                </div>
                <hr class="hr-gaming">
                <div class="col-sm-6">
                    <h4>Stats</h4>
                    <dl>
                        <dt>Health</dt>
                        <dd>{{ $stats->health }}</dd>
                        <dt>Strength</dt>
                        <dd>{{ $stats->strength}}</dd>
                        <dt>Haste</dt>
                        <dd>{{ $stats->haste}}</dd>
                        <dt>Multistrike</dt>
                        <dd>{{ $stats->multistrike}}</dd>
                        <dt>Mastery</dt>
                        <dd>{{ $stats->mastery}}</dd>
                        <dt>Versatility</dt>
                        <dd>{{ $stats->versatility}}</dd>
                        <dt>Critical Strike</dt>
                        <dd>{{ $stats->criticalStrike }}</dd>
                    </dl>
                </div>
                <div class="col-sm-4">
                    <h4>Honourable Kills</h4>
                    <p>{{ $stats->itemLevel }}</p>
                    <hr>
                     <h4>Arena</h4>
                        <dl>
                            <div class="col-sm-4">
                                <dt>2v2</dt>
                                <dd>0</dd>
                            </div>
                            <div class="col-sm-4">
                                <dt>3v3</dt>
                                <dd>0</dd>
                            </div>
                            <div class="col-sm-4">
                                <dt>5v5</dt>
                                <dd>0</dd>
                            </div>
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
                                <td class="right-shift"> {{ $e->slot }} </td>
                                <td> {{ $e->level }} </td>
                                <td class="purple"> {{ $e->itemName }}</td>
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
                          </div>
                          <span>1082 / 2510</span>
                        </div>
                    </dl>
                    <dl class="col-sm-6">
                        <dt>General</dt>
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="70"
                          aria-valuemin="0" aria-valuemax="100" style="width:66%">
                          </div>
                            <span> 40/ 60</span>
                        </div>
                    </dl>
                    <dl class="col-sm-6">
                        <dt>Collections</dt>
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="70"
                          aria-valuemin="0" aria-valuemax="100" style="width:47%">
                          </div>
                            <span>16 / 34</span>
                        </div>
                    </dl>
                    <dl class="col-sm-6">
                        <dt>Quests</dt>
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="70"
                          aria-valuemin="0" aria-valuemax="100" style="width:25%"></div>
                            <span> 64 / 254</span>
                        </div>
                    </dl>
                    <dl class="col-sm-6">
                        <dt>Dungeons &amp; Raids</dt>
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="70"
                          aria-valuemin="0" aria-valuemax="100" style="width:50%">
                          </div>
                            <span> 448 / 883</span>
                        </div>
                    </dl>
                    <dl class="col-sm-6">
                        <dt>Player vs Player</dt>
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="70"
                          aria-valuemin="0" aria-valuemax="100" style="width:33%">
                          </div>
                            <span> 96 / 285 </span>
                        </div>
                    </dl>
                    <dl class="col-sm-6">
                        <dt>Exploration</dt>
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="70"
                          aria-valuemin="0" aria-valuemax="100" style="width:57%">
                          </div>
                            <span> 87 / 152 </span>
                        </div>
                    </dl>
                    <dl class="col-sm-6">
                        <dt>Professions</dt>
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="70"
                          aria-valuemin="0" aria-valuemax="100" style="width:27%">
                          </div>
                            <span> 63 / 231 </span>
                        </div>
                    </dl>
                    <dl class="col-sm-6">
                        <dt>Reputations</dt>
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="70"
                          aria-valuemin="0" aria-valuemax="100" style="width:40%">
                          </div>
                            <span> 33 / 81 </span>
                        </div>
                    </dl>
                    <dl class="col-sm-6">
                        <dt>Scenarios</dt>
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="70"
                          aria-valuemin="0" aria-valuemax="100" style="width:18%">
                          </div>
                            <span> 14 / 77 </span>
                        </div>
                    </dl>
                    <dl class="col-sm-6">
                        <dt>Garrisons</dt>
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="70"
                          aria-valuemin="0" aria-valuemax="100" style="width:33%">
                          </div>
                            <span> 40 / 121 </span>
                        </div>
                    </dl>
                    <dl class="col-sm-6">
                        <dt>Pet Battles</dt>
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="70"
                          aria-valuemin="0" aria-valuemax="100" style="width:33%">
                          </div>
                            <span> 34 / 103 </span>
                        </div>
                    </dl>
                    <dl class="col-sm-6">
                        <dt>World Events</dt>
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="70"
                          aria-valuemin="0" aria-valuemax="100" style="width:60%">
                          </div>
                            <span> 137 / 228 </span>
                        </div>
                    </dl>
                    <dl class="col-sm-6">
                        <dt>Feats of Strength</dt>
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="70"
                          aria-valuemin="0" aria-valuemax="100" style="width:100%">
                          </div>
                            <span>29</span>
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
                              </div>
                                <span> 230 / 544 </span>
                            </div>
                        </dl>
                        <dl class="col-sm-6">
                            <dt>Pets</dt>
                            <div class="progress">
                              <div class="progress-bar" role="progressbar" aria-valuenow="70"
                              aria-valuemin="0" aria-valuemax="100" style="width:53%">
                              </div>
                                <span> 122 / 230 </span>
                            </div>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>