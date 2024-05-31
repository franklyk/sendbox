<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class TaskController extends Controller
{
    public function index()
    {

        $tasks = Task::with('employer')->simplePaginate(3);
        return view('task.index', [
            'tasks' => $tasks
        ]);
    }

    public function show(Task $task)
    {

        return view('task.show', ['task' => $task]);
    }

    public function create()
    {

        return view('task.create');
    }

    public function store()
    {

        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required']
        ]);

        Task::create([
            'title' => request('title'),
            'salary' => request('salary'),
            'employer_id' => Auth::user()->id
        ]);
    }

    public function edit(Task $task)
    {

        // Gate::authorize('edit-task', $task);

        // if (Gate::denies('edit-task', $task)){

        //     return view('task.edit', ['task' => $task]);

        // }else if(Gate::allows('edit-task', $task)) {

        //     return redirect('/login');

        // }

        // if (Auth::guest()) {
        //     return redirect('/login');
        // }

        return view('task.edit', ['task' => $task]);
    }

    public function update(Task $task)
    {
        request()->validate([
            'title' => request(['required', 'min:3']),
            'salary' => request(['required'])
        ]);

        $task->update([
            'title' => request('title'),
            'salary' => request('salary'),
        ]);

        return redirect('/task');
    }

    public function destroy(Task $task)
    {
        $task->delete();

        return redirect('/task');
    }
}
