<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {

        $tasks = Task::with('employer')->latest()->simplePaginate(3);
        return view('task.index', [
            'tasks' => $tasks
        ]);
    }

    public function show(Task $task)
    {

        return view('task.show', ['task' => $task ]);
    }

    public function create()
    {
        return view('task.create');
    }

    public function store()
    {
        request()->validate([
            'title' => request('title'),
            'salary' => request('salary')
        ]);

        Task::create([
            'title' => request('title'),
            'salary' => request('salary'),
            'employer_id' => 1
        ]);
    }

    public function edit(Task $task)
    {
        return view('task.edit', ['task' => $task ]);
    }

    public function update()
    {
        dd('Atualizar');
    }

    public function destroy()
    {
        dd('Deletar');
    }
}
