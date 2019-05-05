<?php

namespace App\Http\Controllers;

use App\Models\ActionItem;
use Illuminate\Http\Request;

class ActionItemController extends Controller
{
    public function create()
    {
        $actionItem = ActionItem::create([
            'name' => $request->name,
            'description' => $request->description,
            'date_created' => $request->date_created,
            'date_assigned' => $request->date_assigned,
            'resource_assigned' => $request->resource_assigned,
            'expected_completion_date' => $request->expected_completion_date,
            'actual_completion_date' => $request->actual_completion_date,
            'status' => $request->status,
            'status_description' => $request->status_description,
        ]);
        $actionItem->save();
        return $actionItem;
    }

    public function read($id)
    {
        $actionItem = ActionItem::where('id', $id)->first();
        return $resource;
    }

    public function readAll()
    {
        $allActionItems = ActionItem::all();
        return $allActionItems;
    }

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

    public function delete($id)
    {
        $response = ActionItem::where('id',$id)->delete();
        return $response;
    }
}
