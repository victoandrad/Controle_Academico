<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers = Teacher::all();
        $users = User::all();
        return view('teachers', compact('teachers', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'personal_number' => 'required|string|unique:teachers',
            'name' => 'required|string',
            'user_id' => 'required|exists:users,id',
        ]);
        Teacher::query()->create($validated);
        return redirect()->route('teachers')->with('success', 'Teacher created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $data = Teacher::query()->findOrFail($id);
            return response()->json($data);
        } catch (ModelNotFoundException $e) {
            return redirect()->route('teachers.index')->with('error', 'Teacher not found');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'personal_number' => 'required|string|unique:teachers',
            'name' => 'required|string',
            'user_id' => 'required|exists:users,id',
        ]);
        try {
            $data = Teacher::query()->findOrFail($id)->update($validated);
            return redirect()->route('teachers.index')->with('success', 'Teacher created successfully!');
        } catch (ModelNotFoundException $e) {
            return redirect()->route('teachers.index')->with('error', 'Teacher not found');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            Teacher::query()->findOrFail($id)->delete();
            return redirect()->route('teachers.index')->with('success', 'Teacher deleted successfully!');
        } catch (ModelNotFoundException $e) {
            return redirect()->route('teachers.index')->with('error', 'Teacher not found');
        }
    }
}
