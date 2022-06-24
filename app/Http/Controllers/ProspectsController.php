<?php

namespace App\Http\Controllers;

use App\Models\prospects;
use App\Http\Requests\StoreprospectsRequest;
use App\Http\Requests\UpdateprospectsRequest;

class ProspectsController extends Controller
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
     * @param  \App\Http\Requests\StoreprospectsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreprospectsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\prospects  $prospects
     * @return \Illuminate\Http\Response
     */
    public function show(prospects $prospects)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\prospects  $prospects
     * @return \Illuminate\Http\Response
     */
    public function edit(prospects $prospects)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateprospectsRequest  $request
     * @param  \App\Models\prospects  $prospects
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateprospectsRequest $request, prospects $prospects)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\prospects  $prospects
     * @return \Illuminate\Http\Response
     */
    public function destroy(prospects $prospects)
    {
        //
    }
}
