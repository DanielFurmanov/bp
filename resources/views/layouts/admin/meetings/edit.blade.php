@extends('layouts.admin.general')


@section('content')

	@php
		use App\Models\City;
		use App\Models\Meeting;
	/** @var Meeting $meeting */
	/** @var City[] $cities */

	@endphp


	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="{{ route('admin') }}">Управление блогом</a></li>
			<li class="breadcrumb-item"><a href="{{ route('meetings.index') }}">Встречи</a></li>
			<li class="breadcrumb-item active" aria-current="page">
				@if($meeting->getId())
					Редактирование встречи
				@else
					Создание новой встречи
				@endif
			</li>
		</ol>
	</nav>

	<form action="{{ route('meetings.store') }}" method="POST">
		@csrf



		<h2>
			@if($meeting->getId())
				Редактирование встречи
			@else
				Создание новой встречи
			@endif
		</h2>

		@if ($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif

		<div class="form-group">
			<label for="description">@lang('field.meetings.description')</label>
			<input class="form-control" type="text" name="description" id="description" value="{{ $meeting->getDescription() }}">
		</div>

		<div class="form-group">
			<label for="city_id">@lang('field.meetings.city')</label>
			<select class="form-control" name="city_id" id="city_id">
				@foreach($cities as $city)
					<option value="{{ $city->getId() }}"
							@if($meeting->city && $meeting->city->getId() === $city->getId())selected @endif
					>
						{{ $city->getName() }}
					</option>
				@endforeach
			</select>
		</div>

		<div class="form-group">
			<label for="description">@lang('field.meetings.address')</label>
			<input class="form-control" type="text" name="address" id="address" value="{{ $meeting->getAddress() }}">
		</div>

		<div class="form-group">
			<label for="date_start">@lang('field.meetings.date_start')</label>
			<input class="form-control" type="text" name="date_start" id="date_start" value="{{ $meeting->getDateStart() }}">
		</div>

		<div class="form-group">
			<label for="time_start">@lang('field.meetings.time_start')</label>
			<input class="form-control" type="text" name="time_start" id="time_start" value="{{ $meeting->getTimeStart() }}">
		</div>

		<div class="form-group">
			<label for="date_end">@lang('field.meetings.date_end')</label>
			<input class="form-control" type="text" name="date_end" id="date_end" value="{{ $meeting->getDateEnd() }}">
		</div>

		<div class="form-group">
			<label for="time_end">@lang('field.meetings.time_end')</label>
			<input class="form-control" type="text" name="time_end" id="time_end" value="{{ $meeting->getTimeEnd() }}">
		</div>

		{{--TODO FIGURE THAT ONE NECESSATy --}}
		{{--<label for="active">@lang('field.active')</label>--}}
		{{--<input type="text" name="active" id="active">--}}

		<button class="btn btn-success">Создать</button>
	</form>

@endsection
