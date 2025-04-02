<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Student::all();
        return response()->json($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'registration_number' => 'required|string|max:255|unique:students,registration_number',
            'name' => 'required|string|max:255',
            'student_group_id' => 'required|exists:student_groups,id',
            'user_id' => 'required|exists:users,id',
        ]);
        $data = Student::query()->create($validated);
        return response()->json($data, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $data = Student::query()->findOrFail($id);
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
            'registration_number' => 'required|string|max:255|unique:students,registration_number',
            'name' => 'required|string|max:255',
            'student_group_id' => 'required|exists:student_groups,id',
            'user_id' => 'required|exists:users,id',
        ]);
        try {
            $data = Student::query()->findOrFail($id)->update($validated);
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
            Student::query()->findOrFail($id)->delete();
            return response()->noContent();
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'error' => $e->getMessage(),
                'message' => 'Resource not found'
            ], 404);
        }
    }
}
