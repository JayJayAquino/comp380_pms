<?php

namespace App\Http\Controllers;

use App\Models\Deliverable;
use Illuminate\Http\Request;

class DeliverableController extends Controller
{
    public function create()
    {
        $deliverable = Deliverable::create([
            'name' => $request->name,
            'description' => $request->description,
            'due_date' => $request->due_date,
        ]);
        $deliverable->save();
        return $deliverable;
    }

    public function read($id)
    {
        $deliverable = Deliverable::where('id', $id)->first();
        return $deliverable;
    }

    public function readAll()
    {
        $allDeliverables = Deliverable::all();
        return $allDeliverables;
    }
    public function update($id)
    {
        $deliverable = Deliverable::find($id);
        $deliverable->name = $request->name ? $request->name :  $deliverable->name;
        $deliverable->description = $request->description ? $request->description : $deliverable->description;
        $deliverable->due_date = $request->due_date ? $request->due_date : $deliverable->due_date;
        $deliverable->save();
        return $deliverable;
    }

    public function delete($id)
    {
        $response = Deliverable::where('id',$id)->delete();
        return $response;
    }
}
