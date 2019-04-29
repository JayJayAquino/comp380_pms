<?php

namespace App\Http\Controllers;

use App\Resource;
use Illuminate\Http\Request;

class ResourceController extends Controller
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
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $resource = new Resource();
        $resource->name = $request->name;
        $resource->title = $request->title;
        $resource->list_of_skills = $request->list_of_skills;
        $resource->availability_calendar = $request->availability_calendar;
        $resource->pay_rate = $request->pay_rate;
        $resource->save();
        return response('Resource Added successfully', 200)
        ->header('Content-Type', 'text/plain');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function show(Resource $resource)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function edit(Resource $resource)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $resource = Resource::find($id);
        $resource->name = $request->name ? $request->name : $resource->name;
        $resource->title = $request->title ? $request->title : $resource->title;  
        $resource->list_of_skills = $request->list_of_skills ? $request->list_of_skills : $resource->list_of_skills; 
        $resource->availability_calendar = $request->availability_calendar ? $request->availability_calendar : $resource->availability_calendar;
        $resource->pay_rate = $request->pay_rate ? $request->pay_rate : $resource->pay_rate;
        $resource->save();
        return response('Resource Updated successfully', 200)
        ->header('Content-Type', 'text/plain');   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resource $resource)
    {
        //
    }
    public function getAllResources() {
        $allResources = Resource::all();
        return $allResources;
    }

}
