<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use function view;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

	public function main() {
		return view('layouts.home', [
			'title' => 'I AM A TITLE',
		]);
    }

	public function books() {
		return view('layouts.books', [
			'title' => 'BOOOOKS',
			'books' => Book::all()->load('publisher'),
		]);
    }

	public function showBook($bookSlug) {
		$book = Book::query()
			->where('slug', $bookSlug)
			->firstOrFail();

		return view('layouts.book', [
			'title' => $book->getTitle(),
			'book' => $book,
		]);
    }

	public function interviews() {
		return view('layouts.interviews', [
			'title' => 'interviews11',
		]);
    }

	public function reviews() {
		return view('layouts.reviews', [
			'title' => 'reviews11',
		]);
    }

	public function contacts() {
		return view('layouts.contacts', [
			'title' => 'CONTACTS',
		]);
    }

	public function articles() {
		return view('layouts.articles', [
			'title' => 'articles',
		]);
    }
}
