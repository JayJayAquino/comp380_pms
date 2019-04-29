<?php

namespace App\Http\Controllers;

use App\Deliverable;
use Illuminate\Http\Request;

class DeliverableController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $deliverable = new Deliverable();
        $deliverable->name = $request->name;
        $deliverable->description = $request->description;
        $deliverable->due_date = $request->due_date;
        $deliverable->save();
        return response('Deliverable Added successfully', 200)
        ->header('Content-Type', 'text/plain');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Deliverable  $deliverable
     * @return \Illuminate\Http\Response
     */
    public function show(Deliverable $deliverable)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Deliverable  $deliverable
     * @return \Illuminate\Http\Response
     */
    public function edit(Deliverable $deliverable)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Deliverable  $deliverable
     * @return \Illuminate\Http\Response
     */
    public function update($id ,Request $request)
    {
    
    $deliverable = Deliverable::find($id);
    $deliverable->name = $request->name ? $request->name :  $deliverable->name;
    $deliverable->description = $request->description ? $request->description : $deliverable->description;
    $deliverable->due_date = $request->due_date ? $request->due_date : $deliverable->due_date; 
    $deliverable->save();
    return response('Deliverable updated successfully', 200)
    ->header('Content-Type', 'text/plain');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Deliverable  $deliverable
     * @return \Illuminate\Http\Response
     */
    public function destroy(Deliverable $deliverable)
    {
        //
    }
    public function testing(){
        return 'Small but significant process';
    }
    public function getAllDeliverables() {
        $allDeliverables = Deliverable::all();
        return $allDeliverables;
    }
}
