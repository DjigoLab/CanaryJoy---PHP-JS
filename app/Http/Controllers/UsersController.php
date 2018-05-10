<?php

namespace App\Http\Controllers;


use Auth;
class UsersController extends Controller
{
    //// remember to use

/**
 * Get all favorite posts by user
 *
 * @return Response
 */
   public function myFavorites()
    {
        $myFavorites = Auth::user()->favorites;

        return view('auth.favorites', compact('myFavorites'));

    }
}
