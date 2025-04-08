<?php

namespace App\Http\Controllers;

use App\Models\Frequency;
use App\Models\Lesson;
use App\Models\Student;
use App\Models\StudentGroup;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FrequencyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $lessons = Lesson::query()->where('teacher_id', '20')->get();
        return view('admin.frequencies', compact('lessons'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'lesson_id' => 'required|exists:lessons,id',
            'frequency_date' => 'required|date',
        ]);

        $lessonId = $request->input('lesson_id');
        $date = $request->input('frequency_date');

        foreach ($request->all() as $key => $value) {
            if (Str::startsWith($key, 'student_') && !Str::endsWith($key, '_excused')) {
                $studentId = explode('_', $key)[1];

                if (!Student::query()->where('id', $studentId)->exists()) {
                    continue;
                }

                $attended = $value === 'present' ? 1 : 0;
                $excused = $request->has("student_{$studentId}_excused");

                Frequency::query()->create([
                    'lesson_id' => $lessonId,
                    'student_id' => $studentId,
                    'date' => $date,
                    'attended' => $attended,
                    'excused' => $excused,
                ]);
            }
        }

        return redirect()->route('frequencies.index')->with('success', 'Frequencies created successfully!');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $data = Frequency::query()->findOrFail($id);
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
            'attended' => 'required|boolean',
            'student_id' => 'required|exists:students,id',
            'curriculum_unit_id' => 'required|exists:curriculum_units,id',
        ]);
        try {
            $data = Frequency::query()->findOrFail($id)->update($validated);
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
            Frequency::query()->findOrFail($id)->delete();
            return response()->noContent();
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'error' => $e->getMessage(),
                'message' => 'Resource not found'
            ], 404);
        }
    }
}
