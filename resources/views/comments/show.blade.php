@extends('layouts.app')
 
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<a href="{{ url('comments') }}">
					{!! Form::button('Back to Comments', ['class' => 'btn btn-success']) !!}
				</a>
				<h6><em>{{ $comment->user_name }}</em></h6>
					{!! Form::textarea('comment', $comment->comment, ['class' => 'form-control', 'disabled']) !!}
				<h6>{{$comment->created_at->toFormattedDateString()}}</h6>
			</div>
		</div>
	</div>
@endsection