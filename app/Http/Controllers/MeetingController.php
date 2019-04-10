<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Meeting;
use Illuminate\Http\Request;
use Response;
use function view;

class MeetingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layouts.admin.meetings.list', [
            'meetings' => Meeting::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $meeting = new Meeting();

        // todo this should use MeetingManager to store (->store($request))
        $city = City::query()->findOrFail($request->get('city_id'));

        $meeting->setDescription($request->get('description'));
        $meeting->city()->associate($city);
        $meeting->setAddress($request->get('address'));
        $meeting->setDateStart($request->get('date_start'));

        if ($request->has('time_start')) {
            $meeting->setTimeStart($request->get('time_start'));
        }

        if ($request->has('date_end')) {
            $meeting->setDateEnd($request->get('date_end'));
        }

        if ($request->has('time_end')) {
            $meeting->setTimeEnd($request->get('time_end'));
        }

        $result = $meeting->save();

        return Response::make('Response '.($result ? 'success' : 'failure')); // todo proper response
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Meeting  $meeting
     * @return \Illuminate\Http\Response
     */
    public function show(Meeting $meeting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Meeting  $meeting
     * @return \Illuminate\Http\Response
     */
    public function edit(Meeting $meeting)
    {
        return view('layouts.admin.meetings.edit', [
           'meeting' => $meeting,
           'cities'  => City::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Meeting  $meeting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Meeting $meeting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Meeting  $meeting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Meeting $meeting)
    {
        //
    }
}
