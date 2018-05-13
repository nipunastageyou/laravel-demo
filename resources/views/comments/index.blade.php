@extends('layouts.app')
 
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				@if (Session::has('message'))
					<div class="alert alert-info">{{ Session::get('message') }}</div>
				@endif
				<a href="{{ URL::to('comments/create') }}">
				   <button type="button" class="btn btn-primary">Add Comment</button>
				</a>
				<table class="table">
				  <thead class="thead-dark">
					<tr>
					  <th scope="col">#</th>
					  <th scope="col">Comments</th>
					  <th scope="col">User</th>
					  <th scope="col">Created At</th>
					  <th scope="col">Action</th>
					</tr>
				  </thead>
				  <tbody>
					@foreach($comments as $comment)
					<tr>
					  <td><a href="/comments/{{$comment->id}}">{{$comment->id}}</a></td>
					  <td>{{$comment->comment}}</td>
					  <td>{{$comment->user_name}}</td>
					  <td>{{$comment->created_at->toFormattedDateString()}}</td>
					  <td>
						  <div class="btn-group" role="group" aria-label="Basic example">
							  <a href="{{ URL::to('comments/' . $comment->id . '/edit') }}">
							   <button type="button" class="btn btn-warning">Edit</button>
							  </a>&nbsp;
							  <form action="{{url('comments', [$comment->id])}}" method="POST">
							   <input type="hidden" name="_method" value="DELETE">
							   <input type="hidden" name="_token" value="{{ csrf_token() }}">
							   <input type="submit" class="btn btn-danger" value="Delete"/>
							  </form>
						  </div>
						</td>
					</tr>
					@endforeach
				  </tbody>
				</table>
			<div>
		<div>
	<div>
@endsection