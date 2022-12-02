<?php

namespace App\Http\Controllers;

use App\Models\Time_check;
use App\Http\Requests\StoreTime_checkRequest;
use App\Http\Requests\UpdateTime_checkRequest;

class TimeCheckController extends Controller
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
     * @param  \App\Http\Requests\StoreTime_checkRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTime_checkRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Time_check  $time_check
     * @return \Illuminate\Http\Response
     */
    public function show(Time_check $time_check)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Time_check  $time_check
     * @return \Illuminate\Http\Response
     */
    public function edit(Time_check $time_check)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTime_checkRequest  $request
     * @param  \App\Models\Time_check  $time_check
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTime_checkRequest $request, Time_check $time_check)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Time_check  $time_check
     * @return \Illuminate\Http\Response
     */
    public function destroy(Time_check $time_check)
    {
        //
    }
}
