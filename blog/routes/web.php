<?php

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
Route::get('/', function () {
	// $name = 'Cc';
	// return view('welcome')->with('name', $name);
	// return view('welcome', ['name' => $name]);
	$name = 'Cc';
	$age = 18;
	$sex = '男';
	return view('welcome', compact('name', 'age', 'sex'));
});
// Route::get('tasks', function () {
// 	$tasks = DB::table('tasks')->latest()->get();
// 	return view('tasks.index', compact('tasks'));
// });
// Route::get('tasks/{task}', function ($id) {
// 	$task = DB::table('tasks')->find($id);
// 	return view('tasks/show', compact('task'));
// });

// Route::get('tasks', function () {
// 	$completedTasks = Task::latest()->completed()->get();
// 	$unCompletedTasks = Task::latest()->unCompleted()->get();
// 	return view('tasks/index', compact('completedTasks', 'unCompletedTasks'));
// });

// Route::get('tasks/{task}', function ($id) {
// 	$task = Task::findorFail($id);
// 	return view('tasks/show', compact('task'));
// });

Route::get('tasks', 'TaskController@index');
Route::get('tasks/{task}', 'TaskController@show');
