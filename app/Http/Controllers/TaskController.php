<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function create()
    {
        $task = Task::create([
            'name' => $request->name,
            'description' => $request->description,
            'resource_assigned' => $request->resource_assigned,
            'date_raised' => $request->date_raised,
            'date_assigned' => $request->date_assigned,
            'expected_completion_date' => $request->expected_completion_date,
            'actual_completion_date' => $request->actual_completion_date,
        ]);
        $task->save();
        return $task;
    }

    public function read($id)
    {
        $task = Task::where('id', $id)->first();
        return $resource;
    }

    public function readAll()
    {
        $allTasks = Task::all();
        return $allTasks;
    }

    public function update($id ,Request $request)
    {
        $task = Task::find($id);
        $task->name = $request->name ? $request->name : $task->name;
        $task->description = $request->description ? $request->description : $task->description;
        $task->resource_assigned = $request->resource_assigned ? $request->resource_assigned :  $task->resource_assigned;
        $task->save();
        return response('Task Updated successfully', 200)
        ->header('Content-Type', 'text/plain');
    }

    public function delete($id)
    {
        $response = Task::where('id',$id)->delete();
        return $response;
    }
}
