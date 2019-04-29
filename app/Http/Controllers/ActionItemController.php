<?php

namespace App\Http\Controllers;

use App\ActionItem;
use Illuminate\Http\Request;

class ActionItemController extends Controller
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
        $actionItem = new ActionItem();
        $actionItem->name = $request->name;        
        $actionItem->description = $request->description;
        $actionItem->date_created = $request->date_created;
        $actionItem->date_assigned = $request->date_assigned;
        $actionItem->resource_assigned = $request->resource_assigned;                
        $actionItem->expected_completion_date = $request->expected_completion_date;
        $actionItem->actual_completion_date = $request->actual_completion_date;
        $actionItem->status = $request->status;
        $actionItem->status_description = $request->status_description;        

        $actionItem->save();
        return response('ActionItem Added successfully', 200)
        ->header('Content-Type', 'text/plain');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ActionItem  $actionItem
     * @return \Illuminate\Http\Response
     */
    public function show(ActionItem $actionItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ActionItem  $actionItem
     * @return \Illuminate\Http\Response
     */
    public function edit(ActionItem $actionItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ActionItem  $actionItem
     * @return \Illuminate\Http\Response
     */
    public function update($id ,Request $request)
    {
        $actionItem = ActionItem::find($id);  
        $actionItem->name = $request->name ? $request->name : $actionItem->name;
        $actionItem->description = $request->description ? $request->description : $actionItem->description;
        $actionItem->date_created = $request->date_created ? $request->date_created : $actionItem->date_created; 
        $actionItem->date_assigned = $request->date_assigned ? $request->date_assigned :  $actionItem->date_assigned;
        $actionItem->resource_assigned = $request->resource_assigned ? $request->resource_assigned : $actionItem->resource_assigned;               
        $actionItem->expected_completion_date = $request->expected_completion_date? $request->expected_completion_date : $actionItem->expected_completion_date;
        $actionItem->actual_completion_date = $request->actual_completion_date ? $request->actual_completion_date : $actionItem->actual_completion_date;
        $actionItem->status = $request->status ? $request->status :  $actionItem->status;
        $actionItem->status_description = $request->status_description ? $request->status_description : $actionItem->status_description;
        $actionItem->save();
        return response('Action Item Updated successfully', 200)
        ->header('Content-Type', 'text/plain');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ActionItem  $actionItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(ActionItem $actionItem)
    {
        //
    }
    public function getAllActionItems() {
        $allActionItems = ActionItem::all();
        return $allActionItems;
    
    }

}
