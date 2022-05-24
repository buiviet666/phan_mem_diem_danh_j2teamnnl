<?php

namespace App\Http\Controllers;

use App\Models\building;
use App\Http\Requests\StorebuildingRequest;
use App\Http\Requests\UpdatebuildingRequest;

class BuildingController extends Controller
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
     * @param  \App\Http\Requests\StorebuildingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorebuildingRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\building  $building
     * @return \Illuminate\Http\Response
     */
    public function show(building $building)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\building  $building
     * @return \Illuminate\Http\Response
     */
    public function edit(building $building)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatebuildingRequest  $request
     * @param  \App\Models\building  $building
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatebuildingRequest $request, building $building)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\building  $building
     * @return \Illuminate\Http\Response
     */
    public function destroy(building $building)
    {
        //
    }
}
