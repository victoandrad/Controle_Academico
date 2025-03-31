@extends('layouts.app')

@section('content')
    <x-sidebar expand="true" />

    <div class="main">
        <h1 class="mx-4">Bem-vindo à página inicial</h1>
        <div class="card mx-4">
            <div class="card-body">
                <h5 class="card-title">Todas as turmas cadastradas</h5>
                <table class="table table-striped table-bordered table-layout-fixed">
                    <thead>
                        <tr>
                            <th>ID Turma</th>
                            <th>Informações</th>
                            <th>Registrar Frequência</th>
                            <th>Visualizar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Informações da turma 1</td>
                            <td>
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalRegistrarFrequencia">
                                    Registrar Frequência
                                </button>
                            </td>
                            <td>
                                <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#modalVisualizarFrequencia">
                                    Visualizar Frequência
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <x-modal-registrar-frequencia :alunos="[['id' => 1, 'nome' => 'Aluno 1'], ['id' => 2, 'nome' => 'Aluno 2']]" />

    <!-- Incluindo o componente modal e passando a variável $frequencias -->
    <x-modal-visualizar-frequencia :frequencias="[
        ['id' => 1, 'nome' => 'Aluno 1', 'data' => '2025-03-28', 'descricao' => 'Atividade de Matemática', 'status' => 'Presente'],
        ['id' => 2, 'nome' => 'Aluno 2', 'data' => '2025-03-28', 'descricao' => 'Atividade de Português', 'status' => 'Ausente']
    ]" />
@endsection
