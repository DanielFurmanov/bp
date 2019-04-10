@extends('layouts.admin.general')

@php
	use App\Models\Meeting;
	/*** @var Meeting[] $meetings */
@endphp

<div class="post">
	@if (!$meetings)
		Мероприятий пока не создано.
		<a href="{{ route('meetings.create') }}">Создать</a>
	@else
		<ul>
			@foreach($meetings as $meeting)
				<li>
					{{ $meeting->getDescription() }}
					<a href="{{ route('meetings.edit', [$meeting->id]) }}">Редактировать</a>
				</li>
			@endforeach
		</ul>

	@endif
</div>
