@extends('layouts.general')

@section('content')
	<div class="mini-posts">
		@foreach($interviews as $interview)
			<article class="book">
				<header>
					<h3><a href="#">{{ $interview->getTitle() }}</a></h3>
					{{--<span class="published">{{ $interview->getCity() ? $interview->getCity()->getName().',' : '' }} {{ $interview->getDate()->format('d.m.y') }}</span>--}}
				</header>

				<section>
					{{ $interview->getDescription() }}
				</section>

				<ul class="actions" style="text-align: center">
					<li><a href="{{ route('interviews.show', [$interview->getSlug()]) }}" class="button big">Подробнее</a></li>
				</ul>
			</article>
		@endforeach
	</div>
@endsection
