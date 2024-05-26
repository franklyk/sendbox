<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        return view('task.index');
    }

    public function show()
    {
        return view('task.show');
    }

    public function create()
    {
        return view('task.create');
    }

    public function store()
    {
        dd('Cadastrar');
    }

    public function edit()
    {
        return view('task.edit');
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
