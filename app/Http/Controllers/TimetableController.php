<?php

namespace App\Http\Controllers;

use App\Models\timetable;
use App\Http\Requests\StoretimetableRequest;
use App\Http\Requests\UpdatetimetableRequest;

class TimetableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoretimetableRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoretimetableRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\timetable  $timetable
     * @return \Illuminate\Http\Response
     */
    public function show(timetable $timetable)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\timetable  $timetable
     * @return \Illuminate\Http\Response
     */
    public function edit(timetable $timetable)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatetimetableRequest  $request
     * @param  \App\Models\timetable  $timetable
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatetimetableRequest $request, timetable $timetable)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\timetable  $timetable
     * @return \Illuminate\Http\Response
     */
    public function destroy(timetable $timetable)
    {
        //
    }
}
