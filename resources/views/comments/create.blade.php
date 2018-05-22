@extends('layouts.app')
 
@section('content')
    <div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Add New Comment</h1>
				<hr>
				{!! Form::model($comment, ['action'=>'CommentController@store']) !!}
					<div class="form-group">
						{!! Form::label('comment', 'Comment') !!}
						{!! Form::textarea('comment', '', ['class' => 'form-control', 'placeholder' => 'Enter your comment', 'required']) !!}
					</div>

					{!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
					
				{!! Form::close() !!}
			</div>
		</div>
	</div>
@endsection