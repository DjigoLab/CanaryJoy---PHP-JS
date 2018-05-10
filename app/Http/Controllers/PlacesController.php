<?php

namespace App\Http\Controllers;

use App\Place;
use DB;
use Illuminate\Http\Request;

class PlacesController extends Controller
{
    //
    public function index($tp)
    {
        $places = DB::select('select * from places');
        
        switch ($tp) {

            case "tr":
                return view('places.layout')
                    ->with('title', 'Travel')
                    ->with('places', $places)
                    ->with('swap', "/search/pt")
                    ->with('bg', "../img/wood.png)");
                break;
            case "pt":
                return view('places.layout')
                    ->with('title', 'Party')
                    ->with('places', $places)
                    ->with('swap', "/search/tr")
                    ->with('bg', "../img/purple.png);");
                break;
        }

    }

    public function store(Request $request, Place $place)
    {
       $id = $place->id;
        $request->user()->favouriteProducts()->syncWithoutDetaching($id);
        

        return back();
    }
}
