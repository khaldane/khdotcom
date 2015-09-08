 @extends('partials.default')

@section('meta_title', 'khaldane - portfolio')
@section('meta_description', 'my description')

@section('content')
    <div id="portfolio-wrap">
        <div class="portfolio-header">
            <div class="portfolio-title">
                <h2>Who wants to play videogames?</h2>
                <hr class="hr-small">
                <div class="game-types row">
                    <div class="col-sm-4" ><h3 class="header-center">World of Warcraft</h3></div>
                    <div class="col-sm-4"><h3 class="header-center">Diablo 3</h3></div>
                    <div class="col-sm-4"><h3 class="header-center">Heroes of the Storm</h3></div>
                </div>
            </div>
        </div>
        <div class="gaming">
            <?php var_dump($character); ?>
            <img src="http://us.battle.net/static-render/us/{{{ $character->thumbnail }}}" alt="Khaazix"/>
        </div>
    </div>
@stop
