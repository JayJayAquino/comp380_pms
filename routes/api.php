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
Route::prefix('deliverables')->group(function () {
    Route::post('create', 'DeliverableController@create');
    Route::get('read', 'DeliverableController@readAll');
    Route::get('read/{id}', 'DeliverableController@read');
    Route::patch('update/{id}', 'DeliverableController@update');
    Route::delete('delete/{id}', 'DeliverableController@delete');
});

//resources
Route::prefix('resources')->group(function () {
    Route::post('create', 'ResourceController@create');
    Route::get('read/all', 'ResourceController@readAll');
    Route::get('read/{id}', 'ResourceController@read');
    Route::patch('update/{id}', 'ResourceController@update');
    Route::delete('delete/{id}', 'ResourceController@delete');
});

//issues
Route::prefix('issues')->group(function () {
    Route::post('create', 'IssueController@create');
    Route::get('read', 'IssueController@readAll');
    Route::get('read/{id}', 'IssueController@read');
    Route::patch('update/{id}', 'IssueController@update');
    Route::delete('delete/{id}', 'IssueController@delete');
});

//action items
Route::prefix('actionitems')->group(function () {
    Route::post('create', 'ActionItemController@create');
    Route::get('read', 'ActionItemController@readAll');
    Route::get('read/{id}', 'ActionItemController@read');
    Route::patch('update/{id}', 'ActionItemController@update');
    Route::delete('delete/{id}', 'ActionItemController@delete');
});

//tasks
Route::prefix('tasks')->group(function () {
    Route::post('create', 'TaskController@create');
    Route::get('read', 'TaskController@readAll');
    Route::get('read/{id}', 'TaskController@read');
    Route::patch('update/{id}', 'TaskController@update');
    Route::delete('delete/{id}', 'TaskController@delete');
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

