<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\News;
use App\Races;
use App\Runs;
use App\achievements;

class AdminsController extends Controller
{
    //

    public function index()
    {
    	$users = User::all();
    	$posts = News::all();
    	$races = Races::all();
    	$runs  = Runs::all();


    	return view("dashboard")->with('runs', $runs)->with('users', $users)->with('posts', $posts)->with('races', $races);
    }

    public function homepage()
    {
    	$achievements = achievements::first();
    	$runs  = Runs::all();


    	return view('homepage')->with('runs', $runs)->with('achievements', $achievements);
    }

    public function updateHomePage(Request $request, $exp)
    {
    	achievements::where('experience', $exp)->update(['experience'=> $request->input('years'), 'marathons'=> $request->input('marathons'), 'medals'=> $request->input('medals')]);

    	return redirect()->back();
    }

    public function insertRuns(Request $request)
    {
    	$update = new Runs();

    	$update->title 		= $request->input('title');
    	$update->area 		= $request->input('area');
    	$update->members 	= $request->input('members');
    	$update->schedules 	= $request->input('schedules');
    	$update->contact 	= $request->input('contact');

    	dd($update);

    	$update->save();

    	redirect()->back();
    }
}
