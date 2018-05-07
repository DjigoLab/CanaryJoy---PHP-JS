<?php

namespace App\Http\Controllers;

use App\Place;
use DB;

class PlacesController extends Controller
{
    //
    public function index($tp)
    {
        switch ($tp) {

            case "tr":
            $places = Place::select('select * from places where type = "travel"');
            $places = Place::paginate();


                return view('places.layout')
                    ->with('title', 'Travel')
                    ->with('places', $places)
                    ->with('swap', "/search/pt")
                    ->with('bg', "../img/green.png)");
                break;
            case "pt":
            $places = DB::select('select * from places where type = "party"');
            $places = Place::paginate();

            return view('places.layout')
                    ->with('title', 'Party')
                    ->with('places', $places)
                    ->with('swap', "/search/tr")
                    ->with('bg', "../img/purple.png);");
                break;
        }

    }

/**
 * Favorite a particular Place
 *
 * @param  Place $place
 * @return Response
 */
    public function favoriteCard(Place $place)
    {
        Auth::user()->favorites()->attach($place->id);

        return back();
    }

/**
 * Unfavorite a particular Place
 *
 * @param  Place $place
 * @return Response
 */
    public function unFavoriteCard(Place $place)
    {
        Auth::user()->favorites()->detach($place->id);

        return back();
    }

    
}
