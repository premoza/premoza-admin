<aside id="sidebar" class="expand shadow-lg">
    <div class="d-flex">
        <button class="toggle-btn" type="button">
            <i class="fa-solid fa-bars"></i>
        </button>
        <div class="sidebar-logo">
            <a href="/">Premoza</a>
        </div>
    </div>
    <ul class="sidebar-nav">
        <li class="sidebar-item">
            <a href="#" class="sidebar-link">
                <i class="fa-solid fa-house"></i>
                <span>Overview</span>
            </a>
        </li>
        <!--
        <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                        data-bs-target="#multi" aria-expanded="false" aria-controls="multi">
                        <i class="lni lni-layout"></i>
                        <span>Performance</span>
                    </a>
                    <ul id="multi" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse"
                                data-bs-target="#multi-two" aria-expanded="false" aria-controls="multi-two">
                                Two Links
                            </a>
                            <ul id="multi-two" class="sidebar-dropdown list-unstyled collapse">
                                <li class="sidebar-item">
                                    <a href="#" class="sidebar-link">Link 1</a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="#" class="sidebar-link">Link 2</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
-->
        <li class="sidebar-item">
            <a href="#" class="sidebar-link">
                <i class="fa-solid fa-industry"></i>
                <span>Properties</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="#" class="sidebar-link">
                <i class="fa-solid fa-certificate"></i>
                <span>Verification</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="#" class="sidebar-link">
                <i class="fa-solid fa-bell"></i>
                <span>Notification</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="#" class="sidebar-link">
                <i class="fa-solid fa-gear"></i>
                <span>Settings</span>
            </a>
        </li>
        <hr>
        <li class="sidebar-item">
            <a href="#" class="sidebar-link">
                <i class="fa-solid fa-ticket-simple"></i>
                <span>Ticket</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="#" class="sidebar-link">
                <i class="fa-solid fa-circle-info"></i>
                <span>About Premoza Admin</span>
            </a>
        </li>
    </ul>
    <div class="sidebar-footer">
        <a href="{{ route('logout') }}" class="sidebar-link" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
            <i class="fa-solid fa-arrow-right-from-bracket"></i>
            <span>Logout</span>
        </a>
    </div>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
</aside>