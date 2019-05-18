<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArticle;
use App\Models\Article;
use App\Models\ArticleCategory;
use Illuminate\Http\Request;
use function redirect;
use Response;
use function route;
use function view;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view('layouts.admin.articles.list', [
             'articles' => Article::all(),
         ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.admin.articles.edit', [
            'route' => route('articles.store'),
            'categories' => ArticleCategory::all(),
            'article' => new Article(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreArticle $request)
    {
        $article = new Article();
        $article->setTitle($request->get('title'));
        $article->setSlug($request->get('slug'));
        $article->setAnnotation($request->get('annotation'));
        $article->setContent($request->get('content'));

        $article->category()->associate(ArticleCategory::query()->findOrFail($request->get('category_id')));
        $article->saveOrFail();

        return redirect()->route('articles.index')->with('success', 'Created'); // todo proper
    }

    /**
     * Display the specified resource.
     *
     * @param  string $slug
     * @return \Illuminate\Http\Response
     */
    public function show(string $slug)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('layouts.admin.articles.edit', [
            'formMethod' => 'PUT',
            'route' => route('articles.update', $id),
            'categories' => ArticleCategory::all(),
            'article' => Article::query()->findOrFail($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // todo this is bad
        /** @var Article $article */
        $article = Article::query()->findOrFail($id);
        $article->setTitle($request->get('title'));
        $article->setSlug($request->get('slug'));
        $article->setAnnotation($request->get('annotation'));
        $article->setContent($request->get('content'));

        $article
            ->category()
            ->associate(
                ArticleCategory::query()
                    ->findOrFail($request->get('category_id'))
            );

        $article->saveOrFail();

        return redirect()->route('articles.index')->with('success', 'Updated'); // todo proper
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /** @var Article $article */
        $article = Article::query()->findOrFail($id);
        $articleName = $article->getTitle();
        $article->delete();

        return redirect()->route('articles.index')->with('success', 'Статья "'.$articleName.'" удалена'); // todo proper
    }
}
