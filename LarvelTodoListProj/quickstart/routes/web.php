<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Return the main app index 

Route::get('/', function () {
    return view('layouts.tasks');
});

//Add a task to the list 
Route::post('/task', function (Request $request) {
    //Require validation of max chars 

    $validator = Validator::make($request->all(), [
        'name' => 'required|max:255',
    ]);

    //Redirect to index if the page fials
    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }

});

//Remove the task
Route::delete('/task/{id}', function ($id) {
    //
});