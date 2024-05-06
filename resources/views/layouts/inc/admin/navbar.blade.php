<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row" >
    <div class="navbar-brand-wrapper d-flex justify-content-center" style="background-color: #194B46;">
      <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
        <a class="navbar-brand brand-logo" href="/admin/dashboard">
            <img src="{{ asset('assets/img/logo.JPG') }}" alt="Logo" style="width: 90%; height:40%"/>
        </a>
        <a class="navbar-brand brand-logo-mini" href="/admin/dashboard">
            <img src="{{ asset('assets/img/logo-mini.jpg') }}" alt="logo"/>
        </a>
        <button class="navbar-toggler navbar-toggler align-self-left text-white d-none" type="button" data-toggle="minimize" style="margin-left: 10%">
            <span class="mdi mdi-sort-variant"></span>
        </button>

      </div>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end" style="background-color: #194B46; padding-top: 10px;">

      <ul class="navbar-nav navbar-nav-right">
        <li class="nav-item dropdown me-1">

        </li>
        <li class="nav-item nav-profile dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
            <img src="{{ asset('assets/img/face5.jpg') }}" alt="profile"/>
            <span class="nav-profile-name text-white">{{ Auth::user()->name }}</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown " aria-labelledby="profileDropdown">
            <a class="dropdown-item ">
                <i class="mdi mdi-account menu-icon text-dark"></i>

              View Profile
            </a>
            <a class="dropdown-item" href="#"  onclick="event.preventDefault(); showLogoutConfirmation();">
                <i class="mdi mdi-logout text-dark"></i>{{ __('Logout') }}
              </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
          </div>
        </li>
      </ul>
      <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
        <span class="mdi mdi-menu"></span>
      </button>
    </div>
</nav>
<script>
    function showLogoutConfirmation() {
        if (confirm("Are you sure you want to logout?")) {

            document.getElementById('logout-form').submit();
        }
        else {
        }
     }

</script>
