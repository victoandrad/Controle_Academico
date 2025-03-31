@extends('layouts.app')

@section('content')
    <x-sidebar expand="true" />
    <div class="main">
        <h1 class="mx-4">Bem-vindo à cadastro professor</h1>
        <div class="card mx-4">
            <div class="card-body">
                <h5 class="card-title">Cadastrar Professor</h5>
                <label for="nomeAluno">Nome:</label>
                <input type="text" id="nomeAluno" name="nomeAluno" placeholder="Insira nome do Aluno" class="form-control mb-3">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>
        </div>
        <div class="card mx-4">
            <div class="card-body">
                <h5 class="card-title">Professores cadastrados</h5>
                <!-- Tabela de Professores -->
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>ID Professor</th>
                            <th>Nome Professor</th>
                            <th>Data Ingresso</th>
                            <th>Saída</th>
                            <th>Editar</th>
                            <th>Excluir</th>
                        </tr>
                    </thead>
                    <tbody>
                      <!-- Dados dos professores aqui -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection