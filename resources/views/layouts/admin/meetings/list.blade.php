@extends('layouts.admin.general')

@php
	use App\Models\Meeting;
	/*** @var Meeting[] $meetings */
@endphp
@section('content')
<div class="post">
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="{{ route('admin') }}">Управление блогом</a></li>
			<li class="breadcrumb-item active" aria-current="page">Встречи</li>
		</ol>
	</nav>

	@if (!$meetings)
		Мероприятий пока не создано.
	@endif

	<div class="row">
		<a href="{{ route('meetings.create') }}" class="btn btn-success ml-auto">+ Создать новую встречу</a>
	</div>

	@if ($meetings)
		@if(session('success'))
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				{{ session('success') }}

				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
		@endif

		Всего встреч: {{ count($meetings) }}
		<ul class="list-group">
			@foreach($meetings as $meeting)
				<li class="list-group-item list-group-item-action align-items-start d-flex mt-2">
					{{ $meeting->getDescription() }}
					<a href="{{ route('meetings.edit', [$meeting->id]) }}" class="btn btn-primary  ml-auto">Редактировать</a>
				</li>
			@endforeach
		</ul>

	@endif
</div>
@endsection
