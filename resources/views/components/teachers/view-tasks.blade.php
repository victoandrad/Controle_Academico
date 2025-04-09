{{-- VIEW TASKS --}}
<div class="card mx-4">
    <div class="card-body">
        <h5 class="card-title fw-bold">View</h5>
        <div class="row mb-3">
            <div class="col-md-12">
                <label for="lesson-select" class="form-label">Lesson</label>
                <select class="form-select" id="lesson-select" name="lesson_id" required>
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
                <th>Description</th>
                <th>Value</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody id="view-tasks-table-body">

            </tbody>
        </table>
    </div>
</div>

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const select = document.getElementById('lesson-select')
            const table = document.getElementById('view-tasks-table-body');

            select.addEventListener("change", function() {
                const lessonId = this.value;
                if (lessonId && lessonId !== "Select") {
                    fetch(`/lessons/${lessonId}/tasks`)
                        .then(response => {
                            if (!response.ok) throw new Error('Error while fetching.')
                            return response.json();
                        })
                        .then(tasks => {
                            table.innerHTML = "";
                            tasks.forEach(task => {
                                const row = document.createElement('tr');
                                row.innerHTML = `
                                    <td>${task.id}</td>
                                    <td>${task.name}</td>
                                    <td>${task.description}</td>
                                    <td>${task.value}</td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-warning">Edit</button>
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </td>
                                `;
                                table.appendChild(row);
                            });
                        });
                } else {
                    table.innerHTML = "";
                }
            });
        })
    </script>
@endpush
