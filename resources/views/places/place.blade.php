<div class="place-info animated">
  <div class="img-container" style="background: url({{$places[0]->image}}) no-repeat center center fixed; background-size: cover;"
    )>
    <i class="fas fa-arrow-circle-left"></i>
    <h4>
    </h4>
    <span class="id">{{$places[0]->id}}</span>
  </div>



  <div class="container">
    <p class="desc">{{$places[16]->description}}</p>
    <div class="moreopt share animated">
      <a href="#x" class="optbt"> <i class="fab fa-instagram"></i></a>
      <a href="#x" class="optbt"><i class="fab fa-whatsapp"></i></a>
      <a href="#x" class="optbt"><i class="fab fa-facebook-square"></i></a>
      <a href="#x" class="optbt"><i class="fab fa-twitter-square"></i> </a>
    </div>
    <div class="options animated">
      <i class="fas fa-share-alt"></i>
   
    </div>
    <h5>Mapa</h5>
    <hr>
    <div id="map">
    </div>
    <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 28.107533985838646, lng: -15.434827436718706},
          zoom: 12
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDQbWA63lmIyCwmikhvMgNt8PeI2-HAj9w&callback=initMap" async
      defer></script>

  </div>
  <div class="place-contact">
    <h5>Contacto</h5>
    <hr>
    <p>
      Ayuntamiento de Las Palmas de Gran Canaria Casa del Turismo - Parque Santa Catalina 35007 Las Palmas de Gran Canaria Spain</p>
    <p>
      Tel. +34 928446824 (Concejalía de Turismo) </p>
  </div>

</div>