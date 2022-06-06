<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GroupsOfTwo extends Controller
{
    //

    public function groupsOfTwo()
    {
        $students = ['tarek', 'hsein', 'anthony', 'stephanelle', 'khaled', 'ali', 'samah', 'malak', 'vladimir', 'lama', 'hisham', 'joe', 'joseph', 'georgio', 'sam'];
        $count = count($students);
        $i = $j = 0;
        $list = [];
        while ($i < $count) {
            if (($count - $i) == 1) {
                $list[$j] = [$students[$i]];
                break;
            } elseif ($i % 2 == 0) {
                $list[$j] = [$students[$i], $students[$i + 1]];
                $i += 2;
                ++$j;
            }
        }
        return response()->json([
            "list" => $list,
        ], 200);
    }
}
