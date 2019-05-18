@extends('layouts.admin.general')

@section('content')
{{--	TODO do i need that?--}}
{{--<script src="https://cdn.ckeditor.com/ckeditor5/12.0.0/classic/ckeditor.js"></script>--}}
{{--<script src="https://cdn.ckeditor.com/ckeditor5/12.0.0/classic/translations/ru.js"></script>--}}

<nav aria-label="breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="{{ route('admin') }}">Управление блогом</a></li>
		<li class="breadcrumb-item"><a href="{{ route('reviews.index') }}">Отзывы</a></li>
		<li class="breadcrumb-item active" aria-current="page">{{ $review->getAuthor() }}</li>
	</ol>
</nav>

<form action="{{ $route }}" method="POST">
	@csrf

	@if(isset($formMethod))
		{{ method_field($formMethod) }}
	@endif

	@php
		use App\Models\Review;
		/** @var Review $review*/
	@endphp

	<h2>
		Создание нового отзыва
	</h2>

	<div class="form-group">
		<label for="author">@lang('field.reviews.author')</label>
		<input class="form-control" type="text" name="author" id="author" value="{{ $review->getAuthor() }}">
	</div>

	<div class="form-group">
		<label for="comment">@lang('field.reviews.comment')</label>
		<input class="form-control" type="text" name="comment" id="comment" value="{{ $review->getComment() }}">
	</div>

{{--	TODO AVATARS--}}
	<div class="form-group">
		<label for="avatar">@lang('field.reviews.avatar')</label>

		@foreach(Review::AVATARS as $avatarNumber=>$avatarSrc)
			<input
					type="radio"
					name="avatar"
					value="{{ $avatarNumber }}"
					id="avatar{{ $avatarNumber }}"
					class="@if($review->getAvatar() && $review->getAvatar() == $avatarNumber)selected @endif"
					@if($review->getAvatar() && $review->getAvatar() == $avatarNumber)
					checked="checked"
					@endif
			>
			<label for="avatar{{ $avatarNumber }}">
				<img src="{{ $avatarSrc }}" style="width: 50px; min-height: 30px">
			</label>
		@endforeach
	</div>

	<div class="form-group">
		<label for="annotation">@lang('field.articles.date')</label>
		<input class="form-control" type="text" name="date" id="date" value="{{ $review->getDate() }}">
	</div>

	<div class="form-group">
		<label for="city_id">@lang('field.reviews.city')</label>
		<select class="form-control" name="city_id" id="city_id">
			<option value="">(не указан)</option>
			@foreach($cities as $city)
				<option value="{{ $city->getId() }}"
						@if($review->city && $review->city->getId() === $city->getId())selected @endif
				>
					{{ $city->getName() }}
				</option>
			@endforeach
		</select>
	</div>

	<div class="form-group">
		<label for="text">@lang('field.reviews.full_text')</label>
		<textarea  class="form-control" name="text" id="text">{{ $review->getFullText() }} </textarea>
	</div>

	<button class="btn btn-success">Создать</button>
</form>

{{--<script type="text/javascript" src="/js/ckfinder/ckfinder.js"></script>--}}

{{--<script type="text/javascript">--}}
{{--	CKFinder.config( {--}}
{{--		connectorPath: '/ckfinder/connector'--}}
{{--	} );--}}

{{--	ClassicEditor--}}
{{--		.create( document.querySelector( '#content' ), {--}}
{{--			toolbar: [ 'ckfinder', 'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote' ],--}}

{{--			ckfinder: {--}}
{{--				uploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json'--}}
{{--			},--}}
{{--			language: 'ru'--}}
{{--		} )--}}
{{--		.then( editor => {--}}
{{--			console.log( editor );--}}
{{--		} )--}}
{{--		.catch( error => {--}}
{{--			console.error( error );--}}
{{--		} );--}}
{{--</script>--}}
@endsection
