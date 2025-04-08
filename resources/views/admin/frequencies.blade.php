@extends('layouts.app')

@section('title', 'Frequencies')

@section('content')
    <div class="main">
        <h1 class="m-4">Frequencies</h1>
        <div class="card mx-4">
            <div class="card-body">
                <h5 class="card-title fw-bold">Lessons</h5>
                <table class="table table-striped table-bordered table-layout-fixed">
                    <thead>
                        <tr>
                            <th>Curriculum Unit</th>
                            <th>Student Group</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($lessons as $lesson)
                            <tr>
                                <td>{{$lesson->curriculumUnit->name}}</td>
                                <td>{{$lesson->studentGroup->name}}</td>
                                <td>
                                    @php
                                        $studentsNames = $lesson->studentGroup->students->map(function ($student) {
                                            return [
                                                'id' => $student->id,
                                                'name' => $student->user->name ?? 'N/A',
                                            ];
                                        });
                                    @endphp
                                    <button
                                        type="button"
                                        class="btn btn-primary open-modal"
                                        data-bs-toggle="modal"
                                        data-bs-target="#modalRegister"
                                        data-students='@json($studentsNames)'
                                    >
                                        Register
                                    </button>

                                    <button
                                        class="btn btn-info"
                                        data-bs-toggle="modal"
                                        data-bs-target="#modalView"
                                    >
                                        View
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <x-modal id="modalRegister" title="Register Frequencies" size="modal-lg">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Student</th>
                    <th>Attended?</th>
                </tr>
            </thead>
            <tbody id="modal-student-list">

            </tbody>
        </table>
    </x-modal>
@endsection


@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.querySelectorAll('.open-modal').forEach(button => {
                button.addEventListener('click', function () {
                    const students = JSON.parse(this.dataset.students);
                    const tableBody = document.getElementById('modal-student-list');
                    tableBody.innerHTML = '';

                    students.forEach(student => {
                        const row = document.createElement('tr');
                        row.innerHTML = `
                        <td>${student.id}</td>
                        <td>${student.name}</td>
                        <td><input type="checkbox" class="form-check-input" name="attended_${student.id}" id="attended_${student.id}" value="0"></td>
                    `;
                        tableBody.appendChild(row);
                    });
                });
            });
        });
    </script>
@endpush
