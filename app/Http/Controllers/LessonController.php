<?php

namespace App\Http\Controllers;

use App\Models\Frequency;
use App\Models\Lesson;
use App\Models\Task;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LessonController extends Controller
{
    public function getStudents($id)
    {
        $lesson = Lesson::with('studentGroup.students.user')->findOrFail($id);
        return response()->json($lesson->studentGroup->students);
    }

    public function getFrequencies($id)
    {
        $frequencies = Frequency::with('student.user')
            ->where('lesson_id', $id)
            ->orderBy('date', 'desc')
            ->get();
        return response()->json($frequencies);
    }

    public function getTasks($id)
    {
        $tasks = Task::query()->where('lesson_id', $id)->get();
        return response()->json($tasks);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Lesson::all();
        return response()->json($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'room_id' => 'required|exists:rooms,id',
            'timeslot_id' => 'required|exists:timeslots,id',
            'teacher_id' => 'required|exists:teachers,id',
            'student_group_id' => 'required|exists:student_groups,id',
            'curriculum_unit_id' => 'required|exists:curriculum_units,id',
        ]);
        $data = Lesson::query()->create($validated);
        return response()->json($data, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $data = Lesson::query()->findOrFail($id);
            return response()->json($data);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'error' => $e->getMessage(),
                'message' => 'Resource not found'
            ], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'room_id' => 'required|exists:rooms,id',
            'timeslot_id' => 'required|exists:timeslots,id',
            'teacher_id' => 'required|exists:teachers,id',
            'student_group_id' => 'required|exists:student_groups,id',
            'curriculum_unit_id' => 'required|exists:curriculum_units,id',
        ]);
        try {
            $data = Lesson::query()->findOrFail($id)->update($validated);
            return response()->json($data);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'error' => $e->getMessage(),
                'message' => 'Resource not found'
            ], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            Lesson::query()->findOrFail($id)->delete();
            return response()->noContent();
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'error' => $e->getMessage(),
                'message' => 'Resource not found'
            ], 404);
        }
    }
}
