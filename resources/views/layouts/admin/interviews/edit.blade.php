@extends('layouts.admin.general')

@section('content')
{{--	TODO remove CDN apply direct installation--}}
<script src="https://cdn.ckeditor.com/ckeditor5/12.0.0/classic/ckeditor.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/12.0.0/classic/translations/ru.js"></script>

<nav aria-label="breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="{{ route('admin') }}">Управление блогом</a></li>
		<li class="breadcrumb-item"><a href="{{ route('interviews.index') }}">Интервью</a></li>
		<li class="breadcrumb-item active" aria-current="page">{{ $interview->getTitle() }}</li>
	</ol>
</nav>

<form action="{{ $route }}" method="POST">
	@csrf

	@if(isset($formMethod))
		{{ method_field($formMethod) }}
	@endif

	@php
		use App\Models\Interview;
		/** @var Interview $interview*/
	@endphp

	<h2>
		Создание новой статьи
	</h2>

	<div class="form-group">
		<label for="title">@lang('field.interviews.title')</label>
		<input class="form-control" type="text" name="title" id="title" value="{{ $interview->getTitle() }}">
	</div>

	<div class="form-group">
		<label for="annotation">@lang('field.interviews.annotation')</label>
		<input class="form-control" type="text" name="annotation" id="annotation" value="{{ $interview->getDescription() }}">
	</div>
	<div class="form-group">
		<label for="slug">@lang('field.interviews.slug')</label>
		<input class="form-control" type="text" name="slug" id="slug" value="{{ $interview->getSlug() }}">
	</div>

	<div class="form-group">
		<label for="content">@lang('field.interviews.content')</label>
		<textarea name="content" id="content">{{ $interview->getFullText() }} </textarea>
	</div>

	<button class="btn btn-success">Создать</button>
</form>

<script type="text/javascript" src="/js/ckfinder/ckfinder.js"></script>

<script type="text/javascript">
	CKFinder.config( {
		connectorPath: '/ckfinder/connector'
	} );

	ClassicEditor
		.create( document.querySelector( '#content' ), {
			toolbar: [ 'ckfinder', 'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote' ],

			ckfinder: {
				uploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json'
			},
			language: 'ru'
		} )
		.then( editor => {
			console.log( editor );
		} )
		.catch( error => {
			console.error( error );
		} );
</script>
@endsection
