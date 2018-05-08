<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Replies;
use App\Headlines;
use DB;

class NewsController extends Controller
{
    //

   public function index()
   {
   	  $posts = News::orderBy('created_at', 'desc')->paginate(5);
        $replies = Replies::all();
   	  $headlines = Headlines::all();

   	  //dd($replies);


   	  return view('newsblog')->with('headlines', $headlines)->with('posts', $posts)->with('replies', $replies);

   }

   public function reply(Request $request, $id)
   {

    if ($request->has('reply_form')) {
       

    
       	$reply = new Replies();

        $reply->post_id = $id;
       	$reply->user    = $request['user_name'];
       	$reply->content = $request['post_reply'];

       	$reply->save();
      
      }
   	return redirect()->route('blog');

   }

}
