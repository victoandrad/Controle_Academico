<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\StudentGroup;
use App\Models\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        $studentGroups = StudentGroup::all();
        $users = User::all();
        return view('students', compact('students', 'studentGroups', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'registration_number' => 'required|string|max:255|unique:students,registration_number',
            'student_group_id' => 'required|exists:student_groups,id',
        ]);

        $user = User::query()->create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ]);

        $validated['user_id'] = $user->id;

        Student::query()->create($validated);
        return redirect()->route('students.index')->with('success', 'Student created successfully!');
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
            return redirect()->route('students.index')->with('error', 'Student not found');
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
            Student::query()->findOrFail($id)->update($validated);
            return redirect()->route('students.index')->with('success', 'Student updated successfully!');
        } catch (ModelNotFoundException $e) {
            return redirect()->route('students.index')->with('error', 'Student not found');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            Student::query()->findOrFail($id)->delete();
            return redirect()->route('students.index')->with('success', 'Student deleted successfully!');
        } catch (ModelNotFoundException $e) {
            return redirect()->route('students.index')->with('error', 'Student not found');
        }
    }
}
