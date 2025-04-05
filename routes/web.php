<?php

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

Route::resource('curriculumUnits', CurriculumUnitController::class);
Route::resource('frequencies', FrequencyController::class);
Route::resource('lessons', LessonController::class);
Route::resource('rooms', RoomController::class);
Route::resource('students', StudentController::class);
Route::resource('studentGroups', StudentGroupController::class);
Route::resource('tasks', TaskController::class);
Route::resource('teachers', TeacherController::class);
Route::resource('timeslots', TimeslotController::class);
Route::resource('users', UserController::class);

Route::get('/', function() {
    return view('admin.desempenho');
});
