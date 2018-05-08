@foreach ($places as $place) @if ($place->type == "party" && $title == "Party")
<div class="card animated flipInX">
  <div class="img-container" style="background: url({{$place->image}}) no-repeat center center; background-size: cover; " )>
    <h4>{{$place->id}}</h4>
  </div>

  <div class="container">
    <p class="desc">{{$place->description}}</p>
  </div>

  <div class="options">
    <a href="#" > <i class="fas fa-ellipsis-h"></i></a>
    <a href="#" > <i class="fas fa-share-alt"></i></a>
    <favorite
    :place={{ $place->id }}
    :favorited={{ $place->favorited() ? 'true' : 'false' }}
></favorite>
  </div>
</div>


@endif @if ($place->type == "travel" && $title == "Travel")
<div class="card animated flipInX">
  <div class="img-container" style="background: url({{$place->image}}) no-repeat center center; background-size: cover; " )>
    <h4>{{$place->id}}</h4>
  </div>

  <div class="container">
    <p class="desc">{{$place->description}}</p>
  </div>

  <div class="options">
    <a href="#" > <i class="fas fa-ellipsis-h"></i></a>
    <a href="#" > <i class="fas fa-share-alt"></i></a>
    <favorite
    :place={{ $place->id }}
    :favorited={{ $place->favorited() ? 'true' : 'false' }}
></favorite>

  </div>
</div>
@endif @endforeach

