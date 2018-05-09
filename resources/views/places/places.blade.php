@foreach ($places as $place) @if ($place->type == "party" && $title == "Party")
<div class="card animated flipInX">
  <div class="img-container" style="background: url({{$place->image}}) no-repeat center center; background-size: cover; " )>
    <h4>{{$place->title}}</h4>
  </div>

  <div class="container">
    <p class="desc">{{$place->description}}</p>
  </div>
  <div class="moreopt share animated">
      <a href="#x" class="optbt"> <i class="fab fa-instagram"></i></a>
      <a href="#x" class="optbt"><i class="fab fa-whatsapp"></i></a>
      <a href="#x" class="optbt"><i class="fab fa-facebook-square"></i></a>
      <a href="#x" class="optbt"><i class="fab fa-twitter-square"></i> </a>
    </div>
    
  <div class="options animated">
    <a href="#x"> <i class="fas fa-share-alt"></i></a> @if (Auth::check())
    <div class="panel-footer">
      <favorite :place={{ $place->id }} :favorited={{ $place->favorited() ? 'true' : 'false' }} >
      </favorite>
    </div>
    @endif
  </div>
</div>


@endif @if ($place->type == "travel" && $title == "Travel")
<div class="card animated flipInX">
  <div class="img-container" style="background: url({{$place->image}}) no-repeat center center; background-size: cover; " )>
    <h4>{{$place->title}}</h4>
  </div>

  <div class="container">
    <p class="desc">{{$place->description}}</p>
  </div>
  <div class="moreopt share animated">
      <a href="#x" class="optbt"> <i class="fab fa-instagram"></i></a>
      <a href="#x" class="optbt"><i class="fab fa-whatsapp"></i></a>
      <a href="#x" class="optbt"><i class="fab fa-facebook-square"></i></a>
      <a href="#x" class="optbt"><i class="fab fa-twitter-square"></i> </a>
    </div>

  <div class="options animated">
    <a href="#x"> <i class="fas fa-share-alt"></i></a> @if (Auth::check())
    <div class="panel-footer">
      <favorite :place={{ $place->id }} :favorited={{ $place->favorited() ? 'true' : 'false' }} >
      </favorite>
    </div>
    @endif

  </div>
</div>
@endif @endforeach