@extends('layouts.general')


@section('content')
	<div class="mini-posts">
		@foreach($articles as $article)
			@php
				/** @var App\Models\Article $article*/
			@endphp

			<article class="book">
				<header>
					<h3><a href="{{ route('articles.view', [$article->getSlug()]) }}">{{ $article->getTitle() }}</a></h3>
				</header>

				<section>
					<p>
						{{ $article->getAnnotation() }}
					</p>
				</section>


				<ul class="actions" style="text-align: center">
					<li><a href="{{ route('articles.view', [$article->getSlug()]) }}" class="button big">Читать</a></li>
				</ul>
			</article>
		@endforeach
	</div>
@endsection
