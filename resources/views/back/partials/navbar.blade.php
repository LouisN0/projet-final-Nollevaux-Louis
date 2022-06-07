<aside class="main-sidebar sidebar-dark-light elevation-4" style="background-color: #a12c2f">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="{{ asset('/images/logo-2.png') }}" alt="AdminLTE Logo" class="brand-image" style="opacity: .8">
    <span class="brand-text font-weight-light">Backend</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset("/images/". Auth::user()->image) }}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="{{ route('user.edit', Auth::user()->id) }}" class="d-block">{{ Auth::user()->nom }}</a>
      </div>
    </div>

    

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item ">
          <a href="{{ route('dashboard') }}" class="nav-link {{ request()->routeIs("dashboard") ? "active" : "" }}">
            <i class="fa-solid fa-satellite-dish"></i>
            <p>
              Dashboard
            </p>
          </a>
          
        </li>
        
        <li class="nav-item ">
          <a href="{{ route('conversations') }}" class="nav-link {{ request()->routeIs("conversations") ? "active" : "" }}">
            <i class="nav-icon far fa-envelope"></i>
            <p>
              Messages
            </p>
          </a>
          
        </li>
        <li class="nav-item ">
          <a href="{{ route('demande.index') }}" class="nav-link {{ request()->routeIs("demande.index") ? "active" : "" }}">
            <i class="fa-solid fa-satellite-dish"></i>
            <p>
              Dashboard
            </p>
          </a>
          
        </li>
        @if (Auth::user()->role_id != 4)
        <li class="nav-header">DATA</li>
        <li class="nav-item ">
          <a href="{{ route('user.index') }}" class="nav-link {{ request()->routeIs("user.index") ? "active" : "" }}">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Users
            </p>
          </a>
        </li>
        <li class="nav-item ">
          <a href="{{ route('subscriber') }}" class="nav-link {{ request()->routeIs("subscriber") ? "active" : "" }}">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Newsletter
            </p>
          </a>
        </li>
        <li class="nav-item {{ request()->routeIs("role.index")||request()->routeIs("role.create")  ? "menu-open" : "" }}">
          <a href="" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
              Roles
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('role.index') }}" class="nav-link {{ request()->routeIs("role.index") ? "active" : "" }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Database</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('role.create') }}" class="nav-link {{ request()->routeIs("role.create") ? "active" : "" }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Create</p>
              </a>
            </li>
            
          </ul>
        </li>
        <li class="nav-item {{ request()->routeIs("teacher.index")||request()->routeIs("teacher.create")  ? "menu-open" : "" }}">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
              Teachers
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('teacher.index') }}" class="nav-link {{ request()->routeIs("teacher.index") ? "active" : "" }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Database</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('teacher.create') }}" class="nav-link {{ request()->routeIs("teacher.create") ? "active" : "" }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Create</p>
              </a>
            </li>
            
          </ul>
        </li>
        
            
        
        <li class="nav-header">FRONT</li>
        <li class="nav-item {{ request()->routeIs("banner.index")||request()->routeIs("banner.create")  ? "menu-open" : "" }}">
          <a href="#" class="nav-link">
            <i class="nav-icon far fa-envelope"></i>
            <p>
              Banners
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('banner.index') }}" class="nav-link {{ request()->routeIs("banner.index") ? "active" : "" }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Database</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('banner.create') }}" class="nav-link {{ request()->routeIs("banner.create") ? "active" : "" }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Create</p>
              </a>
            </li>
            
          </ul>
        </li>
        <li class="nav-item {{ request()->routeIs("service.index")||request()->routeIs("service.create")  ? "menu-open" : "" }}">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-book"></i>
            <p>
              Services
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('service.index') }}" class="nav-link {{ request()->routeIs("service.index") ? "active" : "" }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Database</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('service.create') }}" class="nav-link {{ request()->routeIs("service.create") ? "active" : "" }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Create</p>
              </a>
            </li>
            
          </ul>
        </li>
        <li class="nav-item {{ request()->routeIs("evenement.index")||request()->routeIs("evenement.create")  ? "menu-open" : "" }}">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-book"></i>
            <p>
              Events
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('evenement.index') }}" class="nav-link {{ request()->routeIs("evenement.index") ? "active" : "" }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Database</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('evenement.create') }}" class="nav-link {{ request()->routeIs("evenement.create") ? "active" : "" }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Create</p>
              </a>
            </li>
            
          </ul>
        </li>
        <li class="nav-item {{ request()->routeIs("post.index")||request()->routeIs("post.create")  ? "menu-open" : "" }}">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-book"></i>
            <p>
              Posts
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('post.index') }}" class="nav-link {{ request()->routeIs("post.index") ? "active" : "" }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Database</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('post.create') }}" class="nav-link {{ request()->routeIs("post.create") ? "active" : "" }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Create</p>
              </a>
            </li>
            
          </ul>
        </li>
        <li class="nav-item {{ request()->routeIs("contact.index")||request()->routeIs("contact.create")  ? "menu-open" : "" }}">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-book"></i>
            <p>
              Contact
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('contact.index') }}" class="nav-link {{ request()->routeIs("contact.index") ? "active" : "" }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Database</p>
              </a>
            </li>
            
          </ul>
        </li>
        <li class="nav-item {{ request()->routeIs("cour.index")||request()->routeIs("cour.create")  ? "menu-open" : "" }}">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-book"></i>
            <p>
              cours
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('cour.index') }}" class="nav-link {{ request()->routeIs("cour.index") ? "active" : "" }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Database</p>
              </a>
            </li>
            
            <li class="nav-item">
              <a href="{{ route('cour.create') }}" class="nav-link {{ request()->routeIs("cour.create") ? "active" : "" }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Create</p>
              </a>
            </li>
            
          </ul>
        </li>
        @endif
        <li class="nav-header">CONTROLS</li>
        <li class="nav-item {{ request()->routeIs("logout") ? "active" : "" }}">
          <a href="" class="nav-link ">
            <p>
              <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <div :href="route('logout')"
                            style="cursor: pointer"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                            {{ __('Log Out') }}</div>
                    </form>
            </p>
          </a>
          
        </li>
        
        
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>