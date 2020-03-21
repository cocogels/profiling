{{-- <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="../../dist/img/AdminLTELogo.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">
        ICM
      </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library
            <li class="nav-item">
                    <a href="{{ route('dashboard.index')}}" class="nav-link">
                       <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Dashboard
                    </p>
                </a>
            </li>
            <li class="nav-item ">
            <a href="{{ route('users.index') }}" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    User Management
                </p>
            </a>
            </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

 --}}

 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="../../dist/img/AdminLTELogo.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">ICM</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         <li class="nav-item">
                    <a href="{{ route('dashboard.index')}}" class="nav-link">
                       <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Dashboard
                    </p>
                </a>
          </li>
          <li class="nav-header" class="m-auto p-auto" style="font-size: 15px;">
            TABLE AND MAINTENANCE
            <hr style="background-color: gray;" class="m-0 p-0">
          </li>
          <li class="nav-item has-treeview mt-0 pt-0">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-folder"></i>
                <p style="font-size: 15px;">
                  Users
                  <i class="right fas fa-angle-left"></i>
                </p>
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item ml-3 pb-2">
                 <a href="{{ route('users.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-users-cog"></i>
                    <p style="font-size: 13px;">
                        User Maintenance
                    </p>
                 </a>
                  <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-file"></i>
                    <p style="font-size: 13px;">
                        Audit Logs
                    </p>
                 </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
