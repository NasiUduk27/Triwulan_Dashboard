<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="https://cdn1.iconfinder.com/data/icons/camping-65/500/compass-512.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Twelve Outdoor</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f0/Keshet12_2018.svg/800px-Keshet12_2018.svg.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Kelompok 12</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
              <a href="{{ url('/') }}" class="nav-link {{ request()->is('/') ? 'active' : '' }}" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
              </a>
          </li>

          <li class="nav-item">
              <a href="{{ url('/anggotakelompok') }}" class="nav-link {{ request()->is('/') ? 'active' : '' }}" class="nav-link">
                <i class="nav-icon fas fa-user"></i>
                <p>
                  Pengaturan
                </p>
              </a>
          </li>

          <li class="nav-item">
            <a href="{{ url('/pendaki') }}" class="nav-link {{ request()->is('/') ? 'active' : '' }}" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Data Pendaki
              </p>
            </a>
        </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Data Barang
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/datatenda') }}" class="nav-link {{ request()->is('/') ? 'active' : '' }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tenda</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/sb') }}" class="nav-link {{ request()->is('/') ? 'active' : '' }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sleeping Bag</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/jaket') }}" class="nav-link {{ request()->is('/') ? 'active' : '' }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Jaket</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/sepatu') }}" class="nav-link {{ request()->is('/') ? 'active' : '' }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sepatu Track</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/others') }}" class="nav-link {{ request()->is('/') ? 'active' : '' }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Barang Lainnya</p>
                </a>
              </li>

           
                
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>