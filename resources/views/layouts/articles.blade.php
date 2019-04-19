@extends('layouts.general')


@section('content')
	<div class="mini-posts">
		@foreach($articles as $article)
			@php
				/** @var App\Models\Article $article*/
			@endphp

			<article class="entry">
				<header>
					<h2><a href="{{ route('articles.view', [$article->getSlug()]) }}">{{ $article->getTitle() }}</a></h2>
				</header>

				<section>
					<div>
						{{ $article->getAnnotation() }}...
					</div>

					<ul class="actions" style="text-align: center">
						<li><a href="{{ route('articles.view', [$article->getSlug()]) }}" class="button big">Читать</a></li>
					</ul>
				</section>



			</article>
		@endforeach
	</div>
@endsection
