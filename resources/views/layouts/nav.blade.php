<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('assets/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">Silapor</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        {{-- Dashboard --}}
        <li>
            <a href="{{ route('dashboard') }}">
                <div class="parent-icon"><i data-feather="home"></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
        {{-- Data Pengaduan --}}
        <li>
            <a href="{{ route('pengaduan.index') }}">
                <div class="parent-icon"><i data-feather="monitor"></i>
                </div>
                <div class="menu-title">Data Pengaduan</div>
            </a>
        </li>
        {{-- Data User --}}
        <li>
            <a href="{{ route('driver.index') }}">
                <div class="parent-icon"><i data-feather="user"></i>
                </div>
                <div class="menu-title">Data User</div>
            </a>
        </li>
    </ul>
    <!--end navigation-->
</div>
