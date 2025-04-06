@if(session('success') || session('error'))
    <div class="toast-container position-fixed top-0 end-0 p-3" style="z-index: 1055;">
        <div class="toast align-items-center text-white {{ session('success') ? 'bg-success' : 'bg-danger' }} border-0"
             role="alert" aria-live="assertive" aria-atomic="true" id="toastMessage">
            <div class="d-flex">
                <div class="toast-body">
                    {{ session('success') ?? session('error') }}
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
            </div>
        </div>
    </div>
@endif

@foreach ($errors->all() as $error)
    <div class="toast-container position-fixed top-0 end-0 p-3" style="z-index: 1055;">
        <div class="toast align-items-center text-white bg-danger border-0"
             role="alert" aria-live="assertive" aria-atomic="true" id="toastError{{ $loop->index }}">
            <div class="d-flex">
                <div class="toast-body">
                    {{ $error }}
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
            </div>
        </div>
    </div>
@endforeach
