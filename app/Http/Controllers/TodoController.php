<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Http\Requests\TodoCreateRequest;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        
        return view('todos.index', compact('todos'));
    }

    public function create()
    {
        return view('todos.create');
    }

    public function store(TodoCreateRequest $request)
    {
        Todo::create($request->all());
        return redirect()->back()->with('message', 'Todo created successfully');
    }

    public function edit(Todo $todo)
    {   
        return view('todos.edit', compact('todo'));
    }

    public function update(Request $request, Todo $todo)
    {
        $todo->update(['title' => $request->title ]);
        return redirect(route('todo.index'))->with('message', 'Task Updated');
    }

    public function delete(Todo $todo)
    {
        $todo->delete();
        return redirect()->back()->with('message', 'Task Deleted');
    }
}
?>