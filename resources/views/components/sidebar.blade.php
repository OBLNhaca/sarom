<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-heartbeat"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Sarom</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Painel de Controle</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">Gestão</div>

    <!-- Nav Item - Clientes -->
    <li class="nav-item {{ request()->routeIs('clientes.*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('consultas.index') }}">
            <i class="fas fa-stethoscope"></i>
            <span>Consultas</span>
        </a>
    </li>

    <li class="nav-item {{ request()->routeIs('clientes.*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('funcionarios.index') }}">
            <i class="fas fa-users"></i>
            <span>Funcionários</span>
        </a>
    </li>
    <!-- Nav Item - Relatórios -->
    {{-- <li class="nav-item {{ request()->routeIs('relatorios.*') ? 'active' : '' }}">
        <a class="nav-link" href="">
            <i class="fas fa-fw fa-file-alt"></i>
            <span>Relatórios</span>
        </a>
    </li> --}}

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">Configurações</div>

    <!-- Nav Item - Usuários -->
    <li class="nav-item {{ request()->routeIs('usuarios.*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('utilizadores.index') }}">
            <i class="fas fa-fw fa-users-cog"></i>
            <span>Utilizadores</span>
        </a>
    </li>

    <!-- Nav Item - Sair -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('logout') }}"
           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Sair</span>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
