@extends('layouts.admin.general')

@section('content')
	<h1>Панель управления сайтом</h1>

	<div>
		<a href="{{ route('meetings.index') }}">Управление мероприятиями</a>
	</div>

	<div>
		<a href="{{ route('articles.index') }}">Управление Статьями</a>
	</div>
@endsection
