@extends('layouts.general')

@section('content')
	<div class="post">
		<div>
			{{-- TODO proper styling--}}
			<a href="{{ route('reviews.index') }}"><< Назад к списку отзывов</a>
		</div>

		@php /** @var \App\Models\Review $review */ @endphp
		<img src="{{ $title }}" alt="">
		<h1>
			{{ $review->getAuthor() }}
		</h1>


		<div>
			{{ $review->getFullText() }}
		</div>
	</div>
@endsection
