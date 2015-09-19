@extends('partials.default')

@section('meta_title', 'khaldane - portfolio')
@section('meta_description', 'my description')

@section('content')
    <div id="portfolio-wrap" class="about">
        <div class="portfolio-header">
            <div class="portfolio-title">
                <h2>{{{ $tutorial->title}}}</h2>
                <hr class="hr-small">
                 <div class="tutorial-types row">
                    <div class="col-sm-3 white" >
                        <a href="/tutorials">
                            <h3 class="header-center">Cosplay</h3>
                        </a>
                     </div>
                    <div class="col-sm-3 white">
                         <a href="/android">
                            <h3 class="header-center">Android</h3>
                        </a>
                     </div>
                    <div class="col-sm-3 white">
                         <a href="/ios">
                            <h3 class="header-center">iOS</h3>
                        </a>
                     </div>
                      <div class="col-sm-3 white">
                           <a href="/php">
                            <h3 class="header-center">PHP</h3>
                        </a>
                     </div>
                </div>
            </div>
        </div>
        <div class="tutorials-body">
            <div class="container">
                <div class="row">
                    <?php echo($tutorial->description) ?>
                </div>
            </div>
        </div>
    </div>
@stop
