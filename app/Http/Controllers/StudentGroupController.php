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
        $studentGroups = StudentGroup::all();
        return view('admin.register.studentGroups', compact('studentGroups'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255|unique:student_groups,name',
        ]);
        StudentGroup::query()->create($validated);
        return redirect()->route('studentGroups.index')->with('success', 'Student Group created successfully!');
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
            return redirect()->route('studentGroups.index')->with('error', 'Student Group not found');
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
            StudentGroup::query()->findOrFail($id)->update($validated);
            return redirect()->route('studentGroups.index')->with('success', 'Student Group updated successfully!');
        } catch (ModelNotFoundException $e) {
            return redirect()->route('studentGroups.index')->with('error', 'Student Group not found');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            StudentGroup::query()->findOrFail($id)->delete();
            return redirect()->route('studentGroups.index')->with('success', 'Student Group deleted successfully!');
        } catch (ModelNotFoundException $e) {
            return redirect()->route('studentGroups.index')->with('error', 'Student Group not found');
        }
    }
}
