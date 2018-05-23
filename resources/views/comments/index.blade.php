@extends('layouts.app')
 
@section('content')
	<div class="container-fluid container-custom-bg main-wrap">
		<div class="row">
			<div class="col-md-12 padding-bottom-20">
				@if (Session::has('message'))
					<div class="alert alert-info">{{ Session::get('message') }}</div>
				@endif
				<a href="{{ url('comments/create') }}">
				   {!! Form::button('Add Comment', ['class' => 'btn btn-primary']) !!}
				</a>
			</div>
		</div>
		@foreach($comments as $comment)
			<div class="row">
				<div class="col-md-12">
					<div class="comment-main-wrap">
						<div class="image-wrap">
							<a href="{{ url('comments/'. $comment->id) }}">
								<div class="image">
									<?php 
										$name_letters = preg_split("/[\s,_-]+/", $comment->user->name);
										$name_letters = substr($name_letters[0], 0, 1);
									?>
									<span>{{ $name_letters }}</span>
								</div>
							</a>
							<div class="delete-btn-wrap">
								<a href="" class="delete-btn" data-id="{{ $comment->id }}" data-token="{!! csrf_token() !!}" title="Delete comment">
									<i class="fa fa-trash"></i>
								</a>								
							</div>
						</div>
						<div class="comment-name-rating-main-wrap">
							<div class="name-rating-wrap">
								<div class="name-wrap">
									<span class="reviewer-name">{{$comment->user->name}}</span>
								</div>
								<div class="rating-wrap">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
								<div class="edit-btn-wrap">
									<a href="{{ url('comments/'.$comment->id.'/edit')}}" title="Edit comment">
										<i class="fa fa-pencil"></i>
									</a>								
								</div>
							</div>
							<div class="comment-date">
								<span>{{$comment->created_at->toFormattedDateString()}}</span>
							</div>
							<div class="comment">
								<p>{{$comment->comment}}</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		@endforeach
		<div class="read-more">
			<a href="#">Read More...</a>
		</div>
	</div>
@endsection