@extends('admin')
@section('page')

<div class="container-fluid">
	<h2>Dashboard</h2>
	<hr>

	<div class="col-md-3 border pull-left">
		<div class="col-md-4 bg-info row p-3">
			<i class="dash-icons glyphicon glyphicon-user"></i>
		</div>
		<div class="col-md-8 text-center">
			<h4>Members</h4>
			<span>{{ $users->count() }}</span>
		</div>
	</div>

	<div class="col-md-3 col-md-offset-1 border pull-left">
		<div class="col-md-4 bg-info row p-3">
			<i class="dash-icons glyphicon glyphicon-retweet"></i>
		</div>
		<div class="col-md-8 text-center">
			<h4>Races</h4>
			<span>{{ $races->count() }}</span>
		</div>
	</div>

	<div class="col-md-3 col-md-offset-1 border pull-left">
		<div class="col-md-4 bg-info row p-3">
			<i class="dash-icons glyphicon glyphicon-comment"></i>
		</div>
		<div class="col-md-8 text-center">
			<h4>Posts</h4>
			<span>{{ $posts->count() }}</span>
		</div>
	</div>

	<div class="col-md-3 mt-5 border pull-left">
		<div class="col-md-4 bg-info row p-3">
			<i class="dash-icons glyphicon glyphicon-repeat"></i>
		</div>
		<div class="col-md-8 text-center">
			<h4>Runs</h4>
			<span>{{ $runs->count() }}</span>
		</div>
	</div>
</div>







@endsection