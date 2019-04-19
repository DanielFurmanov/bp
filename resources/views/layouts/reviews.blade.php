@extends('layouts.general')

@section('content')
	<div class="mini-posts">
		@foreach($reviews as $review)
			<article class="entry">
				<header>
					<h2><a href="#">{{ $review->getAuthor() }}</a></h2>
					<span class="published">{{ $review->getCity() ? $review->getCity()->getName().',' : '' }} {{ $review->getDate()->format('d.m.y') }}</span>
				</header>

				<section>
					<div>
						{{ $review->getShortText() }}

					</div>

					<ul class="actions" style="text-align: center">
						<li><a href="{{ route('reviews.show', [$review->getId()]) }}" class="button big">Читать</a></li>
					</ul>
				</section>


			</article>
		@endforeach
	</div>
@endsection
