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
                        <th>Registrar Nota</th>
                        <th>Visualizar</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Informações da turma 1</td>
                        <td>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalRegistrarNota">
                                Registrar Nota
                            </button>
                        </td>
                        <td>
                            <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#modalVisualizarNota">
                                Visualizar
                            </button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

{{--    <!-- Incluindo o componente modal e passando a variável $alunos -->--}}
{{--    <x-modal-registrar-nota :alunos="[['id' => 1, 'nome' => 'Aluno 1'], ['id' => 2, 'nome' => 'Aluno 2']]" />--}}

{{--    <x-modal-visualizar-nota :avaliacoes="[--}}
{{--        (object) ['bim' => '1', 'tipo_avaliacao' => 'Trabalho', 'valor' => 10, 'data' => '2025-03-29'],--}}
{{--        (object) ['bim' => '2', 'tipo_avaliacao' => 'Prova', 'valor' => 20, 'data' => '2025-04-01'],--}}
{{--        (object) ['bim' => '3', 'tipo_avaliacao' => 'Participação', 'valor' => 5, 'data' => '2025-04-05'],--}}
{{--    ]" />--}}

{{--    @php--}}
{{--        $avaliacao = (object) [--}}
{{--            'bim' => '1',--}}
{{--            'tipo_avaliacao' => 'Trabalho',--}}
{{--            'valor' => 10,--}}
{{--            'data' => '2025-03-29'--}}
{{--        ];--}}
{{--    @endphp--}}

{{--    <x-modal-editar-avaliacao :avaliacao="$avaliacao" />--}}
@endsection
