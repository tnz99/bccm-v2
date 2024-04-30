<nav class="sidebar sidebar-offcanvas" id="sidebar" style="background-color: #194B46; ">
    <ul class="no-list-style" style="padding:20px;font-size: 15px; list-style: none; margin-left: 10% ">
        <li class="nav-item" style=" padding:10px;">
            <a class="nav-link" href="/admin/dashboard">
                <i class="mdi mdi-home menu-icon text-white"></i>
                <span class="menu-title text-white">Dashboard</span>
            </a>
        </li>
        <li class="nav-item" style=" padding:10px;">
            <a class="nav-link" href="/admin/edit_home">
                <i class="mdi mdi-file-document-box-outline menu-icon text-white"></i>
                <span class="menu-title text-white">Content</span>
            </a>
        </li>
        <li class="nav-item" style=" padding:10px;">
            <a class="nav-link" href="/admin/content">
                <i class="mdi mdi-account menu-icon text-white"></i>
                <span class="menu-title text-white">Users</span>
            </a>
        </li>
        <li class="nav-item" style=" padding:10px;">
            <a class="nav-link" href="#">
                <i class="mdi mdi-emoticon menu-icon text-white"></i>
                <span class="menu-title text-white">Admin</span>
            </a>
        </li>
        <li class="nav-item" style=" padding:10px;">
            <a class="nav-link" href="pages/charts/chartjs.html">
                <i class="mdi mdi-chart-pie menu-icon text-white"></i>
                <span class="menu-title text-white">Donation</span>
            </a>
        </li>
        <li class="nav-item" style="padding:10px;">
            <a class="nav-link" href="#" onclick="event.preventDefault(); showLogoutConfirmation();">
                <i class="mdi mdi-logout menu-icon text-white"></i>
                <span class="menu-title text-white">{{ __('Logout') }}</span>
              </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>

    </ul>
</nav>


<style>
    .nav-item:hover .nav-link {
        background: rgba(255, 255, 255, 0.3);
        transition: background 0.3s ease;
        border-radius: 10px;

    }
    .menu-icon {
        margin-right: 10px;
    }

</style>

<script>
    function showLogoutConfirmation() {
      if (confirm("Are you sure you want to logout?")) {
        document.getElementById('logout-form').submit();
      } else {
      }
    }
</script>
