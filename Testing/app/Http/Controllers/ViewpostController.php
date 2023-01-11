<?php

namespace App\Http\Controllers;

use App\Models\viewpost;
use App\Http\Requests\StoreviewpostRequest;
use App\Http\Requests\UpdateviewpostRequest;

class ViewpostController extends Controller
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
     * @param  \App\Http\Requests\StoreviewpostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreviewpostRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\viewpost  $viewpost
     * @return \Illuminate\Http\Response
     */
    public function show(viewpost $viewpost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\viewpost  $viewpost
     * @return \Illuminate\Http\Response
     */
    public function edit(viewpost $viewpost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateviewpostRequest  $request
     * @param  \App\Models\viewpost  $viewpost
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateviewpostRequest $request, viewpost $viewpost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\viewpost  $viewpost
     * @return \Illuminate\Http\Response
     */
    public function destroy(viewpost $viewpost)
    {
        //
    }
}
