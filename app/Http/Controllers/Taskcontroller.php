<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('articles.task');
    }

    public function creatTask()
    {
        return view('articles.creat');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tasktname' => 'required|string|max:255',
            'taskdescription' => 'required|string',
        ]);

        $data = [
            'tasktname' => $request->input('tasktname'),
            'taskdescription' => $request->input('taskdescription'),
        ];

        $newTask = Task::create($data);
        $tasks = Task::all();

        return view('articles.store', ['tasks' => $tasks, 'success' => 'Task creatd successfully!']);
    }

    public function editTask($id)
    {
        $data = Task::find($id);
        return view('articles.edit', compact('data'));
    }
    public function updateTask(Request $request, $id)
    {
        $request->validate([
            'tasktname' => 'required|string|max:255',
            'taskdescription' => 'required|string',
        ]);

        $data = [
            'tasktname' => $request->input('tasktname'),
            'taskdescription' => $request->input('taskdescription'),
        ];

        // Utilisez la méthode update pour mettre à jour la tâche
        Task::where('id', $id)->update($data);

        $updatedTask = Task::find($id);

        return redirect()->route('articles.index')->with('success', 'Task updated successfully!');
    }
public function deletTask($id)
{
  Task::where('id','=',$id)->delete();
return redirect()->back();
}
}
