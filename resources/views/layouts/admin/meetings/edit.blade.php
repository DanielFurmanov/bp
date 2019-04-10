@extends('layouts.admin.general')

<div class="post">
	<form action="{{ route('meetings.store') }}" method="POST">
		@csrf

		@php
			use App\Models\City;
			use App\Models\Meeting;
		/** @var Meeting $meeting */
		/** @var City[] $cities */

		@endphp

		<section>
			Создание новой встречи
		</section>

		<label for="description">@lang('field.meetings.description')</label>
		<input type="text" name="description" id="description" value="{{ $meeting->getDescription() }}">

		<label for="description">@lang('field.city')</label>
		<select name="city_id" id="city_id">
			@foreach($cities as $city)
				<option value="{{ $city->getId() }}"
						@if($meeting->city && $meeting->city->getId() === $city->getId())selected @endif
				>
					{{ $city->getName() }}
				</option>
			@endforeach
		</select>

		<label for="description">@lang('field.address')</label>
		<input type="text" name="address" id="address" value="{{ $meeting->getAddress() }}">

		<label for="date_start">@lang('field.date_start')</label>
		<input type="text" name="date_start" id="date_start" value="{{ $meeting->getDateStart() }}">

		<label for="time_start">@lang('field.time_start')</label>
		<input type="text" name="time_start" id="time_start" value="{{ $meeting->getTimeStart() }}">

		<label for="date_end">@lang('field.date_end')</label>
		<input type="text" name="date_end" id="date_end" value="{{ $meeting->getDateEnd() }}">

		<label for="time_end">@lang('field.time_end')</label>
		<input type="text" name="time_end" id="time_end" value="{{ $meeting->getTimeEnd() }}">

		{{--TODO FIGURE THAT ONE NECESSATy --}}
		{{--<label for="active">@lang('field.active')</label>--}}
		{{--<input type="text" name="active" id="active">--}}

		<button>Create</button>
	</form>
</div>
