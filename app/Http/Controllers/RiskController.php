<?php

namespace App\Http\Controllers;

use App\Models\Risk;
use Illuminate\Http\Request;

class RiskController extends Controller
{
    public function create()
    {
        $risk = Risk::create([
            'title' => $request->title,
            'date_assigned' => $request->date_assigned,
            'severity' => $request->severity,
            'priority' => $request->priority,
            'description' => $request->description,
        ]);
        $risk->save();
        return $risk;
    }

    public function read($id)
    {
        $risk = Risk::where('id', $id)->first();
        return $resource;
    }

    public function readAll()
    {
        $allrisks = Risk::all();
        return $allrisks;
    }

    public function update($id ,Request $request)
    {
        $risk = Risk::find($id);
        $risk->name = $request->name ? $request->name : $risk->name;
        $risk->description = $request->description ? $request->description : $risk->description;
        $risk->resource_assigned = $request->resource_assigned ? $request->resource_assigned :  $risk->resource_assigned;
        $risk->save();
        return response('risk Updated successfully', 200)
        ->header('Content-Type', 'text/plain');
    }

    public function delete($id)
    {
        $response = Risk::where('id',$id)->delete();
        return $response;
    }
}
