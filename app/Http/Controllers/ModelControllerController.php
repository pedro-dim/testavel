<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreModelControllerRequest;
use App\Http\Requests\UpdateModelControllerRequest;
use App\Models\ModelController;

class ModelControllerController extends Controller
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
     * @param  \App\Http\Requests\StoreModelControllerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreModelControllerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ModelController  $modelController
     * @return \Illuminate\Http\Response
     */
    public function show(ModelController $modelController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ModelController  $modelController
     * @return \Illuminate\Http\Response
     */
    public function edit(ModelController $modelController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateModelControllerRequest  $request
     * @param  \App\Models\ModelController  $modelController
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateModelControllerRequest $request, ModelController $modelController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ModelController  $modelController
     * @return \Illuminate\Http\Response
     */
    public function destroy(ModelController $modelController)
    {
        //
    }
}
