<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;


use Illuminate\Http\Request;

class GetText extends Controller
{

    public function getText()
    {
        $response = json_decode(Http::get('https://icanhazdadjoke.com/slack'));
        $text = $response->attachments[0]->text;
        echo $text;
    }
}
