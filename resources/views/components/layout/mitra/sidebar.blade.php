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
            <x-layout.sidebar.menu-item url="mitra" label="Dashboard" icon="fa fa-home" />

            @if (Auth::guard('mitra')->user()->kategori == 'Pengelola Wisata')
                @yield('mitra_menu')
            @endif
            @if (Auth::guard('mitra')->user()->kategori == 'Pelaku Usaha')
                @yield('mitra_fasilitas')
            @endif
           
            <li>
                <a href="{{ url('logout') }}" onclick="return confirm('Apakah Anda Yakin Ingin Meninggalkan Halaman Ini')">
                    <i class="align-self-center menu-icon fa fa-arrow-left"></i>
                    <span>Logout</span>
                </a>
            </li>
        </ul>

        
    </div>
</div>