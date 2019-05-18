<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMeeting;
use App\Models\City;
use App\Models\Meeting;
use Illuminate\Http\Request;
use function implode;
use Prophecy\Exception\Prediction\NoCallsException;
use Response;
use function route;
use function trans;
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
        return view('layouts.admin.meetings.edit', [
            'route' => route('meetings.store'),
            'meeting' => new Meeting(),
            'cities'  => City::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMeeting $request)
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

        $meeting->save();

        return redirect()
            ->route('meetings.index')
            ->with('success', trans('message.meetings.created', [
                'where' => $meeting->city->getName(),
                'when' => implode(' ', [
                    $meeting->getDateStart(), $meeting->getTimeStart(), $meeting->getDateEnd(), $meeting->getTimeEnd()
                ]),
                'description' => $meeting->getDescription(),
            ]));
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
           'route' => route('meetings.update', $meeting->getId()),
           'meeting' => $meeting,
           'formMethod' => 'PUT',
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
    public function update(StoreMeeting $request, Meeting $meeting)
    {
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

        $meeting->save();

        return redirect()
            ->route('meetings.index')
            ->with('success', trans('message.meetings.updated', [
                'where' => $meeting->city->getName(),
                'when' => implode(' ', [
                    $meeting->getDateStart(), $meeting->getTimeStart(), $meeting->getDateEnd(), $meeting->getTimeEnd()
                ]),
                'description' => $meeting->getDescription(),
            ]))
        ;
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
