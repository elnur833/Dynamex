var lat = 40.379773,
        lon = 49.830149,
        map,marker,position=new google.maps.LatLng(lat,lon);
        
   
definePopupClass();
    function initMap() {
        var mapOptions = {
            zoom: 15,
            position: position,
            map: map,
            disableDefaultUI: true,
            zoomControl: false,
            scrollwheel: false,
            center: position,


            
        };

        var mapElement = document.getElementById('map');

        map = new google.maps.Map(mapElement, mapOptions);

        marker = new google.maps.Marker({
            position:position,
            map: map,
            icon:"assets/css/images/map-pin.svg"
        });
         
    popup = new Popup(
      new google.maps.LatLng(lat,lon),
      document.getElementById('content'));
  popup.setMap(map);
}

