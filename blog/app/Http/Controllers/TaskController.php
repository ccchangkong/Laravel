<?php

namespace App\Http\Controllers;
use App\Task;

class TaskController extends Controller {
	public function index() {
		$completedTasks = Task::latest()->completed()->get();
		$unCompletedTasks = Task::latest()->unCompleted()->get();
		return view('tasks/index', compact('completedTasks', 'unCompletedTasks'));
	}

	// public function show($task) {
	// 	$task = Task::findorFail($task);
	// 	return view('tasks/show', compact('task'));
	// }
	public function show(Task $task) {
		return view('tasks/show', compact('task'));
	}
}
