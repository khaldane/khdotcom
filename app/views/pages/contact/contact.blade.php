@extends('partials.default')

@section('meta_title', 'khaldane - portfolio')
@section('meta_description', 'my description')

@section('content')
    <div id="contact-wrap">
       <div class="content-left">
            <div class="contact-info">
                <h1>Contact</h1>
                <hr>
                <div class="contact-body">
                    <h3>Mobile Phone</h3>
                    <p class="about" >519-872-6992</p>
                    <h3>Location</h3>
                    <p class="about" >London, Ontario</p>
                    <h3>Email</h3>
                    <p class="about">khaldane19@gmail.com</p>
                </div>
            </div>
        </div>
        <div class="content-right">
         <div id="world-map-gdp" style="width: 600px; height: 400px"></div>
          <script>
            $(function(){
              $('#world-map-gdp').vectorMap({
                  map: 'world_mill_en',
                  series: {
                    regions: [{
                      scale: ['#C8EEFF', '#0071A4'],
                      normalizeFunction: 'polynomial'
                    }]
                  },
                  onRegionTipShow: function(e, el, code){
                    el.html(el.html()+' (GDP - '+gdpData[code]+')');
                  }
                });
            });
          </script>
        </div>
    </div>
@stop
