@extends('layouts.general')

@section('content')
	<div class="mini-posts">
		@foreach($reviews as $review)
			<article class="book">
				<header>
					<h3><a href="#">{{ $review->getAuthor() }}</a></h3>
					<span class="published">{{ $review->getCity() ? $review->getCity()->getName().',' : '' }} {{ $review->getDate()->format('d.m.y') }}</span>
				</header>

				<section>
					{{ $review->getShortText() }}
				</section>

				<ul class="actions" style="text-align: center">
					<li><a href="{{ route('reviews.show', [$review->getId()]) }}" class="button big">Подробнее</a></li>
				</ul>
			</article>
		@endforeach
	</div>
@endsection
