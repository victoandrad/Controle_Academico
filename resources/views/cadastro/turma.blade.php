@extends('layouts.app')

@section('content')
    <x-sidebar expand="true" />
    <div class="main">
        <h1>Bem-vindo à cadastro turma</h1>
        <div class="card mx-4">
            <div class="card-body">
                <h5 class="card-title">Cadastrar Turma</h5>

                <div class="row">
                    <!-- Input Nome -->
                    <div class="col-md-3">
                        <label for="nomeAluno">Nome Turma:</label>
                        <input type="text" id="nomeAluno" name="nomeAluno" placeholder="Nome" class="form-control mb-3">
                    </div>

                    <!-- Dropdown Ano Escolar -->
                    <div class="col-md-3">
                        <label for="anoEscolar">Ano:</label>
                        <select id="anoEscolar" name="anoEscolar" class="form-control mb-3">
                            <option value="">Ano</option>
                            <option value="1">1º Ano</option>
                            <option value="2">2º Ano</option>
                            <option value="3">3º Ano</option>
                            <option value="4">4º Ano</option>
                        </select>
                    </div>

                    <!-- Dropdown Período -->
                    <div class="col-md-3">
                        <label for="periodo">Período:</label>
                        <select id="periodo" name="periodo" class="form-control mb-3">
                            <option value="">Período</option>
                            <option value="matutino">Matutino</option>
                            <option value="vespertino">Vespertino</option>
                            <option value="noturno">Noturno</option>
                        </select>
                    </div>

                    <!-- Input Tamanho -->
                    <div class="col-md-3">
                        <label for="tamanho">Tamanho:</label>
                        <input type="text" id="tamanho" name="tamanho" placeholder="Tamanho" class="form-control mb-3">
                    </div>
                </div>

                <!-- Botão Cadastrar -->
                <button type="submit" class="btn btn-primary mt-3">Cadastrar</button>
            </div>
        </div>

        <div class="card mx-4">
            <div class="card-body">
                <h5 class="card-title">Turmas cadastrados</h5>
                <!-- Tabela de Alunos -->
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>ID Turma</th>
                        <th>Nome</th>
                        <th>Data criação</th>
                        <th>Editar</th>
                        <th>Excluir</th>
                    </tr>
                    </thead>
                    <tbody>
                    <!-- Dados das turmas aqui -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
