
@foreach ($places as $place)

<div class="card animated flipInX">
    <div class="img-container" style="background: url({{$place->image}}) no-repeat center center; background-size: cover; ")>
        <h4>{{$place->title}}</h4>
    </div>
   
    <div class="container">
      <p class="desc">{{$place->description}}</p>
    </div>

    <div class="options">
            <i class="fas fa-ellipsis-h"></i>
            <i class="fas fa-share-alt"></i>                  
            <i class="far fa-star"></i>
    </div>
  </div> 
@endforeach
