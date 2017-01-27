 // Google Map for contact section
 window.onload = function() {
     var styles = [{
         featureType: 'water',
         elementType: 'geometry.fill',
         stylers: [{
             color: '#adc9b8'
         }]
     }, {
         featureType: 'landscape.natural',
         elementType: 'all',
         stylers: [{
             hue: '#00aaff'
         }, {
             saturation: '-95'
         }, {
             lightness: 0
         }]
     }, {
         featureType: 'poi',
         elementType: 'geometry',
         stylers: [{
             hue: '#f9e0b7'
         }, {
             lightness: 30
         }]
     }, {
         featureType: 'road',
         elementType: 'geometry',
         stylers: [{
             hue: '#00aaff'
         }, {
             saturation: '-95'
         }, {
             lightness: 14
         }]
     }, ];
     var options = {
         mapTypeControlOptions: {
             mapTypeIds: ['Styled']
         },
         center: new google.maps.LatLng(43.773137, -79.331068),
         zoom: 15,
         streetViewControl: false,
         mapTypeControl: false,
         scrollwheel: false,
         mapTypeId: 'Styled'
     };
     var div = document.getElementById('map');
     var map = new google.maps.Map(div, options);
     var marker_img = 'images/gps_marker.png';
     var marker = new google.maps.Marker({
         position: new google.maps.LatLng(43.773137, -79.331068),
         map: map,
         icon: marker_img,
         title: "Prasanjit Singh"
     });
     var styledMapType = new google.maps.StyledMapType(styles, {
         name: 'Styled'
     });
     map.mapTypes.set('Styled', styledMapType);
 }