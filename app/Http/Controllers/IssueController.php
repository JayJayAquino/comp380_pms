<?php

namespace App\Http\Controllers;

use App\Models\Issue;
use Illuminate\Http\Request;

class IssueController extends Controller
{
    public function create()
    {
        $issue = Issue::create([
            'description' => $request->description,
            'priority' => $request->priority,
            'severity' => $request->severity,
            'date_raised' => $request->date_raised,
            'date_assigned' => $request->date_assigned,
            'expected_completion_date' => $request->expected_completion_date,
            'actual_completion_date' => $request->actual_completion_date,
        ]);
        $issue->save();
        return $issue;
    }

    public function read($id)
    {
        $issue = Issue::where('id', $id)->first();
        return $resource;
    }

    public function readAll()
    {
        $allIssues = Issue::all();
        return $allIssues;
    }

    public function update($id, Request $request)
    {

        $issue = Issue::find($id);
        $issue->description = $request->description ? $request->description : $issue->description;
        $issue->priority = $request->priority? $request->priority : $issue->priority;
        $issue->severity = $request->severity? $request->severity : $issue->severity;
        $issue->date_raised = $request->date_raised ? $request->date_raised : $issue->date_raised;
        $issue->date_assigned = $request->date_assigned ? $request->date_assigned :  $issue->date_assigned;
        $issue->expected_completion_date = $request->expected_completion_date? $request->expected_completion_date : $issue->expected_completion_date;
        $issue->actual_completion_date = $request->actual_completion_date ? $request->actual_completion_date : $issue->actual_completion_date;
        $issue->save();
        return response('Issue updated successfully', 200)
        ->header('Content-Type', 'text/plain');
    }

    public function delete($id)
    {
        $response = Issue::where('id',$id)->delete();
        return $response;
    }
}
