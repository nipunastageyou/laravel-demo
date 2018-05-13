@extends('layouts.app')
 
@section('content')
    <div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Add New Comment</h1>
				<hr>
				 <form action="/comments" method="post">
				 {{ csrf_field() }}
				  <div class="form-group">
					<label for="comment">Comment</label>
					<textarea class="form-control" id="comment" name="comment" rows="10"></textarea>
					<input type="hidden" name="user_name" value="{{ Auth::user()->name }}" />
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
			</div>
		</div>
	</div>
@endsection