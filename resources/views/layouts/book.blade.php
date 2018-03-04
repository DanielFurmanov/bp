@extends('layouts.general')


@section('content')
	@php /** @var \App\Models\Book $book */ @endphp
	{{ $book->getTitle() }}

	@include('books.'.$book->getSlug())
@endsection
