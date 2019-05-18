@extends('layouts.admin.general')

@php
	use App\Models\Review;
	/*** @var Review[] $reviews */
@endphp

@section('content')
	@if (!$reviews)
		Отзывов пока не создано.
	@else
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="{{ route('admin') }}">Управление блогом</a></li>
				<li class="breadcrumb-item active" aria-current="page">Отзывы</li>
			</ol>
		</nav>

		<div class="row">
			<a href="{{ route('reviews.create') }}" class="btn btn-success ml-auto">+ Создать новый отзыв</a>
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
			@foreach($reviews as $review)
				<li class="list-group-item list-group-item-action align-items-start d-flex mt-2">
					<div>
						<div class="card-title">
							<h4 >{{ $review->getAuthor() }} </h4>
							<span>{{ $review->getCity() ? $review->getCity()->getName().',' : '' }} {{ $review->getDate()->format('d.m.y') }}</span>
						</div>
						<p class="card-text">{{ $review->getShortText() }}</p>
					</div>
					<div class="ml-auto">
						<div>
							<a href="{{ route('reviews.edit', [$review->id]) }}" class="btn btn-primary">Редактировать</a>
						</div>
						<div>
							<form action="{{ route('reviews.destroy', [$review->id]) }}" method="POST" class="float-right">
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
			let isDelete = confirm('Вы действительно хотите удалить отзыв"' + title +'"?');
			if(isDelete) {
				$(this).unbind('submit').submit();
			}
		})
	</script>
@endsection
