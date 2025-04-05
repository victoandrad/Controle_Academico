@props(['expand' => false])

<div class="wrapper">
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
            <li class="sidebar-item"><a href="#" class="sidebar-link"><i class="lni lni-home-2"></i><span>Home</span></a></li>
            <li class="sidebar-item"><a href="#" class="sidebar-link"><i class="lni lni-books-2"></i><span>Notas</span></a></li>
            <li class="sidebar-item"><a href="#" class="sidebar-link"><i class="lni lni-agenda"></i><span>Frequência</span></a></li>
            <li class="sidebar-item"><a href="#" class="sidebar-link"><i class="lni lni-graduation-cap-1"></i><span>Desempenho</span></a></li>
            <li class="sidebar-item">
                <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse"
                   data-bs-target="#auth" aria-expanded="false" aria-controls="auth">
                    <i class="lni lni-pencil-1"></i>
                    <span>Cadastro</span>
                </a>
                <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a href="#" class="sidebar-link">Aluno</a></li>
                    <li class="sidebar-item"><a href="#" class="sidebar-link">Professor</a></li>
                    <li class="sidebar-item"><a href="#" class="sidebar-link">Turma</a></li>
                    <li class="sidebar-item"><a href="#" class="sidebar-link">Calendário Escolar</a></li>
                </ul>
            </li>
        </ul>
        <div class="sidebar-footer">
            <a href="#" class="sidebar-link"><i class="lni lni-exit"></i><span>Logout</span></a>
        </div>
    </aside>
</div>
