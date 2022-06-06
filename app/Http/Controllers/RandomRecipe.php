<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;

class RandomRecipe extends Controller
{
    //https://api.punkapi.com/v2/beers


    public function randomRecipe()
    {
        $index = rand(0, 24);
        $response = json_decode(Http::get('https://api.punkapi.com/v2/beers'));

        return response()->json([
            "recipe" => $response[$index],
        ], 200);
    }
}
