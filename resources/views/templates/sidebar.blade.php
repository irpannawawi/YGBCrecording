  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary accent-orange elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('/dashboard')}}" class="brand-link">
      <img src="{{url('assets')}}/img/logo-transparent.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text">Galuh Buana Chakti</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{url('AdminLTE')}}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
          <small class="text-white">{{strtoupper(Auth::user()->level)}}</small>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{route('dashboard')}}" class="nav-link @yield('nav-menu-dashboard')">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <!-- MENU ADMIN -->
          @if(Auth::user()->level == 'admin')
          <li class="nav-item">
            <a href="#" class="nav-link @yield('nav-menu-droping')">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Peternak
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link @yield('nav-menu-droping')">
              <i class="nav-icon fas fa-arrow-down"></i>
              <p>
                Droping
              </p>
            </a>
          </li>

          
          <li class="nav-item">
            <a href="#" class="nav-link @yield('nav-menu-history')">
              <i class="nav-icon fas fa-share"></i>
              <p>
                Sebaran
              </p>
            </a>
          </li>

          
          <li class="nav-item">
            <a href="#" class="nav-link @yield('nav-menu-recording')">
              <i class="nav-icon fas fa-history"></i>
              <p>
                Pencatatan
              </p>
            </a>
          </li>          
          <li class="nav-item">
            <a href="#" class="nav-link @yield('nav-menu-laporan')">
              <i class="nav-icon fas fa-file"></i>
              <p>
                Laporan
              </p>
            </a>
          </li>

            <li class="nav-header">
                <p>Lain-lain</p>
            </li>   
          <li class="nav-item">
            <a href="{{route('pengguna')}}" class="nav-link @yield('nav-menu-pengguna')">
              <i class="nav-icon fas fa-user-lock"></i>
              <p>
                Pengguna
              </p>
            </a>
          </li>     
          <li class="nav-item">
            <a href="#" class="nav-link @yield('nav-menu-pengaturan')">
              <i class="nav-icon fas fa-cogs"></i>
              <p>
                Pengaturan
              </p>
            </a>
          </li>   
          @endif
          <!-- ./ MENU ADMIN -->
          <li class="nav-item">
            <a href="{{url('/logout')}}" onclick="return confirm('Apakah anda akan keluar dari aplikasi?')" class="nav-link @yield('nav-menu-laporan')">
              <i class="nav-icon fas fa-key"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>