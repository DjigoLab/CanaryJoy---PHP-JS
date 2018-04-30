<?php

namespace App\Http\Controllers;

class DataController extends Controller
{
    //
    public function index($tp)
    {

        switch ($tp) {

            case "tr":
                return view('layout')
                    ->with('title', 'Travel around Gran Canaria')
                    ->with('json', 'json');
                break;
            case "pt":
                return view('layout')
                    ->with('title', 'Party around Gran Canaria')
                    ->with('json', 'json');
                break;
        }

    }
}
