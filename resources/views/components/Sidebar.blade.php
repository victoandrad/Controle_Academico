<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar com Bootstrap</title>
    <link href="https://cdn.lineicons.com/5.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- Referenciar seu CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <aside id="sidebar" class="{{ $expand ? 'expand' : '' }}">
            <div class="d-flex">
                <button class="toggle-btn" type="button" onclick="toggleSidebar()">
                    <i class="lni lni-grid-alt"></i>
                </button>
                <div class="sidebar-logo">
                    <a href="#">Olá, Aluno</a>
                </div>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-item"><a href="{{ route('home') }}" class="sidebar-link"><i class="lni lni-home-2"></i><span>Home</span></a></li>
                <li class="sidebar-item"><a href="{{ route('notas') }}" class="sidebar-link"><i class="lni lni-books-2"></i><span>Notas</span></a></li>
                <li class="sidebar-item"><a href="{{ route('frequencia') }}" class="sidebar-link"><i class="lni lni-agenda"></i><span>Frequência</span></a></li>
                <li class="sidebar-item"><a href="{{ route('desempenho') }}" class="sidebar-link"><i class="lni lni-graduation-cap-1"></i><span>Desempenho</span></a></li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse"
                        data-bs-target="#auth" aria-expanded="false" aria-controls="auth">
                        <i class="lni lni-pencil-1"></i>
                        <span>Cadastro</span>
                    </a>
                    <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item"><a href="{{ route('cadastro.aluno') }}" class="sidebar-link">Aluno</a></li>
                        <li class="sidebar-item"><a href="{{ route('cadastro.professor') }}" class="sidebar-link">Professor</a></li>
                        <li class="sidebar-item"><a href="{{ route('cadastro.turma') }}" class="sidebar-link">Turma</a></li>
                        <li class="sidebar-item"><a href="{{ route('cadastro.calendario') }}" class="sidebar-link">Calendário Escolar</a></li>
                    </ul>
                </li>
            </ul>
            <div class="sidebar-footer">
                <a href="{{ route('logout') }}" class="sidebar-link"><i class="lni lni-exit"></i><span>Logout</span></a>
            </div>
        </aside>
       
    <script>
        function toggleSidebar() {
            document.getElementById('sidebar').classList.toggle('expand');
        }
    </script>

    <!-- JS do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"></script>

</body>
</html>
