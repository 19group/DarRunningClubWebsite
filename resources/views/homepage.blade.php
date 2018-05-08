@extends('admin')
@section('page')

<div class="container-fluid">
	<h3>Archievements</h3>
	<hr>

	<div class="col-md-6">

		<form action="{{ route('homepageUpdate', [ 'exp' => $achievements->experience ]) }}" method="post">
            {{ csrf_field() }}

			<div class="col-md-4 form-group">
				<input class="form-control" type="number" name="years" required>
				<p class="text-center">Years of achievements</p>
			</div>
			<div class="col-md-4 form-group">
				<input class="form-control" type="number" name="marathons" required>
				<p class="text-center">Annual Marathons</p>
			</div>
			<div class="col-md-4 form-group">
				<input class="form-control" type="number" name="medals" required>
				<p class="text-center">Won Medals</p>
			</div>
			<div class="col-md-4 form-group">
				<input class="form-control" type="number" name="podium" required>
				<p class="text-center">Podium Finishes</p>
			</div>
			<div class="col-md-12 form-group">
				<button class="btn btn-info pull-right" name="achieve">Update</button>
			</div>

		</form>
	</div>

	 <div class="col-md-6">
	    <div class="col-md-8 col-md-offset-2 text-center">
	      <div class="container-fluid text-center">
	      <div class="col-md-4 text-center">
	        <h1>{{ $achievements->experience }}</h1>
	        <p>YEARS OF<br>EXPERIENCE</p>
	      </div>
	      <div class="col-md-4 text-center">
	        <h1>{{ $achievements->marathons }}</h1>
	        <p>ANNUAL<br>MARATHONS</p>
	      </div>
	      <div class="col-md-4 text-center">
	        <h1>{{ $achievements->medals }}</h1>
	        <p>WON<br>MEDALS</p>
	      </div>
	      <div class="col-md-4 text-center">
	        <h1>{{ $achievements->podium }}</h1>
	        <p>PODIUM<br>FINISHES</p>
	      </div>
	    </div><br><br>
	   </div>
  </div>

	<div class="col-md-12 p-3">

		<h3>Runs</h3>
		<hr>

	  <div class="col-md-6">

			<form action="{{ route('homepageUpdate', [ 'exp' => $achievements->experience ]) }}" method="post">

	            {{ csrf_field() }}

	            <div class="container-fluid">
	            	<div class="col-md-6">
						<div class="col-md-12 form-group">
							<input class="form-control" type="text" name="title" required placeholder="starts-ends">
							<p class="text-center">Title</p>
						</div>
						<div class="col-md-12 form-group">
							<input class="form-control" type="text" name="area" required>
							<p class="text-center">Area</p>
						</div>
						<div class="col-md-12 form-group">
							<input class="form-control" type="text" name="description" required>
							<p class="text-center">Description</p>
						</div>
					</div>

					<div class="col-md-6">
						<div class="col-md-12 form-group">
							<textarea class="form-control" name="schedules" placeholder="Mon-Fri 4:00-6:00 &#10;Sat-Sun 3:00-6:00"></textarea>
							<p class="text-center">Schedule</p>
						</div>
						<div class="col-md-12 form-group">
							<input class="form-control" type="text" name="contact" required>
							<p class="text-center">Contact</p>
						</div>
						
					</div>

				</div>
					<div class="col-md-12 form-group">
						<button class="btn pull-right btn-info" name="run">Add run</button>
					</div>
			</form>

		</div>


		<div class="col-md-6">
			<table class="table table-stripe table-responsive">
				<tr><th>Title</th><th>Area</th><th>Members</th><th>Shedules</th><th>Contact</th></tr>

			@foreach($runs as $run)

				<tr><td>{{ $run->title }}</td><td>{{ $run->area }}</td><td>{{ $run->description }}</td><td>{!! nl2br($run->schedules) !!}</td><td>{{ $run->contact }}</td>
				</tr>

			@endforeach


			</table>
	  	</div>

	</div>




</div>



@endsection