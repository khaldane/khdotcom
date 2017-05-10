 $(function(){
  $('#world-map-markers').vectorMap({
    map: 'world_mill_en',
    zoomOnScroll: false,
    zoomButtons: false,
    scaleColors: ['#C8EEFF', '#0071A4'],
    normalizeFunction: 'polynomial',
    hoverOpacity: 0.7,
    hoverColor: false,
    regionStyle: {
      initial: {
        fill: '#50b3eb',
        "fill-opacity": 1
      }  
    },
    markerStyle: {
      initial: {
        fill: '#990000',
        stroke: '#7f0000'
      }
    },
    backgroundColor: '#f0f5f8',
    onRegionLabelShow: function (e, el, code) {
         e.preventDefault();
     },
    markers: [      
      {latLng: [33.6839, -117.7947], name: 'Irvine, CA'}
    ]
  });
});