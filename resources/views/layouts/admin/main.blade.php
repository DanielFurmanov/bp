@extends('layouts.admin.general')

@section('content')
	<h1>Панель управления сайтом</h1>
<div class="d-flex justify-content-between flex-wrap">
	<div class="card">
		<div class="card-body">
			<h5 class="card-title">
				<a href="{{ route('meetings.index') }}">Мероприятия</a>
			</h5>
			<p>
				Здесь добавляются новые встречи
			</p>
			<a href="{{ route('meetings.index') }}" class="btn btn-primary">Перейти</a>
		</div>
	</div>

	<div class="card">
		<div class="card-body">
			<h5 class="card-title">
				<a href="{{ route('articles.index') }}">Статьи</a>
			</h5>
			<p>
				Список статей и их редактирование
			</p>
			<a href="{{ route('articles.index') }}" class="btn btn-primary">Перейти</a>
		</div>
	</div>

	<div class="card">
		<div class="card-body">
			<h5 class="card-title">
				<a href="{{ route('interviews.index') }}">Интервью</a>
			</h5>
			<p>
				Список Интервью и их редактирование
			</p>
			<a href="{{ route('interviews.index') }}" class="btn btn-primary">Перейти</a>
		</div>
	</div>

	<div class="card">
		<div class="card-body">
			<h5 class="card-title">
				<a href="{{ route('reviews.index') }}">Отзывы</a>
			</h5>
			<p>
				Список отзывов и их редактирование
			</p>
			<a href="{{ route('reviews.index') }}" class="btn btn-primary">Перейти</a>
		</div>
	</div>
</div>

@endsection
