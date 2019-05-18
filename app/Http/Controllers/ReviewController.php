<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
		return view('layouts.reviews', [
			'reviews' => Review::all(),
			'title' => 'reviews',
		]);
    }

    public function index()
    {
        return view('layouts.admin.reviews.list', [
            'reviews' => Review::all(),
            'title' => 'reviews',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.admin.reviews.edit', [
            'route' => route('reviews.store'),
            'cities'  => City::all(),
            'review' => new Review(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // todo
        $review = new Review();
        $review->setAuthor($request->get('author'));
        $review->setAvatar($request->get('avatar'));
        $review->setCity($request->get('city_id'));
        $review->setComment($request->get('comment'));
        $review->setDate($request->get('date'));
        $review->setText($request->get('text'));


        $review->saveOrFail();

        return redirect()->route('interviews.index')->with('success', 'Created'); // todo proper
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

		/** @var Review $review */
		$review = Review::query()
			->findOrFail($id);


		return view('reviews.show', [
			'title' => $review->getAuthor().' '.$review->getCity(),
			'review' => $review,
		]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('layouts.admin.reviews.edit', [
            'formMethod' => 'PUT',
            'route' => route('reviews.update', $id),
            'review' => Review::query()->findOrFail($id),
            'cities'  => City::all(),
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $review = Review::query()->findOrFail($id);
        $review->delete();

        return redirect()->route('interviews.index')->with('success', 'Удалено'); // todo proper
    }
}
