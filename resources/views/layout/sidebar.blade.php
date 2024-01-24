<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a2/Logo_of_Ministry_of_Communication_and_Information_Technology_of_the_Republic_of_Indonesia.svg/483px-Logo_of_Ministry_of_Communication_and_Information_Technology_of_the_Republic_of_Indonesia.svg.png" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">DISKOMINFO</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ url('/') }}" class="nav-link {{ request()->is('/') ? 'active' : '' }}"
                        class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('/anggotakelompok') }}" class="nav-link {{ request()->is('/') ? 'active' : '' }}"
                        class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Pengaturan
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Master Data
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/datatenda') }}" class="nav-link {{ request()->is('/') ? 'active' : '' }}"
                                class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Program</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/sb') }}" class="nav-link {{ request()->is('/') ? 'active' : '' }}"
                                class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Kegiatan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/master_subkegiatan') }}" class="nav-link {{ request()->is('/') ? 'active' : '' }}"
                                class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Sub Kegiatan</p>
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Indikator
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/indikator_program') }}"
                                class="nav-link {{ request()->is('/') ? 'active' : '' }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Program</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/sb') }}" class="nav-link {{ request()->is('/') ? 'active' : '' }}"
                                class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Kegiatan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/jaket') }}" class="nav-link {{ request()->is('/') ? 'active' : '' }}"
                                class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Kinerja</p>
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="nav-item">
                    <a href="{{ url('/anggotakelompok') }}" class="nav-link {{ request()->is('/') ? 'active' : '' }}"
                        class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Realisasi Anggaran
                        </p>
                    </a>
                </li>

        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
