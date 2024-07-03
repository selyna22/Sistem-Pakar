<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3"> Sistem Pakar </div>
        </a>
        <!-- Divider -->
        <hr class="sidebar-divider">

        @if ($dataLogin->role == 'Admin')
            <!-- Heading -->
            <div class="sidebar-heading">
                ADMIN
            </div>

            <!-- Nav Item - Data Makanan -->
            <li class="nav-item">
                <a class="nav-link" href="{{ url('datamakanan') }}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Data Makanan</span></a>
            </li>

            <!-- Nav Item - Data Penyakit -->
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/datapenyakit') }}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Data Penyakit</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ url('/datakeyakinan') }}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Data Keyakinan</span></a>
            </li>
        @endif

        @if ($dataLogin->role == 'Pengguna')
            <div class="container my-0">
                <div class="sidebar-heading bg-green text-white shadow p-3 mb-0 rounded ">
                    USER
                </div>
            </div>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="{{ url('konsultasi') }}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Konsultasi</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="{{ url('riwayat') }}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Riwayat Konsultasi</span></a>
            </li>
        @endif

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <li class="nav-item">
            <a class="nav-link" href="{{ url('Logout') }}">
                <i class="fas fa-fw fa-table"></i>
                <span>Logout</span></a>
        </li>

        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->
