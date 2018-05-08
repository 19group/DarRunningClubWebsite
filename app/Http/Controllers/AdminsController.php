<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\News;
use App\Races;
use App\Runs;
use App\achievements;
use App\Headlines;

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

        if ($request->has('achieve')) {
           
           achievements::where('experience', $exp)->update(['experience'=> $request->input('years'), 'marathons'=> $request->input('marathons'), 'podium'=> $request->input('podium'), 'medals'=> $request->input('medals')]);

        }
    	

        if ($request->has('run')) {
            
            $update = new Runs();

        $update->title       = $request->input('title');
        $update->area        = $request->input('area');
        $update->slug        = str_slug($request->input('title'));
        $update->description = $request->input('description');
        $update->schedules   = $request->input('schedules');
        $update->contact     = $request->input('contact');

        //dd($update);

        $update->save();

        }

    	return redirect()->back();
    }

    public function registerAdmin(Request $request)
    {

        dd($request['email']);

        $admin = new User();

        $admin->name = $request['first_name'];
        $admin->email = $request['email'];
        $admin->admin = '1';
        $admin->password = Hash::make($request['password']);

        $admin->save();

        return redirect()->back();

    }

    public function delete(Request $request, $title)
    {
    	
        //if ($request->has('delete')) {
            
            dd($title);

        //}
    	return redirect()->route('posts');
    }

    public function showPosts()
    {
        //$latestpost = News::first();
        $latestpost = News::orderBy('id', 'desc')->first();
        $latestNews = Headlines::orderBy('id', 'desc')->first();


        return view('adminpost')->with('post', $latestpost)->with('headline', $latestNews);
    }

     public function createPosts(Request $request, $creater)
    {
        if ($request->has('post')) {
            
            $post = new News();

            $post->user = $creater;
            $post->title = $request['title'];
            $post->sub_title = $request['sub_title'];
            $post->content = $request['content'];
           
           $post->save();

        }

        if ($request->has('headline')) {
            
            $news = new Headlines();

            $news->heading = $request['headline_head'];
            $news->body = $request['headline_content'];
           
           $news->save();
           
        }
       
       return redirect()->route('posts');
    }
}
