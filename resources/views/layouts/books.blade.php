@extends('layouts.general')


@section('content')
	<div class="mini-posts">

		@foreach($books as $book)
		@php
			/** @var \App\Models\Book $book */
		@endphp

			<article class="book">
				<header>
					<h3><a href="#">{{ $book->getTitle() }}</a></h3>
					<span class="published">Издательство "{{ $book->publisher->getName() }}", {{ $book->getYear() }} г.</span>
				</header>

				<section>
					<a href="#" class="image"><img src="{{ $book->getImgFilePath() }}" alt="обложка книги {{ $book->getTitle() }}" /></a>
					<p>
						{{ $book->getAnnotation() }}
					</p>
				</section>


				<ul class="actions" style="text-align: center">
					<li><a href="#" class="button big">Читать онлайн</a></li>
				</ul>
			</article>
		@endforeach
	</div>

@endsection
