{{-- REGISTER TASK --}}
<div class="card mx-4">
    <div class="card-body">
        <h5 class="card-title fw-bold">Register</h5>
        <form action="{{route('tasks.store')}}" method="POST">
            @csrf
            <div class="row mb-3 gy-3">
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
                <div class="col-md-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                </div>
                <div class="col-md-5">
                    <label for="description" class="form-label">Description</label>
                    <input type="text" class="form-control" id="description" name="description" placeholder="Description" required>
                </div>
                <div class="col-md-3">
                    <label for="value" class="form-label">Value</label>
                    <input type="text" class="form-control" id="value" name="value" placeholder="Value" required>
                </div>
                <div class="col-md-3 d-flex align-items-end">
                    <button type="submit" class="btn btn-primary w-100">Confirm</button>
                </div>
            </div>
        </form>
    </div>
</div>
