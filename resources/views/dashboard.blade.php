@extends('admin')
@section('page')

<div class="container-fluid">
	<h2>Dashboard</h2>
	<hr>

	<div class="col-md-12 col-sm-12 pb-4">
	<div class="col-md-3 mb-3 col-sm-6 col-xs-12 border pull-left">
		<div class="col-md-4 col-sm-4 col-xs-4 bg-info row p-3">
			<i class="dash-icons glyphicon glyphicon-user"></i>
		</div>
		<div class="col-md-8 text-center">
			<h4>Members</h4>
			<span>{{ $users->count() }}</span>
		</div>
	</div>

	<div class="col-md-3 mb-3 col-sm-6 col-xs-12 col-md-offset-1 border pull-left">
		<div class="col-md-4 col-sm-4 col-xs-4 bg-info row p-3">
			<i class="dash-icons glyphicon glyphicon-retweet"></i>
		</div>
		<div class="col-md-8 text-center">
			<h4>Races</h4>
			<span>{{ $races->count() }}</span>
		</div>
	</div>

	<div class="col-md-3 mb-3 col-sm-6 col-xs-12 col-md-offset-1 border pull-left">
		<div class="col-md-4 col-sm-4 col-xs-4 bg-info row p-3">
			<i class="dash-icons glyphicon glyphicon-comment"></i>
		</div>
		<div class="col-md-8 text-center">
			<h4>Posts</h4>
			<span>{{ $posts->count() }}</span>
		</div>
	</div>

	</div>

	<div class="col-md-12 col-sm-12">
		<div class="col-md-3 col-sm-6 col-xs-12 border pull-left">
			<div class="col-md-4 col-sm-4 col-xs-4 bg-info row p-3">
				<i class="dash-icons glyphicon glyphicon-repeat"></i>
			</div>
			<div class="col-md-8 text-center">
				<h4>Runs</h4>
				<span>{{ $runs->count() }}</span>
			</div>
		</div>
	</div>

</div>







@endsection