<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PointController extends Controller
{
    public function index()
    {
        $user  = Auth::user();
        $points = fmod($user->points,10);
        $max_point = 10;
        $progress = ($points / $max_point) * 100;
        $level = $user->level;
        return view("dashboard", compact("user","level","points","progress", "max_point"));
    }

    public function kamus()
    {
        $user  = Auth::user();
        $points = fmod($user->points,10);
        $max_point = 10;
        $progress = ($points / $max_point) * 100;
        $level = $user->level;
        return view("kamus", compact("user","level","points","progress", "max_point"));
    }

    public function dictionary()
    {
        $user  = Auth::user();
        $points = fmod($user->points,10);
        $max_point = 10;
        $progress = ($points / $max_point) * 100;
        $level = $user->level;
        return view("dictionary", compact("user","level","points","progress", "max_point"));
    }

    public function AddPoints(Request $request)
    {
        $user = Auth::user();
        $user->GetPoints(2);
        
        if($user->points >=10 && $user->points < 20) {
            $user->level = 2;
            $user->save();
        }else if($user->points >=20 && $user->points < 30) {
            $user->level = 3;
            $user->save();
        }else if($user->points >= 30 ){
            $user->level = floor( $user->points /10) + 1;
            $user->save();
        }
        $user->save();
        return response()->json(['status'=> 'success']);
    }

    public function UserLevel()
    {
        $user = Auth::user();
        $points = fmod($user->points,10);
        $level = $user->level;
        $max_point = 10;
        $progress = ($points / $max_point) * 100;
        return response()->json([ 
            'level' => $level,
            'points' => $points,
            'max_point' => $max_point,
            'progress' => $progress,
        ]);                 
    }
}
