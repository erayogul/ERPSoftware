  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="./img/logo.png" alt="ERP Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Company Name</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
<!--      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="./img/profile.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">
          {{ Auth::user()->name }}
          </a>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-item">
            <router-link to="/dashboard" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
              </router-link>
            </a>
          </li>

          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-users nav-icon"></i>
              <p>
                HR
                <i class="right fas fa-angle-left "></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <router-link to="/users" class="nav-link ">
                  <i class="fas fa-circle nav-icon"></i>
                  <p>Employee List</p>
                  </router-link>
                </a>
              </li>
              <li class="nav-item">
                <router-link to="/notready" class="nav-link ">
                  <i class="fas fa-circle nav-icon"></i>
                  <p>Time Off Request</p>
                  </router-link>
                </a>
              </li>

            </ul>
          </li>
<!-- 
          <li class="nav-item">
            <router-link to="/profile" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Profile
              </p>
              </router-link>
            </a>
          </li>
-->



          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-industry "></i>
              <p>
                Production
                <i class="right fas fa-angle-left "></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <router-link to="/notready" class="nav-link ">
                  <i class="fas fa-circle nav-icon"></i>
                  <p>Production Requests</p>
                  </router-link>
                </a>
              </li>
              <li class="nav-item">
                <router-link to="/notready" class="nav-link ">
                  <i class="fas fa-circle nav-icon"></i>
                  <p>Production Report</p>
                  </router-link>
                </a>
              </li>

            </ul>
          </li>

          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-people-carry "></i>
              <p>
                Sales
                <i class="right fas fa-angle-left "></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <router-link to="/notready" class="nav-link ">
                  <i class="fas fa-circle nav-icon"></i>
                  <p>Create Sales</p>
                  </router-link>
                </a>
              </li>
              <li class="nav-item">
                <router-link to="/notready" class="nav-link ">
                  <i class="fas fa-circle nav-icon"></i>
                  <p>Sales Report</p>
                  </router-link>
                </a>
              </li>
              <li class="nav-item">
                <router-link to="/notready" class="nav-link ">
                  <i class="fas fa-circle nav-icon"></i>
                  <p>After Sales</p>
                  </router-link>
                </a>
              </li>

              </ul>
          </li>

              <li class="nav-item has-treeview ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-wallet "></i>
              <p>
                Finance 
                <i class="right fas fa-angle-left "></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <router-link to="/notready" class="nav-link ">
                  <i class="fas fa-circle nav-icon"></i>
                  <p>Purchase Requests</p>
                  </router-link>
                </a>
              </li>
              <li class="nav-item">
                <router-link to="/notready" class="nav-link ">
                  <i class="fas fa-circle nav-icon"></i>
                  <p>Finance Reports</p>
                  </router-link>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-cubes "></i>
              <p>
                Stock 
                <i class="right fas fa-angle-left "></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <router-link to="/notready" class="nav-link ">
                  <i class="fas fa-circle nav-icon"></i>
                  <p>Manage Stock</p>
                  </router-link>
                </a>
              </li>
              <li class="nav-item">
                <router-link to="/notready" class="nav-link ">
                  <i class="fas fa-circle nav-icon "></i>
                  <p>Stock Reports</p>
                  </router-link>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <router-link to="/notready" class="nav-link">
              <i class="nav-icon fas fa-microchip"></i>
              <p>
                IOT
              </p>
            </a>
          </li>

          @can('isAdmin')
          <li class="nav-item">
            <router-link to="/developer" class="nav-link">
              <i class="nav-icon fas fa-cogs"></i>
              <p>
                Developer
              </p>
            </a>
          </li>
          @endcan


 <!-- 
          <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        <i class="nav-icon fas fa-power-off red"></i>
                        <p>
                        {{ __('Logout') }}
                        </p>
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
               </form>
          </li>
 
 -->

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>