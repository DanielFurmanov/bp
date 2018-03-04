@extends('layouts.general')


@section('content')
	<div class="post">
		<div>
			{{-- TODO proper styling--}}
			<a href="{{ route('books') }}"><< Назад к списку книг</a>
		</div>

		@php /** @var \App\Models\Book $book */ @endphp
		<h1>
			{{ $book->getTitle() }}
		</h1>

		@include('books.'.$book->getSlug())
	</div>
@endsection
