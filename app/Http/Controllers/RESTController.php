<?php

namespace App\Http\Controllers;

use App\Country;

class RESTController extends Controller
{

    public function showCountryAndCities($item_count)
    {
        return response()->json(Country::all()->random($item_count)->load('cities'));
    }

    public function helloWorld()
    {
        return response()->json("Hello world!");
    }
}