<div id="sidebar" class="active">
    {{-- background: linear-gradient(-145deg, rgba(219,138,222,1) 0%, rgba(246,191,159,1) 100%) !important; --}}
    <div class="sidebar-wrapper active" style="">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="" style="">EDUCA</a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>
                {{-- @if (Auth::user()->role_id == 1) --}}
                <li class="sidebar-item ">
                    <a href="" class="sidebar-link">
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item ">
                    <a href="" class="sidebar-link">
                        <i class="bi bi-grid-fill"></i>
                        <span>Users</span>
                    </a>
                </li>
                <li class="sidebar-item ">
                    <a href="" class="sidebar-link">
                        <i class="bi bi-grid-fill"></i>
                        <span>Roles</span>
                    </a>
                </li>
                {{-- @endif --}}
                <li class="sidebar-title">Page</li>

                {{-- @if (Auth::user()->role_id == 1) --}}
                    
                
                <li class="sidebar-item  {{-- has-sub --}} ">
                    <a href="" class="sidebar-link">
                        <i class="bi bi-stack"></i>
                        <span>Titre</span>
                    </a>
                    {{-- <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="{{ route("titre.index") }}">All Titre</a>
                        </li>
                    </ul> --}}
                </li>
                {{-- @endif --}}
                {{-- @if (Auth::user()->role_id == 1) --}}
                    
                
                <li class="sidebar-item  has-sub }">
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-stack"></i>
                        <span>Service</span>
                    </a>
                    <ul class="submenu ">
                        {{-- @can('create', Service::class) --}}
                            <li class="submenu-item ">
                                <a href="">Create Service</a>
                            </li>     
                        {{-- @endcan --}}
                        <li class="submenu-item ">
                            <a href="">All Service</a>
                        </li>
                    </ul>
                </li>
                {{-- @endif --}}
                {{-- @if (Auth::user()->role_id == 1 || Auth::user()->role_id == 2) --}}
                <li class="sidebar-item  has-sub ">
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-stack"></i>
                        <span>Testimonial</span>
                    </a>
                    <ul class="submenu ">
                        {{-- @can('create', Testimonial::class) --}}
                            <li class="submenu-item ">
                                <a href="">Create Testimonial</a>
                            </li>
                        {{-- @endcan --}}
                        <li class="submenu-item ">
                            <a href="">All Testimonial</a>
                        </li>
                    </ul>
                </li>
                {{-- @endif --}}
                {{-- @if (Auth::user()->role_id == 1) --}}
                <li class="sidebar-item ">
                    <a href="" class="sidebar-link">
                        <i class="bi bi-stack"></i>
                        <span>Banner</span>
                    </a>
                </li>
                {{-- @endif --}}
                {{-- @if (Auth::user()->role_id == 1 || Auth::user()->role_id == 2) --}}
                <li class="sidebar-item }">
                    <a href="" class="sidebar-link">
                        <i class="bi bi-stack"></i>
                        <span>Map</span>
                    </a>
                    {{-- <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="{{ route("map.index") }}">All Map</a>
                        </li>
                    </ul> --}}
                </li>
                {{-- @endif --}}
                <li class="sidebar-title">
                    <a href="{{ route("home") }}">Exit</a>
                </li>

                <li class="sidebar-title">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <div :href="route('logout')"
                            style="cursor: pointer"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                            {{ __('Log Out') }}
                    </form>
                </li>
            </ul>  {{-- anchor_navbar --}}
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>
