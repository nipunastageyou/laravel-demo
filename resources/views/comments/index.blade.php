@extends('layouts.app')
 
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				@if (Session::has('message'))
					<div class="alert alert-info">{{ Session::get('message') }}</div>
				@endif
				<a href="{{ url('comments/create') }}">
				   {!! Form::button('Add Comment', ['class' => 'btn btn-primary']) !!}
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
					  <td><a href="{{ url('comments/'. $comment->id) }}">{{$comment->id}}</a></td>
					  <td>{{$comment->comment}}</td>
					  <td>{{$comment->user->name}}</td>
					  <td>{{$comment->created_at->toFormattedDateString()}}</td>
					  <td>
						  <div class="btn-group" role="group" aria-label="Basic example">
							  <a href="{{ url('comments/'.$comment->id.'/edit')}}">
								{!! Form::button('Edit', ['class'=>'btn btn-warning']) !!}
							  </a>&nbsp;
							  {!! Form::open(array('url' => 'comments/' . $comment->id)) !!}
								{!! Form::hidden('_method', 'DELETE') !!}
								{!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
							  {!! Form::close() !!}
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