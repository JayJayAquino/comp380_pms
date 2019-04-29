<?php

namespace App\Http\Controllers;

use App\Issue;
use Illuminate\Http\Request;

class IssueController extends Controller
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
        $issue = new Issue();
        $issue->description = $request->description;
        $issue->priority = $request->priority;
        $issue->severity = $request->severity;
        $issue->date_raised = $request->date_raised;
        $issue->date_assigned = $request->date_assigned;
        $issue->expected_completion_date = $request->expected_completion_date;
        $issue->actual_completion_date = $request->actual_completion_date;
        $issue->save();
        return response('Issue Added successfully', 200)
        ->header('Content-Type', 'text/plain');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Issue  $issue
     * @return \Illuminate\Http\Response
     */
    public function show(Issue $issue)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Issue  $issue
     * @return \Illuminate\Http\Response
     */
    public function edit(Issue $issue)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Issue  $issue
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Issue  $issue
     * @return \Illuminate\Http\Response
     */
    public function destroy(Issue $issue)
    {
        //
    }
    public function getAllIssues(Issue $issue) {
        $allIssues = Issue::all();
        return $allIssues;
    }
}
