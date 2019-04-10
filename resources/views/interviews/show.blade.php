@extends('layouts.general')

@section('content')
	<div class="post">
		<div>
			{{-- TODO proper styling--}}
			<a href="{{ route('interviews.index') }}"><< Назад к списку интервью</a>
		</div>

		@php /** @var \App\Models\Interview $review */ @endphp
		<h1>
			{{ $interview->getTitle() }}
		</h1>

		<div>
			{!! $interview->getFullText() !!}
		</div>
	</div>
@endsection
