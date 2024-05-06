<!-- ======= Sidebar ======= -->

@php
use App\Models\PermissionRoleModel;
$userRole = auth()->user()->role_id;
$isRole = in_array($userRole, [1]); // Assuming role_id 1 is for admin and role_id 2 is for subadmin
@endphp

<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link @if(Request::segment(2) != 'dashboard') collapsed @endif" href="{{url('panel/dashboard') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        @if($userRole == 1) <!-- Check if the user is an admin -->
        <li class="nav-item">
            <a class="nav-link @if(Request::segment(2) != 'role') collapsed @endif" href="{{url('panel/role')}}">
                <i class="bi bi-person"></i>
                <span>Role</span>
            </a>
        </li><!-- End RolePage Nav -->
        @endif

        <li class="nav-item">
            <a class="nav-link @if(Request::segment(2) != 'user') collapsed @endif" href="{{url('panel/user')}}">
                <i class="bi bi-person"></i>
                <span>User</span>
            </a>
        </li><!-- End User Page Nav -->

        <li class="nav-item">
            <a class="nav-link @if(Request::segment(2) != 'admin') collapsed @endif" href="{{url('panel/aduser')}}">
                <i class="bi bi-person"></i>
                <span>Admin</span>
            </a>
        </li><!-- End AdminPage Nav -->

        @if($userRole == 1) <!-- Check if the user is an admin -->
        <li class="nav-item">
            <a class="nav-link @if(Request::segment(2) != 'donation') collapsed @endif" href="{{url('panel/donation')}}">
                <i class="bi bi-person"></i>
                <span>Donation</span>
            </a>
        </li><!-- End Donation Page Nav -->
        @endif

        <li class="nav-item">
            <a class="nav-link @if(Request::segment(2) != 'profile') collapsed @endif" href="{{url('panel/profile')}}">
                <i class="bi bi-person"></i>
                <span>Profile</span>
            </a>
        </li><!-- End Profile Page Nav -->

        <li class="nav-item">
            <a class="nav-link @if(Request::segment(2) != 'logout') collapsed @endif" href="{{ url('logout')}}">
                <i class="bi bi-box-arrow-right"></i>
                <span>Logout</span>
            </a>
        </li><!-- End Logout Page Nav -->
    </ul>
</aside><!-- End Sidebar-->
