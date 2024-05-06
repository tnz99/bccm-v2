<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-left">

    <div class="d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center">
            <img src="{{ url('') }}/assets/img/Group 3.svg" alt="">
        </a>
        <i class="bi bi-list toggle-sidebar-btn menu-icon"></i><!-- Add 'menu-icon' class here -->
    </div><!-- End Logo -->


    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">
            <li class="nav-item dropdown pe-3 mt-3">

                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                    <div class="profile-initials">
                        @auth
                        {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                        @endauth
                    </div>

                    <span class="d-none d-md-block dropdown-toggle ps-2">
                        @auth
                        {{ Auth::user()->name }}
                        @endauth
                    </span>

                </a><!-- End Profile Iamge Icon -->

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">

                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                            <i class="bi bi-person"></i>
                            <span>My Profile</span>
                        </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="{{ url('logout')}}">
                            <i class="bi bi-box-arrow-right"></i>
                            <span>Logout</span>
                        </a>
                    </li>

                </ul><!-- End Profile Dropdown Items -->
            </li><!-- End Profile Nav -->
        </ul>
    </nav>

    <style>
    .profile-initials {
        width: 40px;
        /* Adjust the size as needed */
        height: 40px;
        /* Adjust the size as needed */
        border-radius: 50%;
        /* Makes the element circular */
        border: 2px solid #ccc;
        /* Border color */
        display: flex;
        justify-content: center;
        align-items: center;
        font-weight: bold;
        font-size: 20px;
        /* Adjust the font size as needed */
        padding-bottom: 9px;
    }
    </style>

</header><!-- End Header -->