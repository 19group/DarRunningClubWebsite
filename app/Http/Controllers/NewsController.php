<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Replies;
use DB;

class NewsController extends Controller
{
    //

   public function index()
   {
   	  $posts = News::orderBy('created_at', 'desc')->paginate(5);
   	  $replies = Replies::all();

   	  //dd($replies);


   	  return view('newsblog')->with('posts', $posts)->with('replies', $replies);

   }

   public function reply(Request $request, $id)
   {

   	$reply = new Replies();

   	$reply->post_id = $id;
   	$reply->response = $request['post_reply'];

   	$reply->save();

   	return redirect()->route('blog');

   }

}
