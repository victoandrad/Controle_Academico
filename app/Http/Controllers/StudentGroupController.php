<?php

namespace App\Http\Controllers;

use App\Models\StudentGroup;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class StudentGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = StudentGroup::all();
        return view('studentGroups', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255|unique:student_groups,name',
        ]);
        $data = StudentGroup::query()->create($validated);
        return redirect()->route('studentGroups.index')->with('success', 'Student group created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $data = StudentGroup::query()->findOrFail($id);
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
            'name' => 'required|max:255|unique:student_groups,name',
        ]);
        try {
            $data = StudentGroup::query()->findOrFail($id)->update($validated);
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
            StudentGroup::query()->findOrFail($id)->delete();
            return redirect()->route('studentGroups.index')->with('success', 'Student group deleted successfully!');
        } catch (ModelNotFoundException $e) {
            return redirect()->route('studentGroups.index')->with('error', 'Student group not found');
        }
    }
}
