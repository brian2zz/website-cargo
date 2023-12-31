<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="index.html">
            <span class="align-middle">AdminKit</span>
        </a>
        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Pages
            </li>

            <li class="sidebar-item {{ Request::is('dashboard') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ url('/dashboard') }}">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                </a>
            </li>

            <li class="sidebar-item {{ Request::is('surat-jalan') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ url('/surat-jalan') }}">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">Surat Jalan</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="/manifest">
                    <i class="align-middle" data-feather="log-in"></i> <span class="align-middle">Manifest</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
