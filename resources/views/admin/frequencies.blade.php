@extends('layouts.app')

@section('content')
    <div class="main">
        <h1 class="m-4">Frequencies</h1>
        <div class="card mx-4">
            <div class="card-body">
                <h5 class="card-title fw-bold">Student Groups</h5>
                <table class="table table-striped table-bordered table-layout-fixed">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($studentGroups as $studentGroup)
                            <tr>
                                <td>{{$studentGroup->id}}</td>
                                <td>{{$studentGroup->name}}</td>
                                <td>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalRegister">
                                        Register
                                    </button>
                                    <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#modalView">
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

    <x-modal id="modalView" title="View Frequencies" size="modal-lg">
        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th>Date</th>
                <th>Descrição</th>
                <th>Matéria</th>
                <th>Editar</th>
            </tr>
            </thead>
            <tbody>
            @foreach($frequencies as $frequency)
                <tr>
                    <td>{{ $frequency->created_at }}</td>
                    <td>{{ $frequency }}</td>
                    <td>{{ $frequency }}</td>
                    <td>
                        <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalEditarFrequencia{{ $frequencia->id }}">
                            Editar
                        </button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </x-modal>
@endsection
