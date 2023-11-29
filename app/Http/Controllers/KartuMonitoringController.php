<?php

namespace App\Http\Controllers;

use App\Models\KartuMonitoring;
use Illuminate\Http\Request;

class KartuMonitoringController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.kartu-monitoring.index');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KartuMonitoring  $kartuMonitoring
     * @return \Illuminate\Http\Response
     */
    public function show(KartuMonitoring $kartuMonitoring)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KartuMonitoring  $kartuMonitoring
     * @return \Illuminate\Http\Response
     */
    public function edit(KartuMonitoring $kartuMonitoring)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KartuMonitoring  $kartuMonitoring
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KartuMonitoring $kartuMonitoring)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KartuMonitoring  $kartuMonitoring
     * @return \Illuminate\Http\Response
     */
    public function destroy(KartuMonitoring $kartuMonitoring)
    {
        //
    }
}
