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

Route::resource('curriculumUnits', CurriculumUnitController::class)->names([
    'index' => 'curriculumUnits.index',
    'store' => 'curriculumUnits.store',
    'show' => 'curriculumUnits.show',
    'update' => 'curriculumUnits.update',
    'destroy' => 'curriculumUnits.destroy',
]);
Route::resource('frequencies', FrequencyController::class)->names([
    'index' => 'frequencies.index',
    'store' => 'frequencies.store',
    'show' => 'frequencies.show',
    'update' => 'frequencies.update',
    'destroy' => 'frequencies.destroy',
]);
Route::resource('lessons', LessonController::class)->names([
    'index' => 'lessons.index',
    'store' => 'lessons.store',
    'show' => 'lessons.show',
    'update' => 'lessons.update',
    'destroy' => 'lessons.destroy',
]);
Route::resource('rooms', RoomController::class)->names([
    'index' => 'rooms.index',
    'store' => 'rooms.store',
    'show' => 'rooms.show',
    'update' => 'rooms.update',
    'destroy' => 'rooms.destroy',
]);
Route::resource('students', StudentController::class)->names([
    'index' => 'students.index',
    'store' => 'students.store',
    'show' => 'students.show',
    'update' => 'students.update',
    'destroy' => 'students.destroy',
]);
Route::resource('studentGroups', StudentGroupController::class)->names([
    'index' => 'studentGroups.index',
    'store' => 'studentGroups.store',
    'show' => 'studentGroups.show',
    'update' => 'studentGroups.update',
    'destroy' => 'studentGroups.destroy',
]);
Route::resource('tasks', TaskController::class)->names([
    'index' => 'tasks.index',
    'store' => 'tasks.store',
    'show' => 'tasks.show',
    'update' => 'tasks.update',
    'destroy' => 'tasks.destroy',
]);
Route::resource('teachers', TeacherController::class)->names([
    'index' => 'teachers.index',
    'store' => 'teachers.store',
    'show' => 'teachers.show',
    'update' => 'teachers.update',
    'destroy' => 'teachers.destroy',
]);
Route::resource('timeslots', TimeslotController::class)->names([
    'index' => 'timeslots.index',
    'store' => 'timeslots.store',
    'show' => 'timeslots.show',
    'update' => 'timeslots.update',
    'destroy' => 'timeslots.destroy',
]);
Route::resource('users', UserController::class)->names([
    'index' => 'users.index',
    'store' => 'users.store',
    'show' => 'users.show',
    'update' => 'users.update',
    'destroy' => 'users.destroy',
]);
