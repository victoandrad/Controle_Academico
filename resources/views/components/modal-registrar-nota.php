<!-- resources/views/components/modal-registrar-nota.blade.php -->

<div class="modal fade" id="modalRegistrarNota" tabindex="-1" aria-labelledby="modalRegistrarNotaLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalRegistrarNotaLabel">Registrar Nota</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-md-9 mb-3">
                            <label for="descricaoNota" class="form-label">Descrição</label>
                            <textarea class="form-control" id="descricaoNota" rows="7" placeholder="Descrição da atividade"></textarea>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="dataAtividade" class="form-label">Data</label>
                            <input type="date" class="form-control" id="dataAtividade">
                            <label for="valorMaximo" class="form-label">Valor Avaliação</label>
                            <input type="number" class="form-control" id="valorMaximo" placeholder="Valor máximo">
                            <label for="avaliacaoTipo" class="form-label">Tipo de Avaliação</label>
                            <select class="form-select" id="avaliacaoTipo">
                                <option value="trabalho">Trabalho</option>
                                <option value="prova">Prova</option>
                                <option value="participacao">Participação</option>
                            </select>
                            <label for="avaliacaoMateria" class="form-label">Materia</label>
                            <select class="form-select" id="avaliacaoMateria">
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
                            <th class="nota-col">Nota</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Loop para exibir os alunos -->
                        @foreach($alunos as $aluno)
                            <tr>
                                <td>{{ $aluno->id }}</td>
                                <td>{{ $aluno->nome }}</td>
                                <td><input type="number" class="form-control w-100" id="notaAluno{{ $aluno->id }}" value="0"></td>
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
