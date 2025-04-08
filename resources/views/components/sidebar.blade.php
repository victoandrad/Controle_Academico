@props(['expand' => false])

<div class="wrapper">
    <aside id="sidebar" class="{{ $expand ? 'expand' : '' }}">
        <div class="d-flex">
            <button class="toggle-btn" type="button" onclick="toggleSidebar()">
                <i class="lni lni-grid-alt"></i>
            </button>
            <div class="sidebar-logo">
                <a href="#">Hello, Student!</a>
            </div>
        </div>
        <ul class="sidebar-nav">
            <li class="sidebar-item">
                <a href="" class="sidebar-link d-flex align-items-center">
                    <i class="lni lni-home-2"></i>
                    <span>Home</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="{{route('tasks.index')}}" class="sidebar-link d-flex align-items-center">
                    <i class="lni lni-books-2"></i>
                    <span>Tasks</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="{{route('frequencies.index')}}" class="sidebar-link d-flex align-items-center">
                    <i class="lni lni-agenda"></i>
                    <span>Frequency</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="" class="sidebar-link d-flex align-items-center">
                    <i class="lni lni-graduation-cap-1"></i>
                    <span>Performance</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="#" class="sidebar-link collapsed d-flex align-items-center" data-bs-toggle="collapse" data-bs-target="#auth" aria-expanded="false" aria-controls="auth">
                    <i class="lni lni-pencil-1"></i>
                    <span>Register</span>
                </a>
                <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                    <li class="sidebar-item">
                        <a href="{{route('studentGroups.index')}}" class="sidebar-link">Student Group</a>
                    </li>
                    <li class="sidebar-item">
                        <a href="{{route('students.index')}}" class="sidebar-link">Student</a>
                    </li>
                    <li class="sidebar-item">
                        <a href="{{route('teachers.index')}}" class="sidebar-link">Teacher</a>
                    </li>
                </ul>
            </li>
        </ul>
        <div class="sidebar-footer">
            <a href="#" class="sidebar-link"><i class="lni lni-exit"></i><span>Log-out</span></a>
        </div>
    </aside>
</div>
