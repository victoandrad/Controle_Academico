@extends('layouts.app')

@section('title', 'Frequencies')

@section('content')
    <div class="main">
        <h1 class="m-4">Frequencies</h1>
        <div class="card mx-4">
            <div class="card-body">
                <h5 class="card-title fw-bold">Register</h5>
                <form action="{{route('frequencies.store')}}" method="POST">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="lesson" class="form-label">Lesson</label>
                            <select class="form-select" id="lesson" name="lesson_id" required>
                                <option selected>Select</option>
                                @foreach($lessons as $lesson)
                                    <option value="{{$lesson->id}}">{{$lesson->curriculumUnit->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="data" class="form-label">Date</label>
                            <input type="date" class="form-control" id="data" name="frequency_date" required>
                        </div>
                    </div>

                    <table class="table table-bordered">
                        <thead class="table-light">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Present</th>
                                <th>Absent</th>
                                <th>Excused</th>
                            </tr>
                        </thead>
                        <tbody id="register-body">

                        </tbody>
                    </table>
                    <div>
                        <button type="submit" class="btn btn-primary w-100">Confirm</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="card mx-4">
            <div class="card-body">
                <h5 class="card-title fw-bold">Latest Frequencies</h5>
                <form action="{{route('frequencies.index')}}" method="POST">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="lesson2" class="form-label">Lesson</label>
                            <select class="form-select" id="lesson2" name="lesson_id">
                                <option selected>Select</option>
                                @foreach($lessons as $lesson)
                                    <option value="{{$lesson->id}}">{{$lesson->curriculumUnit->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 d-flex align-items-end">
                            <button type="submit" class="btn btn-primary w-100">Confirm</button>
                        </div>
                    </div>
                </form>
                <table class="table table-bordered">
                    <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Was Attended?</th>
                        <th>Date</th>
                    </tr>
                    </thead>
                    <tbody id="view-body">

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const lessonSelect = document.getElementById('lesson');
            const tableBody = document.getElementById('register-body');

            lessonSelect.addEventListener('change', function () {
                const lessonId = this.value;

                if (lessonId && lessonId !== 'Select') {
                    fetch(`/lessons/${lessonId}/students`)
                        .then(response => {
                            if (!response.ok) throw new Error('Error while fetch students.');
                            return response.json();
                        })
                        .then(students => {
                            tableBody.innerHTML = '';
                            students.forEach(student => {
                                const row = document.createElement('tr');

                                row.innerHTML = `
                                <td>${student.id}</td>
                                <td>${student.user.name}</td>
                                <td><input class="form-check-input" type="radio" name="student_${student.id}" value="present" required></td>
                                <td><input class="form-check-input" type="radio" name="student_${student.id}" value="absent" required></td>
                                <td><input class="form-check-input" type="checkbox" name="student_${student.id}_excused"></td>
                                `;

                                tableBody.appendChild(row);
                            });
                        })
                        .catch(error => {
                            alert('Error: ' + error.message);
                        });
                } else {
                    tableBody.innerHTML = '';
                }
            });

            const lessonSelect2 = document.getElementById('lesson2')
            const tableBody2 = document.getElementById('view-body')

            lessonSelect2.addEventListener('change', function() {
                const lessonId = this.value;

                if (lessonId && lessonId !== 'Select') {
                    fetch(`/lessons/${lessonId}/frequencies`)
                        .then(response => {
                            if (!response.ok) throw new Error('Error while fetching users.')
                            return response.json();
                        })
                        .then(frequencies => {
                            tableBody2.innerHTML = '';
                            frequencies.forEach(frequency => {
                                const row = document.createElement('tr');

                                const attendedText = frequency.attended
                                    ? '<span class="text-success fw bold">Yes</span>'
                                    : '<span class="text-danger fw bold">Não</span>'

                                const formateedDate = new Date(frequency.date).toLocaleDateString('pt-BR');

                                row.innerHTML = `
                                    <td>${frequency.id}</td>
                                    <td>${frequency.student.user.name}</td>
                                    <td>${attendedText}</td>
                                    <td>${formateedDate}</td>
                                `

                                tableBody2.appendChild(row);
                            });
                        })
                        .catch(error => {
                            alert('Error: ' + error.message)
                        })
                } else {
                    tableBody2.innerHTML = '';
                }
            })
        });
    </script>
@endpush
