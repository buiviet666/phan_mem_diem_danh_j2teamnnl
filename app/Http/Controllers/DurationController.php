<?php

namespace App\Http\Controllers;

use App\Models\duration;
use App\Http\Requests\StoredurationRequest;
use App\Http\Requests\UpdatedurationRequest;

class DurationController extends Controller
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
     * @param  \App\Http\Requests\StoredurationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoredurationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\duration  $duration
     * @return \Illuminate\Http\Response
     */
    public function show(duration $duration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\duration  $duration
     * @return \Illuminate\Http\Response
     */
    public function edit(duration $duration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatedurationRequest  $request
     * @param  \App\Models\duration  $duration
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatedurationRequest $request, duration $duration)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\duration  $duration
     * @return \Illuminate\Http\Response
     */
    public function destroy(duration $duration)
    {
        //
    }
}
