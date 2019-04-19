@extends('layouts.general')


@section('content')
	<div class="mini-posts">

		@foreach($books as $book)
			@php
				/** @var \App\Models\Book $book */
			@endphp

			<article class="book">
				<a href="#" class="image"><img src="{{ $book->getCoverFilePath() }}" alt="обложка книги {{ $book->getTitle() }}" /></a>


				<div>
					<header>
						<h2><a href="#">{{ $book->getTitle() }}</a></h2>
						<span class="published">Издательство "{{ $book->publisher->getName() }}", {{ $book->getYear() }} г.</span>
					</header>

					<section>
						<div>
							{{ $book->getAnnotation() }}
						</div>

						<ul class="actions" style="text-align: center">
							<li><a href="{{ route('books.view', [$book->getSlug()]) }}" class="button big">Читать онлайн</a></li>
						</ul>
					</section>
				</div>

			</article>
		@endforeach
	</div>

@endsection
