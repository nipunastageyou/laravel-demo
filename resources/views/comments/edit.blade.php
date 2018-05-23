@extends('layouts.app')
 
@section('content')
    <div class="container-fluid container-custom-bg main-wrap">
		<div class="row">
			<div class="col-md-12">
				<h1>Edit Comment</h1>
				<hr>
				{!! Form::model($comment, ['method' => 'PATCH', 'action' => ['CommentController@update', $comment->id]]) !!}
					<div class="form-group">
						{!! Form::label('comment', 'Comment') !!}
						{!! Form::textarea('comment', old('comment'), ['class' => 'form-control', 'placeholder' => 'Enter your comment', 'required']) !!}
					</div>

					{!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
					
				{!! Form::close() !!}
			</div>
		</div>
	</div>
@endsection