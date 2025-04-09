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
                            <option value="{{$lesson->id}}">
                                [{{$lesson->timeslot->day_of_week}},
                                {{$lesson->timeslot->start_time}}]
                                {{$lesson->curriculumUnit->name}}
                            </option>
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
                    <th>Attended?</th>
                    <th>Excused?</th>
                </tr>
                </thead>
                <tbody id="register-form-table-body">

                </tbody>
            </table>
        </form>
    </div>
</div>

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const registerFormSelect = document.getElementById('register-form-select');
            const registerFormTableBody = document.getElementById('register-form-table-body');
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
                                    <td>
                                        <input type="hidden" name="student_${student.id}" value="0">
                                        <input class="form-check-input" type="checkbox" name="student_${student.id}" value="1">
                                    </td>
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
        });
    </script>
@endpush
