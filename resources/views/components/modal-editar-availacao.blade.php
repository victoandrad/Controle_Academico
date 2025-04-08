<div class="modal fade" id="modalEditar{{ $avaliacao->id }}" tabindex="-1" aria-labelledby="modalEditarLabel{{ $avaliacao->id }}" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalEditarLabel{{ $avaliacao->id }}">Editar Avaliação</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="bim{{ $avaliacao->id }}" class="form-label">BIM</label>
                        <input type="text" class="form-control" id="bim{{ $avaliacao->id }}" value="{{ $avaliacao->bim }}">
                    </div>
                    <div class="mb-3">
                        <label for="tipo_avaliacao{{ $avaliacao->id }}" class="form-label">Tipo de Avaliação</label>
                        <select class="form-select" id="tipo_avaliacao{{ $avaliacao->id }}">
                            <option value="trabalho" {{ $avaliacao->tipo_avaliacao == 'trabalho' ? 'selected' : '' }}>Trabalho</option>
                            <option value="prova" {{ $avaliacao->tipo_avaliacao == 'prova' ? 'selected' : '' }}>Prova</option>
                            <option value="participacao" {{ $avaliacao->tipo_avaliacao == 'participacao' ? 'selected' : '' }}>Participação</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="valor{{ $avaliacao->id }}" class="form-label">Valor</label>
                        <input type="number" class="form-control" id="valor{{ $avaliacao->id }}" value="{{ $avaliacao->valor }}">
                    </div>
                    <div class="mb-3">
                        <label for="data{{ $avaliacao->id }}" class="form-label">Data</label>
                        <input type="date" class="form-control" id="data{{ $avaliacao->id }}" value="{{ $avaliacao->data }}">
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button class="btn btn-primary" type="submit">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
