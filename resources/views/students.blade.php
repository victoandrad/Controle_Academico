@extends('layouts.app')

@section('title', 'Student')

@section('content')
    <div class="main">
        <h1 class="m-4">Students</h1>
        <div class="card mx-4">
            <div class="card-body">
                <h5 class="card-title">Add new Student</h5>
                <form method="POST" action="{{ route('students.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-3">
                            <label for="registration_number">Registration number</label>
                            <input type="text" id="registration_number" name="registration_number" placeholder="Insert the registration number" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" placeholder="Insert the name" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <label for="student_group">Student Group</label>
                            <select id="student_group" name="student_group_id" class="form-control">
                                <option value="">Choose the Student Group</option>
                            @foreach($studentGroups as $studentGroup)
                                    <option value="{{$studentGroup->id}}">{{$studentGroup->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-3 d-flex align-items-end">
                            <button type="submit" class="btn btn-primary w-100">Confirm</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="card mx-4">
            <div class="card-body table-responsive">
                <h5 class="card-title">List of Students</h5>
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Registration number</th>
                        <th>Name</th>
                        <th>Student Group Name</th>
                        <th>Entry Date</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($students as $student)
                            <tr>
                                <td>{{$student->id}}</td>
                                <td>{{$student->formatted_registration_number}}</td>
                                <td>{{$student->name}}</td>
                                <td>{{$student->studentGroup->name}}</td>
                                <td>{{$student->created_at->format('d/m/Y')}}</td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-warning">
                                        Edit
                                    </button>

                                    <form action="{{ route('students.destroy', $student->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
