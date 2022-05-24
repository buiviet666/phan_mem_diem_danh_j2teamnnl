<?php

namespace App\Http\Controllers;

use App\Models\shift;
use App\Http\Requests\StoreshiftRequest;
use App\Http\Requests\UpdateshiftRequest;

class ShiftController extends Controller
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
     * @param  \App\Http\Requests\StoreshiftRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreshiftRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\shift  $shift
     * @return \Illuminate\Http\Response
     */
    public function show(shift $shift)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\shift  $shift
     * @return \Illuminate\Http\Response
     */
    public function edit(shift $shift)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateshiftRequest  $request
     * @param  \App\Models\shift  $shift
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateshiftRequest $request, shift $shift)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\shift  $shift
     * @return \Illuminate\Http\Response
     */
    public function destroy(shift $shift)
    {
        //
    }
}
