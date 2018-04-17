<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Races;
use App\Achievements;
use App\Runs;

class RaceController extends Controller
{
    //
    public function index()
    {
    	$races = Races::all();
    	$achievements = Achievements::first();
    	$runs = Runs::all();

    	//dd($runs);

    	return view('index')->with('races',$races)->with('runs',$runs)->with('achievements',$achievements);
    }
}
