<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    
    public function index()
    {
        $tasks = Task::orderBy('priority')->get();
    
        return view('tasks.index', ['tasks' => $tasks]);
    }

    public function edit($id){
        $task = Task::find($id);

        return view('tasks.edit', ['task' => $task]);
    }

    public function delete($id){
        $task = Task::find($id);

        return view('tasks.delete', ['task' => $task]);
    }
    
    public function store(Request $request)
    {
        
        $task = new Task();
        $task->name = $request->input('name');
        $task->priority = Task::count() + 1;
        $task->save();
    
        return redirect('/');
    }
    
    public function update(Request $request, Task $task)
    {
        $task->name = $request->input('name');
        $task->save();
    
        return redirect('/');
    }
    
    public function destroy(Task $task)
    {
        $task->delete();
    
        return redirect('/');
    }
    
    public function reorder(Request $request)
    {
        $tasks = Task::orderBy('priority')->get();        
        
        foreach ($tasks as $index => $taskId) {
            $task = Task::find($taskId);
            if ($task) {
                $task->priority = $index + 1;
                $task->save();
            }
        }
    
        return redirect('/');
    }
}
