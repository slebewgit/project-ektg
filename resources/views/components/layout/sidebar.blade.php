<div class="left-sidenav">
    <!-- LOGO -->
    <div class="brand">
        <a href="dashboard/crm-index.html" class="logo">
            <span>
                <img src="{{ url('public/admin') }}/assets/images/logo.png" alt="logo-small" class="logo-sm">
            </span>

        </a>
    </div>
    <!--end logo-->
    <div class="menu-content h-100" data-simplebar>
        <ul class="metismenu left-sidenav-menu">

            <x-layout.sidebar.menu-item url="admin" label="Dashboard" icon="fa fa-home" />
            <x-layout.sidebar.menu-item url="admin/pengelola" label="Pengelola" icon="fa fa-user" />
            <x-layout.sidebar.menu-item url="admin/mitra" label="Mitra" icon="fa fa-user" />
            <x-layout.sidebar.menu-item url="admin/dinas" label="Dinas" icon="fa fa-user" />
            <x-layout.sidebar.menu-item url="admin/desa-wisata" label="Desa Wisata" icon="fa fa-globe" />
            <li>
                <a href="javascript: void(0);"> <i data-feather="grid" class="align-self-center menu-icon"></i><span>Atraksi</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    <x-layout.sidebar.menu-item url="admin/atraksi-wisata" label="Atraksi Wisata" icon="fa fa-copy" />
                    <x-layout.sidebar.menu-item url="admin/kategori" label="Kategori Atraksi" icon="fa fa-list" />
                </ul>
            </li>

            <li>
                <a href="javascript: void(0);"> <i data-feather="grid" class="align-self-center menu-icon"></i><span>Amenitas</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    <x-layout.sidebar.menu-item url="admin/fasilitas" label="Fasilitas" icon="fa fa-hotel" />
                    <x-layout.sidebar.menu-item url="admin/kategori-fasilitas" label="Kategori Fasilitas" icon="fa fa-list-alt" />
                </ul>
            </li>
            <x-layout.sidebar.menu-item url="admin/kalender-wisata" label="Kalender Wisata"
                icon="fa fa-calendar" />
            <x-layout.sidebar.menu-item url="admin/kontak" label="Kontak" icon="fa fa-phone" />
            <x-layout.sidebar.menu-item url="admin/berita" label="Berita" icon="fa fa-envelope" />
            <x-layout.sidebar.menu-item url="admin/detail" label="Detail" icon="fa fa-info" />
            <li>
                <a href="{{ url('logout') }}" onclick="return confirm('Apakah Anda Yakin Ingin Meninggalkan Halaman Ini')">
                    <i class="align-self-center menu-icon fa fa-arrow-left"></i>
                    <span>Logout</span>
                </a>
            </li>

        </ul>

    </div>
</div>
