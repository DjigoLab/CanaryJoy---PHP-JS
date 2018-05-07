@section('content') @forelse ($places as $place)
<div class="panel panel-default">
    <div class="panel-heading">
        {{ $place->title }}
    </div>

    <div class="panel-body">
        {{ $place->desc }}
    </div>
    @if (Auth::check())
    <div class="panel-footer">
        <favorite :post={{ $place->id }} :favorited={{ $place->favorited() ? 'true' : 'false' }} >
        </favorite>
    </div>
    @endif
</div>
@empty
<p>You have no favorite posts.</p>
@endforelse
@endsection