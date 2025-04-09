<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CurriculumUnitController;
use App\Http\Controllers\FrequencyController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentGroupController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TimeslotController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {

    // Curriculum Units
    Route::get('/curriculumUnits', [CurriculumUnitController::class, 'index'])->name('curriculumUnits.index');
    Route::post('/curriculumUnits', [CurriculumUnitController::class, 'store'])->name('curriculumUnits.store');
    Route::get('/curriculumUnits/{curriculumUnit}', [CurriculumUnitController::class, 'show'])->name('curriculumUnits.show');
    Route::put('/curriculumUnits/{curriculumUnit}', [CurriculumUnitController::class, 'update'])->name('curriculumUnits.update');
    Route::delete('/curriculumUnits/{curriculumUnit}', [CurriculumUnitController::class, 'destroy'])->name('curriculumUnits.destroy');

    // Frequencies
    Route::get('/frequencies', [FrequencyController::class, 'index'])->name('frequencies.index');
    Route::post('/frequencies', [FrequencyController::class, 'store'])->name('frequencies.store');
    Route::get('/frequencies/{frequency}', [FrequencyController::class, 'show'])->name('frequencies.show');
    Route::put('/frequencies/{frequency}', [FrequencyController::class, 'update'])->name('frequencies.update');
    Route::delete('/frequencies/{frequency}', [FrequencyController::class, 'destroy'])->name('frequencies.destroy');

    // Lessons
    Route::get('/lessons', [LessonController::class, 'index'])->name('lessons.index');
    Route::post('/lessons', [LessonController::class, 'store'])->name('lessons.store');
    Route::get('/lessons/{lesson}', [LessonController::class, 'show'])->name('lessons.show');
    Route::put('/lessons/{lesson}', [LessonController::class, 'update'])->name('lessons.update');
    Route::delete('/lessons/{lesson}', [LessonController::class, 'destroy'])->name('lessons.destroy');
    Route::get('/lessons/{lesson}/students', [LessonController::class, 'getStudents']);
    Route::get('/lessons/{lesson}/tasks', [LessonController::class, 'getTasks']);
    Route::get('/lessons/{lesson}/frequencies', [LessonController::class, 'getFrequencies'])->name('lessons.frequencies');

    // Rooms
    Route::get('/rooms', [RoomController::class, 'index'])->name('rooms.index');
    Route::post('/rooms', [RoomController::class, 'store'])->name('rooms.store');
    Route::get('/rooms/{room}', [RoomController::class, 'show'])->name('rooms.show');
    Route::put('/rooms/{room}', [RoomController::class, 'update'])->name('rooms.update');
    Route::delete('/rooms/{room}', [RoomController::class, 'destroy'])->name('rooms.destroy');

    // Students
    Route::get('/students', [StudentController::class, 'index'])->name('students.index');
    Route::post('/students', [StudentController::class, 'store'])->name('students.store');
    Route::get('/students/{student}', [StudentController::class, 'show'])->name('students.show');
    Route::put('/students/{student}', [StudentController::class, 'update'])->name('students.update');
    Route::delete('/students/{student}', [StudentController::class, 'destroy'])->name('students.destroy');

    // Student Groups
    Route::get('/studentGroups', [StudentGroupController::class, 'index'])->name('studentGroups.index');
    Route::post('/studentGroups', [StudentGroupController::class, 'store'])->name('studentGroups.store');
    Route::get('/studentGroups/{studentGroup}', [StudentGroupController::class, 'show'])->name('studentGroups.show');
    Route::put('/studentGroups/{studentGroup}', [StudentGroupController::class, 'update'])->name('studentGroups.update');
    Route::delete('/studentGroups/{studentGroup}', [StudentGroupController::class, 'destroy'])->name('studentGroups.destroy');

    // Tasks
    Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');
    Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');
    Route::get('/tasks/{task}', [TaskController::class, 'show'])->name('tasks.show');
    Route::put('/tasks/{task}', [TaskController::class, 'update'])->name('tasks.update');
    Route::delete('/tasks/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy');

    // Teachers
    Route::get('/teachers', [TeacherController::class, 'index'])->name('teachers.index');
    Route::post('/teachers', [TeacherController::class, 'store'])->name('teachers.store');
    Route::get('/teachers/{teacher}', [TeacherController::class, 'show'])->name('teachers.show');
    Route::put('/teachers/{teacher}', [TeacherController::class, 'update'])->name('teachers.update');
    Route::delete('/teachers/{teacher}', [TeacherController::class, 'destroy'])->name('teachers.destroy');
    Route::get('/teachers/{teacher}/lessons', [TeacherController::class, 'getLessons']);

    // Timeslots
    Route::get('/timeslots', [TimeslotController::class, 'index'])->name('timeslots.index');
    Route::post('/timeslots', [TimeslotController::class, 'store'])->name('timeslots.store');
    Route::get('/timeslots/{timeslot}', [TimeslotController::class, 'show'])->name('timeslots.show');
    Route::put('/timeslots/{timeslot}', [TimeslotController::class, 'update'])->name('timeslots.update');
    Route::delete('/timeslots/{timeslot}', [TimeslotController::class, 'destroy'])->name('timeslots.destroy');

    // Users
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::post('/users', [UserController::class, 'store'])->name('users.store');
    Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');
    Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
    Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');

    Route::get('/', function() {
        return view('admin.home');
    });

});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
