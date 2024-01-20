<div class="left-side-menu">

    <div class="h-100" data-simplebar>

        <!-- User box -->
        <div class="user-box text-center">
            <img src="assets/images/users/avatar-1.jpg" alt="user-img" title="Mat Helme" class="rounded-circle avatar-md">
            <div class="dropdown">
                <a href="javascript: void(0);" class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block"
                    data-bs-toggle="dropdown">Nik Patel</a>
                <div class="dropdown-menu user-pro-dropdown">

                    <a href="pages-profile.html" class="dropdown-item notify-item">
                        <i data-feather="user" class="icon-dual icon-xs me-1"></i><span>My Account</span>
                    </a>
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i data-feather="settings" class="icon-dual icon-xs me-1"></i><span>Settings</span>
                    </a>
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i data-feather="help-circle" class="icon-dual icon-xs me-1"></i><span>Support</span>
                    </a>
                    <a href="pages-lock-screen.html" class="dropdown-item notify-item">
                        <i data-feather="lock" class="icon-dual icon-xs me-1"></i><span>Lock Screen</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i data-feather="log-out" class="icon-dual icon-xs me-1"></i><span>Logout</span>
                    </a>

                </div>
            </div>
            <p class="text-muted">Admin Head</p>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul id="side-menu">

                <!-- <li class="menu-title">Navigation</li> -->

                <li>
                    <a href="{{ route('dashboard') }}">
                        <i data-feather="home"></i>
                        <span> Dashboards </span>
                    </a>
                </li>

                <li class="menu-title mt-2">Hợp tác</li>

                <li>
                    <a href="{{ route('contract.index') }}">
                        <i data-feather="clipboard"></i>
                        <span> Danh sách hợp đồng </span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i data-feather="users"></i>
                        <span> Danh sách đối tác </span>
                    </a>
                </li>

                <li class="menu-title mt-2">Cơ cấu</li>

                <li>
                    <a href="#">
                        <i data-feather="user"></i>
                        <span> Danh sách thành viên </span>
                    </a>

                    <a href="#">
                        <i data-feather="layers"></i>
                        <span> Danh sách phòng ban </span>
                    </a>
                </li>


                <li class="menu-title mt-2">Chức năng khác</li>


            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
