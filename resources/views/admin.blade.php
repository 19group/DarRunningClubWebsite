@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html>
<title>Dar Running Website</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>

<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

<link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('css/admin.css') }}" />
<script type="text/javascript" src="{{ URL::asset('js/index.js') }}"></script>



<body>

<div class="container-fluid">
  

  <!--Side Bar -->
  <div id="sidebar" class="col-md-2 col-sm-2 col-xs-4 bg-dark text-center text-light row">
    <div class="admin-links container-fluid">
      <table class="mt-4 table-borderless">
        <tr>
          <td><img width="48" height="48  " class="rounded-circle" src="{{ URL::asset('img/coachsm.png') }}"></td>
          <td> &nbsp;&nbsp;<sup class="text-muted">Admin</sup>&nbsp;{{ Auth::user()->name }}</td>
        </tr>
      </table>
    <div class="no-list-style pt-5 row">
        <ul class="">
          <li class="row pt-2  pb-2"><a href="{{ url('/admin') }}"><i class="text-light glyphicon glyphicon-dashboard"></i> Dashboard</a></li>
          <li class="row pt-2  pb-2"><a href="{{ url('/edit/homepage') }}"><i class="glyphicon glyphicon-home text-light"></i> Home Page</a></li>
          <li class="row pt-2  pb-2"><a href="{{ url('/posts') }}"><i class="glyphicon glyphicon-folder-open text-light"></i> &nbsp;Posts</a></li>
          <!--<li class="row pt-2  pb-2"><a href=""><i class="glyphicon glyphicon-comment text-light"></i> News & Events</a></li>
          <li class="row pt-2  pb-2"><a href=""><i class="glyphicon glyphicon-phone-alt text-light"></i> Contact Us</a></li>-->
        </ul>
      </div>
      <hr>

      <div class="no-list-style pt-3 row">
        <ul class="">
          <li class="row pt-2  pb-2"><button data-toggle="modal" class="btn btn-primary" data-target="#exampleModalCenter" type="button"> &nbsp;Add an Admin</button></li>
          <!--<li class="row pt-2  pb-2"><a href="{{ url('/admin') }}"><i class="text-light glyphicon glyphicon-user"></i> Members</a></li>-->
        </ul>
      </div>
    </div>
  </div>

  <!-- Content -->
  <div class="col-md-9">
   
   @yield('page')

  </div>

</div>

<!--Register Admin Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add an Admin</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form action="{{ route('reg_admin') }}" method="post">
          {{ csrf_field() }}


          <div class="form-group col-md-6">
              <input class="form-control" type="text" name="first_name" placeholder="First name">
          </div>

          <div class="form-group col-md-6">
              <input class="form-control" type="text" name="last_name" placeholder="Last name">
          </div>

          <div class="form-group col-md-12">
              <input class="form-control" type="email" name="email" placeholder="Email">
          </div>

          <div class="form-group col-md-12">
              <input class="form-control" type="password" name="pass_key" placeholder="Password">
          </div>

          <div class="form-group col-md-12">
              <input class="form-control" type="password" name="pass_key_2" placeholder="Retype password">
          </div>

          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button class="btn btn-primary">Register</button>
          </div>

        </form>

    </div>
  </div>
</div>


</body>
</html>

@endsection
