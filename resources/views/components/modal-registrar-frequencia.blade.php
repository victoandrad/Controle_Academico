<!-- resources/views/components/modal-registrar-nota.blade.php -->

<div class="modal fade" id="modalRegistrarFrequencia" tabindex="-1" aria-labelledby="modalRegistrarFrequenciaLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalRegistrarFrequenciaLabel">Registrar Frequência</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-md-9 mb-3">
                            <label for="descricaoAtividade" class="form-label">Descrição</label>
                            <textarea class="form-control" id="descricaoAtividade" rows="7" placeholder="Descrição da atividade"></textarea>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="dataAtividade" class="form-label">Data</label>
                            <input type="date" class="form-control" id="dataAtividade">
                            <label for="frequenciaMateria" class="form-label">Materia</label>
                            <select class="form-select" id="frequenciaMateria">
                                <option value="Matemática">Matematica</option>
                                <option value="Portugues">Portugues</option>
                                <!--Materias do banco aqui -->
                            </select>
                        </div>
                    </div>
                </form>
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>Num</th>
                        <th class="aluno-col">Nome</th>
                        <th class="freq-col">Frequência</th>
                    </tr>
                    </thead>
                    <tbody>
                    <!-- Loop para exibir os alunos -->
                    @foreach($alunos as $aluno)
                    <tr>
                        <td>{{ $aluno->id }}</td>
                        <td>{{ $aluno->nome }}</td>
                        <td><input type="number" class="form-control w-100" id="FreqAluno{{ $aluno->id }}" value="0"></td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button class="btn btn-primary" type="button">Enviar</button>
                </div>
            </div>
        </div>
    </div>
</div>
