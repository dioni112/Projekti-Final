<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use APP\Models\Task;

class TaskController extends Controller
{
    public function index() {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }








    public function store(Request $request){
        $request->validate(
            ['title=>required|String|max:255'],
        );

Task::create(
    [
        'title'=>$request->title,
    ]);

return redirect()->back();

    }


    public function updaate(Task $task){
        $task-update([
            'completed'=> !$task->completed,
        ]);

        return redirect()->back();
    }

    public function destroy(Task $task){
        $task->delete();
 return redirect()->back();
    }
}
