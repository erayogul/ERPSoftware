  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <ul class="navbar-nav ml-auto">

      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">

          <img src="./img/profile.png" style="height:40px; width:40px; margin-top: -7px;" class="img-circle elevation-2" alt="User Image">

        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

        <div class="dropdown-divider"></div>
          <a class="dropdown-item">
          <center> {{ Auth::user()->name }} </center>
          </a>
       

          <div class="dropdown-divider"></div>
          <router-link to="/profile">
          <a class="dropdown-item">
            <i class="fas fa-user mr-2"></i> Profile
          </a>
          </router-link>

          <div class="dropdown-divider"></div>

          <a class="dropdown-item"  href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
            <i class="fas fa-power-off red mr-2"></i> Logout
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
               </form>




        </div>
      </li>
    </ul>




  </nav>
  <!-- /.navbar -->