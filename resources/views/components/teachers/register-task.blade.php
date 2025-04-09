{{-- REGISTER TASK --}}
<div class="card mx-4">
    <div class="card-body">
        <h5 class="card-title fw-bold">Register</h5>
        <form action="{{route('tasks.store')}}" method="POST">
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
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="col-md-4">
                    <label for="description" class="form-label">Description</label>
                    <input type="text" class="form-control" id="description" name="description" required>
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
