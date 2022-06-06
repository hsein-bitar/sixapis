<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PalindromeController extends Controller
{


    public function countPalindromes()
    {
        $words = ['hello', 'how', 'are', 'you', 'redivider', 'deified', 'civic', 'radar', 'level', 'rotor', 'kayak', 'reviver', 'racecar', 'madam', 'and', 'refer'];
        $count = 0;
        foreach ($words as $word) {
            if (strrev($word) === $word) {
                $count++;
            }
        }

        return response()->json([
            "count" => $count,
        ], 200);
    }
}
