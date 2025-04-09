{{-- LATEST FREQUENCIES --}}
<div class="card mx-4">
    <div class="card-body">
        <h5 class="card-title fw-bold">Latest Frequencies</h5>
        <form action="{{route('frequencies.index')}}" method="POST">
            @csrf
            <div class="row mb-3">
                <div class="col-md-8">
                    <label for="latest-frequencies-select" class="form-label">Lesson</label>
                    <select class="form-select" id="latest-frequencies-select" name="lesson_id">
                        <option selected>Select</option>
                        @foreach($lessons as $lesson)
                            <option value="{{$lesson->id}}">{{$lesson->curriculumUnit->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-4 d-flex align-items-end">
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
                <th>Attended?</th>
                <th>Date</th>
            </tr>
            </thead>
            <tbody id="latest-frequencies-table-body">

            </tbody>
        </table>
    </div>
</div>

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const latestFrequenciesSelect = document.getElementById('latest-frequencies-select')
            const latestFrequenciesTableBody = document.getElementById('latest-frequencies-table-body')
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
                                const attendedText = frequency.attended ? '<span class="text-success fw bold">Yes</span>' : '<span class="text-danger fw bold">No</span>'
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
