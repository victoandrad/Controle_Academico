@extends('layouts.app')

@section('content')
    <x-sidebar expand="true" />
    <div class="main">
        <h1 class="mx-4">Student Groups</h1>
        <div class="card mx-4">

            <div class="card-body">
                <h5 class="card-title">Add new Student Group</h5>

                <div class="row">
                    <!-- Input Name -->
                    <div class="col-md-3">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" placeholder="Insert the name" class="form-control mb-3">
                    </div>

                    <!-- Dropdown School Year -->
                    <div class="col-md-3">
                        <label for="school_year">Year</label>
                        <select id="school_year" name="school_year" class="form-control mb-3">
                            <option value="">Year</option>
                            <option value="1">1º Year</option>
                            <option value="2">2º Year</option>
                            <option value="3">3º Year</option>
                            <option value="4">4º Year</option>
                        </select>
                    </div>

                    <!-- Dropdown Period -->
                    <div class="col-md-3">
                        <label for="period">Period</label>
                        <select id="period" name="period" class="form-control mb-3">
                            <option value="">Period</option>
                            <option value="morning">Morning</option>
                            <option value="afternoon">Afternoon</option>
                            <option value="evening">Evening</option>
                        </select>
                    </div>

                </div>

                <button type="submit" class="btn btn-primary mt-3">Confirm</button>
            </div>
        </div>

        <div class="card mx-4">
            <div class="card-body">
                <h5 class="card-title">List of Student Groups</h5>
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Creation Date</th>
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
