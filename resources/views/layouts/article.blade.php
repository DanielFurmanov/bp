@extends('layouts.general')

@section('content')
	<div class="post">
		<div>
			{{-- TODO proper styling--}}
			<a href="{{ route('articles') }}"><< Назад к списку статей</a>
		</div>

		@php
			use App\Models\Article;
			/** @var Article $article */
		@endphp
		<h1>
			{{ $article->getTitle() }}
		</h1>

		<div>
			{!! $article->getContent() !!}
		</div>
	</div>
@endsection
