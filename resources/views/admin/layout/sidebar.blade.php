<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="index.html" class="app-brand-link">
            <span class="app-brand-logo demo">
                <img src="{{ asset('assets/img/avatars/logo_01.png') }}" alt="Logo">
            </span>
            <span class="app-brand-text demo menu-text fw-bolder ms-2">
                <img src="{{ asset('assets/img/avatars/logo_02.png') }}" alt="Logo">
            </span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item">
            <a href="/dashboard" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>


        <!-- Forms & Tables -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Informasi &amp; Pustaka</span></li>
        <!-- Forms -->
        @if(auth()->check() && auth()->user()->role == 'admin')
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-user-pin"></i>
                <div data-i18n="Form Elements">Pengguna</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('user.index') }}" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-show"></i>
                        <div data-i18n="Basic Inputs">Lihat Pengguna</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('user.create') }}" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-plus"></i>
                        <div data-i18n="Input groups">Tambah Pengguna</div>
                    </a>
                </li>
            </ul>
        </li>
        @endif
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-detail"></i>
                <div data-i18n="Form Elements">AE Informasi</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{route('informasi.index')}}" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-show"></i>
                        <div data-i18n="Basic Inputs">Lihat Data</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{route('informasi.create')}}" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-plus"></i>
                        <div data-i18n="Input groups">Tambah Data</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{route('kategori_informasi.index')}}" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-category-alt"></i>
                        <div data-i18n="Input groups">Kategori</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-book-open"></i>
                <div data-i18n="Form Layouts">AE Pustaka</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{route('pustaka.index')}}" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-show"></i>
                        <div data-i18n="Vertical Form">Lihat Data</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{route('pustaka.create')}}" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-plus"></i>
                        <div data-i18n="Horizontal Form">Tambah Data</div>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</aside>
