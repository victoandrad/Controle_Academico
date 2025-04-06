@extends('layouts.app')

@section('content')
    <div class="main">
        <h1 class="m-4">Teachers</h1>
        <div class="card mx-4">
            <div class="card-body">
                <h5 class="card-title">Add new Teacher</h5>
                <form method="POST" action="{{ route('teachers.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <label for="personal_number">Personal number</label>
                            <input type="text" id="personal_number" name="personal_number" placeholder="Insert the personal number" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" placeholder="Insert the name" class="form-control">
                        </div>
                        <div class="col-md-4 d-flex align-items-end">
                            <button type="submit" class="btn btn-primary w-100">Confirm</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="card mx-4">
            <div class="card-body">
                <h5 class="card-title">List of Teachers</h5>
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Personal number</th>
                        <th>Name</th>
                        <th>Entry Date</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($teachers as $teacher)

                            <tr>
                                <td>{{$teacher->id}}</td>
                                <td>{{$teacher->formatted_personal_number}}</td>
                                <td>{{$teacher->name}}</td>
                                <td>{{$teacher->created_at->format('d/m/Y')}}</td>
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
