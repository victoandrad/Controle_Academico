@extends('layouts.app')

@section('title', 'Student Groups | Dashboard')

@section('content')
    <div class="main">
        <h1 class="m-4">Student Groups</h1>
        <div class="card mx-4">
            <div class="card-body">
                <h5 class="card-title fw-bold">Add new Student Group</h5>
                <form method="POST" action="{{ route('studentGroups.store') }}">
                    @csrf
                    <div class="row">
                        <!-- Input Name -->
                        <div class="col-md-3">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" placeholder="Insert the name" class="form-control mt-1">
                        </div>

                        <!-- Dropdown School Year -->
                        <div class="col-md-3">
                            <label for="school_year">Year</label>
                            <select id="school_year" name="school_year" class="form-control mt-1">
                                <option value="">Insert the year</option>
                                <option value="1">1º Year</option>
                                <option value="2">2º Year</option>
                                <option value="3">3º Year</option>
                                <option value="4">4º Year</option>
                            </select>
                        </div>

                        <!-- Dropdown Period -->
                        <div class="col-md-3">
                            <label for="period">Period</label>
                            <select id="period" name="period" class="form-control mt-1">
                                <option value="">Insert the period</option>
                                <option value="morning">Morning</option>
                                <option value="afternoon">Afternoon</option>
                                <option value="evening">Evening</option>
                            </select>
                        </div>

                        <!-- Botão Confirm -->
                        <div class="col-md-3 d-flex align-items-end">
                            <button type="submit" class="btn btn-primary w-100">Confirm</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="card mx-4">
            <div class="card-body">
                <h5 class="card-title fw-bold">List of Student Groups</h5>
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Size</th>
                        <th>Creation Date</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($studentGroups as $studentGroup)
                            <tr>
                                <td>{{$studentGroup->id}}</td>
                                <td>{{$studentGroup->name}}</td>
                                <td>{{$studentGroup->size()}}</td>
                                <td>{{$studentGroup->created_at->format('d/m/Y')}}</td>
                                <td>
                                    <form action="{{ route('studentGroups.destroy', $studentGroup->id) }}" method="POST" class="d-inline">
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
