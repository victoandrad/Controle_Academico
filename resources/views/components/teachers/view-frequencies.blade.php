{{-- VIEW FREQUENCIES --}}
<div class="card mx-4">
    <div class="card-body">
        <h5 class="card-title fw-bold">View</h5>
        <div class="row mb-3">
            <div class="col-md-4">
                <label for="latest-frequencies-select" class="form-label">Lesson</label>
                <select class="form-select" id="lesson-select" name="lesson_id">
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
        </div>

        <table class="table table-bordered">
                <thead class="table-light">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Attended?</th>
                    <th>Excused?</th>
                    <th>Date</th>
                </tr>
                </thead>
                <tbody id="view-frequencies-table-body">

                </tbody>
            </table>
    </div>
</div>

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const select = document.getElementById('lesson-select')
            const table = document.getElementById('view-frequencies-table-body')
            select.addEventListener('change', function() {
                const lessonId = this.value;
                if (lessonId && lessonId !== 'Select') {
                    fetch(`/lessons/${lessonId}/frequencies`)
                        .then(response => {
                            if (!response.ok) throw new Error('Error while fetching.')
                            return response.json();
                        })
                        .then(frequencies => {
                            table.innerHTML = '';
                            frequencies.forEach(frequency => {
                                const row = document.createElement('tr');
                                const attendedText = frequency.attended ? '<span class="badge bg-success">Present</span>' : '<span class="badge bg-danger">Absent</span>'
                                const excusedText = frequency.excused ? '<span class="badge bg-success">Yes</span>' : '<span class="badge bg-danger">No</span>'
                                const formattedDate = new Date(frequency.date).toLocaleDateString('pt-BR');
                                row.innerHTML = `
                                    <td>${frequency.id}</td>
                                    <td>${frequency.student.user.name}</td>
                                    <td>${attendedText}</td>
                                    <td>${excusedText}</td>
                                    <td>${formattedDate}</td>
                                `;
                                table.appendChild(row);
                            });
                        })
                        .catch(error => {
                            alert('Error: ' + error.message)
                        })
                } else {
                    table.innerHTML = '';
                }
            });
        });
    </script>
@endpush
