<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//deliverables
Route::get('deliverables/hello', 'DeliverableController@testing');
Route::get('deliverables/all', 'DeliverableController@getAllDeliverables');
Route::post('createDeliverable', 'DeliverableController@store');
Route::patch('updateDeliverable/{deliverableId}', 'DeliverableController@update');
//resources
Route::get('resources/all', 'ResourceController@getAllResources');
Route::post('createResource', 'ResourceController@store');
Route::patch('updateResource/{resourceId}', 'ResourceController@update');

//issues
Route::get('issues/all', 'IssueController@getAllIssues');
Route::post('createIssue', 'IssueController@store');
Route::patch('updateIssue/{issueId}', 'IssueController@update');



//action items
Route::get('actionItems/all', 'ActionItemController@getAllActionItems');
Route::post('createActionItem', 'ActionItemController@store');
Route::patch('updateActionItem/{actionItemId}', 'ActionItemController@update');


//tasks
Route::get('tasks/all', 'TaskController@getAllTasks');
Route::post('createTask', 'TaskController@store');
Route::patch('updateTask/{taskId}', 'TaskController@update');





Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

