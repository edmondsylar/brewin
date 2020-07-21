<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background: #400C4A">
    <!-- Brand Logo -->
    <a href="{{ url('/home') }}" class="brand-link">
      <span class="brand-text font-weight-light">Brewin.org | admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('admin/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                App
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/home') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/sponsers') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sponsers</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ url('/fundraisers') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fundraisers</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ url('/blogs') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>News | Blog</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ url('/gallery') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>gallery</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ url('/progs') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Programs</p>
                </a>
              </li>


            </ul>
          </li>

          {{-- <li class="nav-item">
            <a href="../widgets.html" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Sponsers
              </p>
            </a>
          </li> --}}
        
          
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>