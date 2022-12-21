<!-- Sidebar -->
<ul class="navbar-nav sidebar bg-gradient-primary sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard">
        <div class="sidebar-brand-icon">
            <i class="fas fa-fw fa-server"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin Managements</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="/dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Master Data
    </div>

    <li class="nav-item">
        <a class="nav-link {{ isset($sbMaster) && $sbMaster === true ? '' : 'collapsed'}}" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded={{ isset($sbMaster) && $sbMaster === true ? 'true' : 'false' }} aria-controls="collapseUtilities">
            <i class="fas fa-fw far fa-save"></i>
            <span>Data Managements</span>
        </a>
        <div id="collapseUtilities" class="collapse {{ isset($sbMaster) && $sbMaster === true ? 'show' : '' }}" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Data</h6>
                <a class="collapse-item {{ isset($sbActive) && $sbActive === 'data.kategori' ? 'active' : '' }}" 
                    href="{{ route('kategori.index') }}">
                    <i class="fas fa-fw fa-tag"></i>
                    <span>Kategori</span>
                </a>

                <a class="collapse-item {{ isset($sbActive) && $sbActive === 'data.produk' ? 'active' : '' }}" 
                    href="{{ route('dataProduk.index') }}">
                    <i class="fas fa-fw fa-archive"></i>
                    <span>Produk</span>
                </a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
<!-- End of Sidebar -->
