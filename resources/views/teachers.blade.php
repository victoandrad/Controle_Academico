@extends('layouts.app')

@section('content')
    <div class="main">
        <h1 class="m-4">Teachers</h1>
        <div class="card mx-4">
            <div class="card-body">
                <h5 class="card-title fw-bold">Add new Teacher</h5>
                <form method="POST" action="{{ route('teachers.store') }}">
                    @csrf
                    <div class="row gy-3">
                        <div class="col-md-3">
                            <label for="personal_number">Personal number</label>
                            <input type="text" id="personal_number" name="personal_number" placeholder="Personal number" class="form-control mt-1">
                        </div>
                        <div class="col-md-3">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" placeholder="Name" class="form-control mt-1">
                        </div>
                        <div class="col-md-3">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" placeholder="Email" class="form-control mt-1">
                        </div>
                        <div class="col-md-3">
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" placeholder="Password" class="form-control mt-1">
                        </div>
                        <div class="col-md-3 d-flex align-items-end">
                            <button type="submit" class="btn btn-primary w-100">Confirm</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="card mx-4">
            <div class="card-body">
                <h5 class="card-title fw-bold">List of Teachers</h5>
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Personal number</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($teachers as $teacher)
                            <tr>
                                <td>{{$teacher->id}}</td>
                                <td>{{$teacher->personal_number}}</td>
                                <td>{{$teacher->user->name}}</td>
                                <td>{{$teacher->user->email}}</td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-warning">
                                        Edit
                                    </button>
                                    <form action="{{ route('teachers.destroy', $teacher->id) }}" method="POST" class="d-inline">
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
