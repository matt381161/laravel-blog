@extends ('layout')

@section('content')
	<div class="blog-post">
		<h2 class="blog-post-title">{{ $post -> title }}</h2>
		{{$post -> body}}
	</div>
	<div class="comment">
		<ul class="list-group">
		@foreach($post -> comments as $comment)
			<li class="list-group-item">
				<strong>
					{{$comment -> created_at -> diffForHumans() }} :
				</strong>
				{{$comment -> body}}
			</li>
		@endforeach
		</ul>
	</div>
	<hr>
	<div class="card">
		<div class="card-block">
			<form method="POST" action="/posts/{{$post->id}}/comment">
				{{ csrf_field() }}
				<div class="form-group">
					<textarea name="body" placeholder="Your comments here." class="form-control" required></textarea>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary">Add Comment</button>
				</div>
			</form>
		</div>
	</div>
	@include('layout.error')

@endsection