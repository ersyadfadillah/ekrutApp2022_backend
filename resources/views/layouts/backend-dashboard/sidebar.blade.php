 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      <img src="{{asset('assets/AdminLTE/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">APLIKASI PARKIR</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('assets/AdminLTE/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="/users" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a id="dashboard"  href="/" class="nav-link">
              <i class="nav-icon fas fa-th text-primary"></i>
              <p>
                Dashboard              
              </p>
            </a>           
          </li>
          <li class="nav-item">
            <a id="menu_parkir_masuk" href="/parkir/masuk" class="nav-link">
              <i class="nav-icon far fa-circle text-success"></i>
              <p>
                Parkir Masuk             
              </p>
            </a>
          </li> 
          <li class="nav-item">
            <a id="menu_parkir_keluar" href="/parkir/keluar" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p>
                Parkir Keluar             
              </p>
            </a>
          </li> 
          <li class="nav-item">
            <a id="menu_parkir_monitoring" href="/parkir" class="nav-link">
              <i class="nav-icon fas fa-calendar-alt text-warning"></i>
              <p>
                Monitoring Parkir
              </p>
            </a>
          </li> 
          <li class="nav-item">
            <a id="menu_parkir_laporan" href="/parkir/laporan" class="nav-link">
              <i class="nav-icon fas fa-calendar-alt text-success"></i>
              <p>
                Laporan Parkir
              </p>
            </a>
          </li> 
         
            
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  