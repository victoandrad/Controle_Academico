@extends('layouts.app')

@section('content')
    <x-sidebar expand="true"/>

    <div class="main p-3" id="borda">
        <main class="content px-3 py-2">
            <div class="container-fluid">
                <div class="mb-3">
                    <h4>Admin Dashboard</h4>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 d-flex">
                        <div class="card flex-fill border-0 illustration">
                            <div class="card-body p-0 d-flex flex-fill">
                                <div class="row g-0 w-100">
                                    <div class="col-6 p-3 m-1">
                                        <h4>Welcome Back, Admin</h4>
                                        <p class="mb-0">Admin Dashboard, CodzSword</p>
                                    </div>
                                    <div class="col-6 text-end align-self-end">
                                        <img src="image/customer-support.jpg" class="img-fluid illustration-img" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 d-flex">
                        <div class="card flex-fill border-0">
                            <div class="card-body py-4">
                                <h4 class="mb-2">Total de Alunos</h4>
                                <p class="mb-2">number</p>
                                <span class="text-muted">Since Last Month</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 d-flex">
                        <div class="card flex-fill border-0">
                            <div class="card-body py-4">
                                <h4 class="mb-2">Total de Professores</h4>
                                <p class="mb-2">number</p>
                                <span class="text-muted">Since Last Month</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card border-0">
                    <div class="card-header">
                        <h5 class="card-title">Últimos Cadastros</h5>
                    </div>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Data Cadastro</th>
                        </tr>
                        </thead>
                        <tbody>
                        <!-- Dados dos cadastros aqui -->
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
@endsection
