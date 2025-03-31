@extends('layouts.app')

@section('content')
    <x-sidebar expand="true" />
    <div class="main">
        <h1>Bem-vindo à página de Desempenho</h1>
        
        <div class="card mx-4">
            <div class="card-body">
                <div class="card-title">
                    <h5>Informe os dados do Aluno</h5>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="matricula" class="form-label">Matrícula</label>
                        <input type="number" class="form-control" id="matricula" placeholder="Informe a Matrícula">
                    </div>
                    <div class="col-md-6">
                        <label for="nomeAluno" class="form-label">Nome Aluno</label>
                        <input type="text" class="form-control" id="nomeAluno" placeholder="Nome do Aluno">
                    </div>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end" style="padding: 5px">
                    <button class="btn btn-primary" type="button">Enviar</button>
                </div>
            </div>
        </div>
        
        <div class="card mx-4">
            <div class="card-body">
                <div class="card-title">
                    <h4>Previsão de rendimento com base nas notas do Aluno</h4>
                </div>
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Matéria</th>
                            <th>B1</th>
                            <th>B2</th>
                            <th>B3</th>
                            <th>B4</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Dados dos alunos aqui -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection