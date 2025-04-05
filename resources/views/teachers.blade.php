@extends('layouts.app')

@section('content')
    <x-sidebar expand="true" />
    <div class="main">
        <h1 class="mx-4">Teachers</h1>
        <div class="card mx-4">

            <div class="card-body">
                <h5 class="card-title">Add new teacher</h5>

                <label for="personal_number">Personal number</label>
                <input type="text" id="personal_number" name="personal_number" placeholder="Insert the personal number" class="form-control mb-3">

                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Insert the name" class="form-control mb-3">

                <button type="submit" class="btn btn-primary">Confirm</button>
            </div>

        </div>
        <div class="card mx-4">
            <div class="card-body">
                <h5 class="card-title">List of teachers</h5>
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Personal number</th>
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
