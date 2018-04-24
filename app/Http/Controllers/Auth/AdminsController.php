<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\User;
use App\News;
use App\Races;
use App\Runs;

class AdminsController extends Controller
{
    //


     use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin';



    public function index()
    {
    	$users = User::all();
    	$posts = News::all();
        $races = Races::all();
    	$runs = Runs::all();

    	return view("dashboard")->with('runs', $runs)->with('users', $users)->with('posts', $posts)->with('races', $races);

    }
}
