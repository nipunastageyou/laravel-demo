@extends('layouts.app')
 
@section('content')
    <div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Add New Comment</h1>
				<hr>
				<!--
				 <form action="{{url('comments', [$comment->id])}}" method="POST">
				  <input type="hidden" name="_method" value="PUT">
					{{ csrf_field() }}
				  <div class="form-group">
					<label for="comment">Comment</label>
					<textarea class="form-control" id="comment" name="comment" rows="10">{{$comment->comment}}</textarea>
					<input type="hidden" name="user_name" value="{{$comment->user_name}}" />
				  </div>
				  @if ($errors->any())
					<div class="alert alert-danger">
						<ul>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
				  @endif
				  <button type="submit" class="btn btn-primary">Submit</button>
				</form>
				-->
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