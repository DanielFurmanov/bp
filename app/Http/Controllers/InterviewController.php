<?php

namespace App\Http\Controllers;

use App\Models\Interview;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\In;

class InterviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		return view('layouts.admin.interviews.list', [
			'interviews' => Interview::all(),
			'title' => 'Интервью',
		]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.admin.interviews.edit', [
            'route' => route('interviews.store'),
            'interview' => new Interview(),
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
        $interview = new Interview();
        $interview->setTitle($request->get('title'));
        $interview->setSlug($request->get('slug'));
        $interview->setDescription($request->get('annotation'));
        $interview->setFullText($request->get('content'));

        $interview->saveOrFail();

        return redirect()->route('interviews.index')->with('success', 'Created'); // todo proper
    }

    /**
     * Display the specified resource.
     *
     * @param  string $slug
     * @return \Illuminate\Http\Response
     */
    public function show(string $slug)
    {
		/** @var Interview $interview */
		$interview = Interview::query()
			->where(['slug' => $slug])
			->firstOrFail()
		;

		return view('interviews.show', [
			'title' => $interview->getTitle(),
			'interview' => $interview,
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
        return view('layouts.admin.interviews.edit', [
            'formMethod' => 'PUT',
            'route' => route('interviews.update', $id),
            'interview' => Interview::query()->findOrFail($id),
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
        /** @var Interview $interview */
        $interview = Interview::query()->findOrFail($id);
        $interview->setTitle($request->get('title'));
        $interview->setSlug($request->get('slug'));
        $interview->setDescription($request->get('annotation'));
        $interview->setFullText($request->get('content'));

        $interview->saveOrFail();

        return redirect()->route('interviews.index')->with('success', 'Updated'); // todo proper
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $interview = Interview::query()->findOrFail($id);
        $interview->delete();

        return redirect()->route('interviews.index')->with('success', 'Удалено'); // todo proper
    }
}
