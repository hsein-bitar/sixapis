<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SecondsPassed extends Controller
{
    public function countSeconds()
    {
        $start = strtotime('14-04-1732');
        return response()->json([
            'seconds' => time() - $start,
        ], 200);
    }
}
