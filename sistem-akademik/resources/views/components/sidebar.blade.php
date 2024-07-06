<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="{{ asset('assets/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">STTNF</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('assets/dist/img/sttnf.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          @auth
          @if (Auth::check())
          <a href="{{ route('profile.edit')}}" class="d-block">Sistem Akademik
           
          </a>
          <span class="text-primary">Role: {{Auth::user()->role}}</span>
        </div>
        @endif
        @endauth
        @guest
           <a href="#" class="d-block">Guest</a> 
        @endguest
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
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Pilihan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/dashboard" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard</p>
                </a>
              </li>
              @auth
              <li class="nav-item">
                <a href="dashboard/mahasiswa" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Mahasiswa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="dashboard/dosen" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dosen</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="dashboard/prodi" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Prodi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="dashboard/rombel" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Rombongan Belajar</p>
                </a>
              </li>
              @endauth
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>