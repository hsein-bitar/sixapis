<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Nominee extends Controller
{
    public function nominee()
    {
        $students = ['tarek', 'hsein', 'anthony', 'stephanelle', 'khaled', 'ali', 'samah', 'malak', 'vladimir', 'lama', 'hisham', 'joe', 'joseph', 'georgio', 'sam'];
        array_push($students, "Pablo", "Pablo", "Pablo", "Pablo");
        shuffle($students);
        $count = count($students);
        $i = rand(0, $count - 1);
        return response()->json([
            "nominee" => $students[$i],
        ], 200);
    }
}
