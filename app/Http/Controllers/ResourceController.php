<?php

namespace App\Http\Controllers;

use App\Models\Resource;
use Illuminate\Http\Request;

class ResourceController extends Controller
{
    public function create()
    {
        $deliverable = Deliverable::create([
            'name' => $request->name,
            'title' => $request->title,
            'list_of_skills' => $request->list_of_skills,
            'availability_calendar' => $request->availability_calendar,
            'pay_rate' => $request->pay_rate,
        ]);
        $deliverable->save();
        return $deliverable;
    }

    public function read($id)
    {
        $resource = Resource::where('id', $id)->first();
        return $resource;
    }

    public function readAll()
    {
        $allResources = Resource::all();
        return $allResources;
    }
    public function update($id)
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

    public function delete($id)
    {
        $response = Resource::where('id',$id)->delete();
        return $response;
    }
}
