<?php

namespace App\Http\Controllers;

use DB;

class DataController extends Controller
{
    //
    public function index($tp)
    {

        switch ($tp) {

            case "tr":
                $places = DB::select('select * from travel');
                return view('places.layout')
                    ->with('title', 'Travel')
                    ->with('places',$places)
                    ->with('swap',"/search/pt")
                    ->with('bg',"../img/nobg.jpg) no-repeat center center fixed; background-size: cover;");
                break;
            case "pt":
                $places = DB::select('select * from party');
                return view('places.layout')
                    ->with('title', 'Party')
                    ->with('places',$places)
                    ->with('swap',"/search/tr")
                    ->with('bg',"../img/nobg.jpg) no-repeat center center fixed; background-size: cover; height: 100%;");

                break;
        }

    }
}
