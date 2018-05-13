@extends('layouts.app')
 
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<a href="{{ URL::to('comments') }}">
					<button type="button" class="btn btn-success">Back to Comments</button>
				</a>
				<h6><em>{{ $comment->user_name }}</em></h6>
				<textarea class="form-control" disabled>{{ $comment->comment }}</textarea>
				<h6>{{$comment->created_at->toFormattedDateString()}}</h6>
			</div>
		</div>
	</div>
@endsection