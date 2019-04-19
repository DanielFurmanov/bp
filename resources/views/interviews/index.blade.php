@extends('layouts.general')

@section('content')
	<div class="mini-posts">
		@foreach($interviews as $interview)
			<article class="entry">
				<header>
					<h2><a href="#">{{ $interview->getTitle() }}</a></h2>
				</header>

				<section>
					<div>
						{{ $interview->getDescription() }}...
					</div>

					<ul class="actions" style="text-align: center">
						<li><a href="{{ route('interviews.show', [$interview->getSlug()]) }}" class="button big">Читать</a></li>
					</ul>
				</section>

			</article>
		@endforeach
	</div>
@endsection
