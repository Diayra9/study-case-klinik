<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('assets/images/loogo.png') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="{{ url('/index') }}" class="d-block">Eternelle Beaute</a>
            </div>
        </div>

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
                <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                <li class="nav-item menu-close">
                    <a href="#" class="nav-link {{ Request::is('/index') || Request::is('/memberships') || Request::is('/reservations') || Request::is('/products') || Request::is('/treatments') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/treatments') }}" class="nav-link {{ Request::is('/treatments') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Treatments</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/products') }}" class="nav-link {{ Request::is('/products') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Products</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/memberships') }}" class="nav-link {{ Request::is('/memberships') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Memberships</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/reservations') }}" class="nav-link {{ Request::is('/reservations') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Reservations</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/calender') }}" class="nav-link {{ Request::is('/calender') ? 'active' : '' }}">
                        <i class="nav-icon far fa-calendar-alt"></i>
                        <p>Calendar</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/information') }}" class="nav-link {{ Request::is('/information') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-book"></i>
                        <p>Information</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/faq') }}" class="nav-link {{ Request::is('/faq') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>FAQ</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/gallery') }}" class="nav-link {{ Request::is('/gallery') ? 'active' : '' }}">
                        <i class="nav-icon far fa-image"></i>
                        <p>Gallery</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('admin/index2.html') }}" class="nav-link">
                        <i class="nav-icon fas fa-ellipsis-h"></i>
                        <p>Admin LTE</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
