<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="" class="brand-link">
        <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('brand.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-sign-out"></i>
                        <p>Brands</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('model.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-sign-out"></i>
                        <p>Models</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('car.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-car"></i>
                        <p>Cars</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.logout') }}" class="nav-link">
                        <i class="nav-icon fas fa-sign-out"></i>
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
