
@foreach ($places as $place)
@if ($place->type == "party" && $title == "Party")
<div class="card animated flipInX">
  <div class="img-container" style="background: url({{$place->image}}) no-repeat center center; background-size: cover; " )>
    <h4>{{$place->title}}</h4>
  </div>

  <div class="container">
    <p class="desc">{{$place->description}}</p>
  </div>

  <div class="options">
    <i class="fas fa-ellipsis-h"></i>
    <i class="fas fa-share-alt"></i> 
    <favorite :place={{ $place->id }} :favorited={{ $place->favorited() ? 'true' : 'false' }} >
    </favorite>
    
  </div>
</div>
@endif

@if ($place->type == "travel" && $title == "Travel")
<div class="card animated flipInX">
  <div class="img-container" style="background: url({{$place->image}}) no-repeat center center; background-size: cover; " )>
    <h4>{{$place->title}}</h4>
  </div>

  <div class="container">
    <p class="desc">{{$place->description}}</p>
  </div>

  <div class="options">
    <i class="fas fa-ellipsis-h"></i>
    <i class="fas fa-share-alt"></i> 
    <favorite :place={{ $place->id }} :favorited={{ $place->favorited() ? 'true' : 'false' }} >
    </favorite>
    
  </div>
</div>
@endif

@endforeach