@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html>
<title>Dar Running Website</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>

<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

<link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('css/validate.css') }}"/>
<script type="text/javascript" src="{{ URL::asset('js/index.js') }}"></script>



<body>

<div class="container">
  <h2>Dar Running Club Blog</h2>
    <b><hr></b>
  <h4 class="text-secondary">Stay informed with the club</h4>
    <br>
    <br>
    <br>

  <div class="">

     <div class="col-md-4 pb-5 pull-right">
        <div class="col-md-12">
          <div class="bg-info col-md-4 row col-sm-4 col-xs-4">
            <h4>News</h4>
          </div>
        </div>

        <div class="col-md-12 col-sm-12 col-xs-12 border border-info p-2">

          @foreach($headlines as $headline)
              <div class="col-md-12 bg-info mb-2 p-2">
                <h5><u>{{ $headline->heading }}</u></h5>
                  <p>
                    {{ $headline->body }}
                  </p>
              </div>
          @endforeach

        </div>

      </div>

     @foreach($posts as $post)

    <div class="col-md-8">
        <div class="row post_head rounded-top d-flex p-2">
          <span class="p-2 post-head">{{ $post->title }}</span>
          <span class="p-2 text-muted">{{ $post->created_at->diffForHumans() }}</span>
          <div class="ml-auto p-2"><sup>by &nbsp;&nbsp;</sup>{{ $post->user }}</div>
        </div>

        <div class="content row p-3 border-right border-left">

          <span class="post-subhead text-muted"><i>{{ $post->sub_title }}</i></span>

          <div class="container-fluid">
              <span class="pl-1 pr-1">{!! nl2br($post->content) !!}</span>
          </div>

          <br>

        </div>
        <div class="panel-group" id="accordion">



          <div class="panel panel-default bg-dark row" style="border-radius: 0px">
            <div id="race_title" class="p-3">
              <h4 class="panel-title">
                <a class="accordion-toggle <?php  if((Auth::user())==null) { echo e('disabled'); }  ?> thee_title" data-toggle="collapse" data-parent="#accordion" href="#{{ $post->id }}">
                    Replies
                </a>
              </h4>
            </div>

            <div class="col-md-4 <?php  if(!(Auth::user())==null) { echo ('blind'); }  ?> text-secondary p-2 pull-right ">
              <span class="pull-right">You have to be logged in to view or reply</span>
              
            </div>

            <div id="{{ $post->id }}" class="container-fluid panel-collapse collapse">

              <div class="p-4">

              @foreach($replies as $reply)

                    @if ( $post->id == $reply->post_id ) 
                      <table>
                             <tr><td class=""><span class="text-muted p-2 align-text-top">{{ $reply->user }}:</span></td><td style="color: #fff">{{ $reply->content }}</td></tr>
                      </table>
                    @endif

              @endforeach

              </div>
                <div class="container-fluid mt-5">

                  <form action="{{ route('reply', ['id' => $post->id]) }}" method="post">
                    {{ csrf_field() }}

                    <div class="col-md-10">
                      <input width="100%" class="form-control" type="text" name="post_reply" required>                  
                    </div>

                    <div class="col-md-10">
                      <input hidden width="100%" class="form-control" value="<?php if(!(Auth::user())==null) { echo e(Auth::user()->name); } ?>" type="text" name="user_name" required>                  
                    </div>

                    <div class="col-md-2 pb-4">
                      <button class="btn pull-right btn-default" type="" name="reply_form">Reply</button>
                    </div>

                  </form>

                </div>


              </div>


            </div>
          </div>
      </div>

      @endforeach 

  </div>
    <div class="col-md-12 text-center">

      {{ $posts->links() }}

    </div>

  </div>

<br>
<br>
<br>
<div class="container-fluid bg-dark pb-3 mt-5">
  <br>
  <div class="col-md-6 border-right border-black">
    <div class="col-md-6 pull-right">
    <h4 class="text-light text-center">Contact Information</h4><br>
      <p class="text-muted"><i class="glyphicon glyphicon-map-marker history_text"></i> &nbsp;&nbsp;Makumbusho, Dar es Salaam, Tanzania</p><br>
      <p class="text-muted"><i class="glyphicon glyphicon-phone-alt history_text"></i> &nbsp;&nbsp;0777 897 456</p><br>
      <p class="text-muted"><i class="glyphicon glyphicon-send history_text"></i> &nbsp;&nbsp;email@domain.com</p>
    </div>
  </div>

  <div class="col-md-6">
    <div class="col-md-6 text-center" style="font-size: 18px">
    <h4 class="text-light text-center">Useful Links</h4><br>
      <a href="">About Us</a><br>
      <a href="">Register</a><br>
      <a href="">Events</a><br>
    </div>
  </div>
</div>



<footer class="w3-center w3-black w3-padding-16">
    &copy; Dar Running Club Website 2018
</footer>

</body>
</html>

@endsection
