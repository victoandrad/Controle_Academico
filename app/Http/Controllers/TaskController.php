<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use App\Models\Task;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        if ($user->isTeacher()) {
            $lessons = Lesson::query()->where('teacher_id', $user->teacher->id)->get();
            return view('tasks', compact('lessons'));
        } else if ($user->isStudent()) {

        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'value' => 'required|numeric|min:0',
            'lesson_id' => 'required|exists:lessons,id',
        ]);
        $data = Task::query()->create($validated);
        return redirect()->route('tasks.index')->with('success', 'Task created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $data = Task::query()->findOrFail($id);
            return response()->json($data);
        } catch (ModelNotFoundException $e) {
            return redirect()->route('tasks.index')->with('error', 'Task not found');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'value' => 'required|numeric|min:0',
            'lesson_id' => 'required|exists:lessons,id',
        ]);
        try {
            $data = Task::query()->findOrFail($id)->update($validated);
            return redirect()->route('tasks.index')->with('success', 'Task updated successfully!');
        } catch (ModelNotFoundException $e) {
            return redirect()->route('tasks.index')->with('error', 'Task not found');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            Task::query()->findOrFail($id)->delete();
            return redirect()->route('tasks.index')->with('success', 'Task deleted successfully!');
        } catch (ModelNotFoundException $e) {
            return redirect()->route('tasks.index')->with('error', 'Task not found');
        }
    }
}
