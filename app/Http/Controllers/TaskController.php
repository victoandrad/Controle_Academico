<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\StudentGroup;
use App\Models\Task;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::all();
        $students = Student::all();
        $studentGroups = StudentGroup::all();
        return view('admin.tasks', compact('tasks', 'students', 'studentGroups'));
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
            'lesson_id' => 'required|exists:lesson,id',
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
            'lesson_id' => 'required|exists:lesson,id',
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
