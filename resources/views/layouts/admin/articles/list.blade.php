@extends('layouts.admin.general')

@php
	use App\Models\Article;
	/*** @var Article[] $articles */
@endphp

@section('content')
	@if (!$articles)
		Мероприятий пока не создано.
	@else
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="{{ route('admin') }}">Управление блогом</a></li>
				<li class="breadcrumb-item active" aria-current="page">Статьи</li>
			</ol>
		</nav>

		<div class="row">

			<a href="{{ route('articles.create') }}" class="btn btn-success ml-auto">+ Создать новую статью</a>
		</div>

		@if(session('success'))
{{--	TODO STYLING		--}}
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				{{ session('success') }}

				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
		@endif

		<ul class="list-group">
			@foreach($articles as $article)
				<li class="list-group-item list-group-item-action align-items-start d-flex mt-2">
					<div>
						<h4 class="card-title">{{ $article->getTitle() }}</h4>
						<p class="card-text">{{ $article->getAnnotation() }}</p>
					</div>
					<div class="ml-auto">
						<div>
							<a href="{{ route('articles.edit', [$article->id]) }}" class="btn btn-primary">Редактировать</a>
						</div>
						<div>
							<form action="{{ route('articles.destroy', [$article->id]) }}" method="POST" class="float-right">
								{{ method_field('DELETE') }}
								@csrf
								<button class="btn btn-danger mt-3">Удалить</button>
							</form>
						</div>
					</div>
				</li>
			@endforeach
		</ul>
	@endif
	
	<script>
		$('.list-group form').submit(function (e) {
			e.preventDefault();
			let title = $(this).parents('li').find('h4.card-title').text();
			let isDelete = confirm('Вы действительно хотите удалить статью "' + title +'"?');
console.log(isDelete);
			if(isDelete) {
				$(this).unbind('submit').submit();
			}
		})
	</script>
@endsection
