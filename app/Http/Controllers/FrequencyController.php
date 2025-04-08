<?php

namespace App\Http\Controllers;

use App\Models\Frequency;
use App\Models\Lesson;
use App\Models\StudentGroup;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class FrequencyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $frequencies = Frequency::all();
        $studentGroups = StudentGroup::all();
        return view('admin.frequencies', compact('frequencies', 'studentGroups'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'attended' => 'required|boolean',
            'student_id' => 'required|exists:students,id',
            'curriculum_unit_id' => 'required|exists:curriculum_units,id',
        ]);
        $data = Frequency::query()->create($validated);
        return response()->json($data, 201);
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
