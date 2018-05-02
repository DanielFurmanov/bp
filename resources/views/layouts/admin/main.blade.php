@extends('layouts.admin.general')

@section('content')
	ADMINKA

	<div class="post">
		<form action="{{ route('meetings.store') }}" method="POST">
			@csrf

			<section>
				Создание новой встречи
			</section>

			<label for="description">@lang('field.meetings.description')</label>
			<input type="text" name="description" id="description">

			<label for="description">@lang('field.city')</label>
			<input type="text" name="city_id" id="city_id">

			<label for="description">@lang('field.address')</label>
			<input type="text" name="address" id="address">

			<label for="description">@lang('field.date_start')</label>
			<input type="text" name="date_start" id="date_start">

			<label for="description">@lang('field.time_start')</label>
			<input type="text" name="time_start" id="time_start">

			<label for="description">@lang('field.date_end')</label>
			<input type="text" name="date_end" id="date_end">

			<label for="description">@lang('field.active')</label>
			<input type="text" name="active" id="active">

			<button>Create</button>
		</form>
	</div>
@endsection
