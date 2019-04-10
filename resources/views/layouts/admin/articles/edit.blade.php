@extends('layouts.admin.general')

@section('content')
{{--	TODO remove CDN apply direct installation--}}
<script src="https://cdn.ckeditor.com/ckeditor5/12.0.0/classic/ckeditor.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/12.0.0/classic/translations/ru.js"></script>

<nav aria-label="breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="{{ route('admin') }}">Управление блогом</a></li>
		<li class="breadcrumb-item"><a href="{{ route('articles.index') }}">Статьи</a></li>
		<li class="breadcrumb-item active" aria-current="page">{{ $article->getTitle() }}</li>
	</ol>
</nav>

<form action="{{ $route }}" method="POST">
	@csrf

	@if(isset($formMethod))
		{{ method_field($formMethod) }}
	@endif

	@php
		use App\Models\Article;
		use App\Models\ArticleCategory;
		/** @var Article $article*/
		/** @var ArticleCategory[] $categories */
	@endphp

	<h2>
		Создание новой статьи
	</h2>

	<div class="form-group">
		<label for="title">@lang('field.articles.title')</label>
		<input class="form-control" type="text" name="title" id="title" value="{{ $article->getTitle() }}">
	</div>

	<div class="form-group">
		<label for="annotation">@lang('field.articles.annotation')</label>
		<input class="form-control" type="text" name="annotation" id="annotation" value="{{ $article->getAnnotation() }}">
	</div>
	<div class="form-group">
		<label for="slug">@lang('field.articles.slug')</label>
		<input class="form-control" type="text" name="slug" id="slug" value="{{ $article->getSlug() }}">
	</div>
	<div class="form-group">
		<label for="category_id">@lang('field.articles.category')</label>
		<select class="form-control" name="category_id" id="category_id">
			@foreach($categories as $category)
				<option value="{{ $category->getId() }}"
						@if($article->category && $article->category->getId() === $category->getId())selected @endif
				>
					{{ $category->getName() }}
				</option>
			@endforeach
		</select>
	</div>

	<div class="form-group">
		<label for="content">@lang('field.articles.content')</label>
		<textarea name="content" id="content">{{ $article->getContent() }} </textarea>
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
