<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

        <a href="{{ route('landing') }}" class="logo d-flex align-items-center me-auto">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            {{-- <img src="assetsGuest/img/logo.png" alt=""> --}}
            <h1 class="sitename">Silapor</h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{ route('landing') }}" class="active">Home<br></a></li>
                @if (Auth::check() && Auth::user()->role === 'driver')
                    <li><a href="{{ route('pengaduan_driver.index') }}">Aduan Saya</a></li>
                    <li><a href="{{ route('pengaduan_driver.form_aduan') }}">Form Pengaduan</a></li>
                @endif
                @if (Auth::check() && Auth::user()->role === 'admin')
                    <li>
                        <button id="logoutButton" class="login-button bg-primary">Dashboard</button>
                    </li>
                @endif

                @if (Auth::check())
                    <li>
                        <button id="logoutButton" class="login-button bg-danger">Logout</button>
                    </li>
                @else
                    <li>
                        <button id="loginButton" class="login-button bg-primary">Login</button>
                    </li>
                @endif
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
    </div>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const loginButton = document.getElementById('loginButton');
        const logoutButton = document.getElementById('logoutButton');
        const dashboardButton = document.getElementById('dashboardButton');

        if (dashboardButton) {
            dashboardButton.addEventListener('click', function() {
                window.location.href = "{{ route('dashboard') }}"; // Arahkan ke halaman dashboard
            });
        }

        if (loginButton) {
            loginButton.addEventListener('click', function() {
                window.location.href = "{{ route('login') }}"; // Arahkan ke halaman login
            });
        }

        if (logoutButton) {
            logoutButton.addEventListener('click', function() {
                // Menggunakan form untuk logout
                const form = document.createElement('form');
                form.method = 'POST';
                form.action = "{{ route('logout') }}"; // Arahkan ke rute logout

                // Menambahkan token CSRF
                const token = document.createElement('input');
                token.type = 'hidden';
                token.name = '_token';
                token.value = '{{ csrf_token() }}'; // Token CSRF Laravel

                form.appendChild(token);
                document.body.appendChild(form);
                form.submit(); // Kirim form untuk logout
            });
        }
    });
</script>
