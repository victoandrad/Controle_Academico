<!-- Modal de Visualização -->
<div class="modal fade" id="modalVisualizarNota" tabindex="-1" aria-labelledby="modalVisualizarNotaLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalVisualizarNotaLabel">Visualizar Avaliações</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>BIM</th>
                            <th>Tipo de Avaliação</th>
                            <th>Valor</th>
                            <th>Data</th>
                            <th>Editar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($avaliacoes as $avaliacao)
                            <tr>
                                <td>{{ $avaliacao->bim }}</td>
                                <td>{{ $avaliacao->tipo_avaliacao }}</td>
                                <td>{{ $avaliacao->valor }}</td>
                                <td>{{ $avaliacao->data }}</td>
                                <td>
                                    <!-- Botão para abrir o modal de edição -->
                                    <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalEditar{{ $avaliacao->id }}">
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
