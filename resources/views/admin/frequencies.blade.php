@extends('layouts.app')

@section('title', 'Frequencies | Dashboard')

@section('content')
    <div class="main">
        <h1 class="m-4">Frequencies</h1>

        {{-- REGISTER FORM --}}
        <div class="card mx-4">
            <div class="card-body">
                <h5 class="card-title fw-bold">Register</h5>
                <form action="{{route('frequencies.store')}}" method="POST">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label for="register-form-select" class="form-label">Lesson</label>
                            <select class="form-select" id="register-form-select" name="lesson_id" required>
                                <option selected>Select</option>
                                @foreach($lessons as $lesson)
                                    <option value="{{$lesson->id}}">{{$lesson->curriculumUnit->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="data" class="form-label">Date</label>
                            <input type="date" class="form-control" id="data" name="frequency_date" required>
                        </div>
                        <div class="col-md-4 d-flex align-items-end">
                            <button type="submit" class="btn btn-primary w-100">Confirm</button>
                        </div>
                    </div>

                    {{-- REGISTER FORM TABLE --}}
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
                        <tbody id="register-form-table-body">

                        </tbody>
                    </table>
                </form>
            </div>
        </div>

        {{-- LATEST FREQUENCIES --}}
        <div class="card mx-4">
            <div class="card-body">
                <h5 class="card-title fw-bold">Latest Frequencies</h5>
                <form action="{{route('frequencies.index')}}" method="POST">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="latest-frequencies-select" class="form-label">Lesson</label>
                            <select class="form-select" id="latest-frequencies-select" name="lesson_id">
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

                {{-- LATEST FREQUENCIES TABLE --}}
                <table class="table table-bordered">
                    <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Was Attended?</th>
                        <th>Date</th>
                    </tr>
                    </thead>
                    <tbody id="latest-frequencies-table-body">

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const registerFormSelect = document.getElementById('register-form-select');
            const registerFormTableBody = document.getElementById('register-form-table-body');
            const latestFrequenciesSelect = document.getElementById('latest-frequencies-select')
            const latestFrequenciesTableBody = document.getElementById('latest-frequencies-table-body')

            registerFormSelect.addEventListener('change', function () {
                const lessonId = this.value;
                if (lessonId && lessonId !== 'Select') {
                    fetch(`/lessons/${lessonId}/students`)
                        .then(response => {
                            if (!response.ok) throw new Error('Error while fetch students.');
                            return response.json();
                        })
                        .then(students => {
                            registerFormTableBody.innerHTML = '';
                            students.forEach(student => {
                                const row = document.createElement('tr');
                                row.innerHTML = `
                                    <td>${student.id}</td>
                                    <td>${student.user.name}</td>
                                    <td><input class="form-check-input" type="radio" name="student_${student.id}" value="present" required></td>
                                    <td><input class="form-check-input" type="radio" name="student_${student.id}" value="absent" required></td>
                                    <td><input class="form-check-input" type="checkbox" name="student_${student.id}_excused"></td>
                                `;
                                registerFormTableBody.appendChild(row);
                            });
                        })
                        .catch(error => {
                            alert('Error: ' + error.message);
                        });
                } else {
                    registerFormTableBody.innerHTML = '';
                }
            });

            latestFrequenciesSelect.addEventListener('change', function() {
                const lessonId = this.value;
                if (lessonId && lessonId !== 'Select') {
                    fetch(`/lessons/${lessonId}/frequencies`)
                        .then(response => {
                            if (!response.ok) throw new Error('Error while fetching users.')
                            return response.json();
                        })
                        .then(frequencies => {
                            latestFrequenciesTableBody.innerHTML = '';
                            frequencies.forEach(frequency => {
                                const row = document.createElement('tr');
                                const attendedText = frequency.attended ? '<span class="text-success fw bold">Yes</span>' : '<span class="text-danger fw bold">Não</span>'
                                const formattedDate = new Date(frequency.date).toLocaleDateString('pt-BR');
                                row.innerHTML = `
                                    <td>${frequency.id}</td>
                                    <td>${frequency.student.user.name}</td>
                                    <td>${attendedText}</td>
                                    <td>${formattedDate}</td>
                                `;
                                latestFrequenciesTableBody.appendChild(row);
                            });
                        })
                        .catch(error => {
                            alert('Error: ' + error.message)
                        })
                } else {
                    latestFrequenciesTableBody.innerHTML = '';
                }
            })
        });
    </script>
@endpush
