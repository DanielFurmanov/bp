<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Book;
use App\Models\Interview;
use App\Models\Review;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use function view;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function main()
    {
        return view('layouts.home', [
            'title'    => 'I AM A TITLE',
            'fullpage' => true,
        ]);
    }

    public function books()
    {
        return view('layouts.books', [
            'title' => 'BOOOOKS',
            'books' => Book::all()->load('publisher'),
        ]);
    }

    public function showBook($bookSlug)
    {
        /** @var Book $book */
        $book = Book::query()
            ->where('slug', $bookSlug)
            ->firstOrFail();

        return view('layouts.book', [
            'title' => $book->getTitle(),
            'book'  => $book,
        ]);
    }

    public function interviews()
    {
        return view('interviews.index', [
            'interviews' => Interview::all(),
            'title'      => 'Интервью',
        ]);
    }

    public function contacts()
    {
        return view('layouts.contacts', [
            'title' => 'CONTACTS',
        ]);
    }

    public function articles()
    {
        return view('layouts.articles', [
            'title'    => 'articles',
            'articles' => Article::all(),
        ]);
    }

    public function showArticle($articleSlug)
    {
        /** @var Article $article */
        $article = Article::query()
            ->where('slug', $articleSlug)
            ->firstOrFail();

        return view('layouts.article', [
            'title'   => $article->getTitle(),
            'article' => $article,
        ]);
    }

    public function variant1()
    {
        return view('layouts.home', [
            'title'      => 'variant1',
            'fontfamily' => 'Alegreya',
        ]);
    }

    public function variant2()
    {
        return view('layouts.home', [
            'title'      => 'variant2',
            'fontfamily' => "'Philosopher', sans-serif",
            'jumbo'      => "asfsd",
        ]);
    }

    	public function variant3() {
    		return view('layouts.home', [
    			'title' => 'variant3',
                'combined' => true,
//    			'fontfamily' => 'Vollkorn',
    		]);
        }

    	public function variant4() {
    		return view('layouts.home', [
    			'title' => 'variant4',
                'combined' => true,
                'black_background' => true,

    		]);
        }

    	public function variant5() {
            return view('layouts.home', [
                'title' => 'variant5',
                'combined' => true,
                'gradient_background' => true,
                'disable_background_selection' => true,
            ]);
        }

    	public function variant6() {
            return view('layouts.home', [
                'title' => 'variant6',
                'combined' => true,
                'gradient_background' => true,
                'disable_background_selection' => true,

            ]);
        }
    //
    //	public function variant7() {
    //		return view('layouts.home', [
    //			'title' => 'Oswald',
    //			'fontfamily' => 'Oswald',
    //		]);
    //    }
    //
    //	public function variant8() {
    //		return view('layouts.home', [
    //			'title' => 'Ubuntu',
    //			'fontfamily' => 'Ubuntu',
    //		]);
    //    }
}
