<div class="place-info animated">
  <div class="img-container" style="background: url({{$places[0]->image}}) no-repeat center center fixed; background-size: cover; "
    )>
    <i class="fas fa-arrow-left"></i>
    <h4>{{$places[0]->title}}</h4>
  </div>

  <div class="place-tags">
    <ul class="tag-list">
      <li class="tag tag1">tag</li>
      <li class="tag tag2">tag</li>
      <li class="tag tag3">tag</li>
      <li class="tag tag4">tag</li>
      <li class="tag tag5">tag</li>
      <li class="tag tag1">tag</li>
      <li class="tag tag2">tag</li>

    </ul>
  </div>

  <div class="container">
    
    <p>{{$places[16]->description}}</p>
    <div class="options">
      <i class="fas fa-share-alt"></i>
      <favorite
      :place={{ $places[0]->id }}
      :favorited={{ $places[0]->favorited() ? 'true' : 'false' }}
  ></favorite>
    </div>

    <div id="map"></div>
    <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 8
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDQbWA63lmIyCwmikhvMgNt8PeI2-HAj9w&callback=initMap" async
      defer></script>

  </div>
  <div class="place-contact">
    <p> email bla blaemail bla blaemail bla blaemail bla blaemail bla blaemail bla blaemail bla blaemail bla blaemail bla blaemail
      bla blaemail bla bla</p>
  </div>

</div>