<?php

namespace App\Http\Controllers;

use App\Models\Tasks;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = auth()->user()->tasks;
        return view('tasks', compact('tasks'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        auth()->user()->tasks()->create($request->all());

        return redirect()->back()->with('message', 'تم إضافة المهمة بنجاح!');
    }

    public function update(Tasks $task)
    {
        $task->update(['completed' => !$task->completed]);
        return redirect()->back();
    }

    public function destroy(Tasks $task)
    {
        $task->delete();
        return redirect()->back();
    }
}
