@extends('layouts.app')

@section('title', 'Student')

@section('content')
    <x-sidebar expand="true" />
    <div class="main">
        <h1 class="mx-4">Students</h1>
        <div class="card mx-4">

            <div class="card-body">
                <h5 class="card-title">Add new Student</h5>

                <label for="registration_number">Registration number</label>
                <input type="text" id="registration_number" name="registration_number" placeholder="Insert the registration number" class="form-control mb3">

                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Insert the name" class="form-control mb-3">

                <label for="student_group_id">Student group</label>
                <input type="number" id="student_group_id" name="student_group_id" placeholder="Insert the student group id" class="form-control mb3">

                <button type="submit" class="btn btn-primary">Confirm</button>
            </div>

        </div>

        <div class="card mx-4">
            <div class="card-body">
                <h5 class="card-title">List of students</h5>
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Registration number</th>
                        <th>Name</th>
                        <th>Entry Date</th>
                        <th>Exit Date</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
