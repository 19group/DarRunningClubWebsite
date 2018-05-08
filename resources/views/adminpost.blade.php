@extends('admin')
@section('page')

	<div class="container-fluid">
		<h3>Create Post</h3>
		<hr>

		<div class="col-md-6">

			<form action="{{ route('createPost', ['creater'=> Auth::user()->name] ) }}" method="post">
	            {{ csrf_field() }}

				<div class="col-md-12 form-group">
					<input class="form-control" type="text" name="title" required placeholder="Heading">
				</div>
				<div class="col-md-12 form-group">
					<input class="form-control" type="text" name="sub_title" required placeholder="Sub-heading">
				</div>
				<div class="col-md-12 form-group">
					<textarea class="form-control" required name="content" placeholder="content"></textarea>
				</div>
				<div class="col-md-12 form-group">
					<button class="btn col-md-4 pull-right btn-info" name="post">Post</button>
				</div>

			</form>
		</div>

		<div class="col-md-6">
			
			 <div class="col-md-12">
		        <div class="row post_head rounded-top d-flex ">
		          <span class="p-2 post-head">{{ $post->title }}</span>
		          <span class="p-2 text-muted">{{ $post->created_at->diffForHumans() }}</span>
		          <div class="ml-auto p-2"><sup>by &nbsp;&nbsp;</sup>{{ $post->user }}</div>
		        </div>

		        <div class="content row p-3 border">

		          <span class="post-subhead text-muted"><i>{{ $post->sub_title }}</i></span>

		          <br><br>
		          
		          {!! nl2br($post->content) !!}

		        </div>
	      </div>
	      <div class="col-md-12">
	      	<h5 class="text-muted pull-right"><i>Latest post</i></h5>
	      </div>

		</div>
	</div>

	<div class="container-fluid">
		<h3>Create News Headline</h3>
		<hr>

		<div class="col-md-6">

			<form action="{{ route('createPost', ['creater'=> Auth::user()->name] ) }}" method="post">
	            {{ csrf_field() }}

				<div class="col-md-12 form-group">
					<input class="form-control" type="text" name="headline_head" required placeholder="Heading">
				</div>
				<div class="col-md-12 form-group">
					<textarea class="form-control" required name="headline_content" placeholder="Content"></textarea>
				</div>
				<div class="col-md-12 form-group">
					<button class="btn col-md-4 pull-right btn-info" name="headline">Publish</button>
				</div>

			</form>
		</div>

		<div class="col-md-6">
			
			 <div class="col-md-10 pb-5 pull-right">
		        <div class="col-md-12">
		          <div class="bg-info col-md-4 row col-sm-4 col-xs-4">
		            <h4>News</h4>
		          </div>
		        </div>
		          <div class="col-md-12 col-sm-12 col-xs-12 border border-info p-2">
		            <div class="col-md-12 pb-4 bg-info">
		            @if(!($headline==null))
		              <h5><u>{{ $headline->heading }}	</u></h5>
		                <p>
		                  {{ $headline->body }}
		                </p>
		              @else
		              	<h5><u>Header	</u></h5>
		                <p>
		                  Body (content)
		                </p>

		               @endif
		            </div>
		          </div>
		      </div>

		</div>
	</div>
</div>



@endsection