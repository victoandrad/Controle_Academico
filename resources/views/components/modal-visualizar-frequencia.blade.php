<!-- Modal de Visualização de Frequência -->
<div class="modal fade" id="modalVisualizarFrequencia" tabindex="-1" aria-labelledby="modalVisualizarFrequenciaLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalVisualizarFrequenciaLabel">Visualizar Frequência</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>Data</th>
                        <th>Descrição</th>
                        <th>Matéria</th>
                        <th>Editar</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($frequencias as $frequencia)
                    <tr>
                        <td>{{ $frequencia->data }}</td>
                        <td>{{ $frequencia->descricao }}</td>
                        <td>{{ $frequencia->materia }}</td>
                        <td>
                            <!-- Botão para abrir o modal de edição -->
                            <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalEditarFrequencia{{ $frequencia->id }}">
                                Editar
                            </button>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
