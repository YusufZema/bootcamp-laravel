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

    public function update(Request $request, Tasks $task)
    {
        abort_unless($task->user_id === auth()->id(), 403);

        if ($request->has('title') || $request->has('description')) {
            $data = $request->validate([
                'title' => ['required', 'string', 'max:255'],
                'description' => ['nullable', 'string'],
            ]);

            $task->update($data);

            return redirect()->route('tasks.index')->with('message', 'تم تحديث المهمة بنجاح!');
        }

        $task->update(['completed' => !$task->completed]);
        return redirect()->route('tasks.index');
    }

    public function destroy(Tasks $task)
    {
        $task->delete();
        return redirect()->back();
    }
    
    public function edit(Tasks $task)
{
    abort_unless($task->user_id === auth()->id(), 403);
    return view('edit', compact('task'));
}
}
