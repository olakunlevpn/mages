<nav id="sidebarMenu" class="col-md-3 sidebar-width col-lg-2 d-md-block bg-dark text-white sidebar collapse ">
        <div class="position-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link {{ request()->is('home') ? 'active' : '' }}" href="{{ route('dashboard') }}">
                <i class="bi bi-house-door-fill"></i>
                Dashboard
              </a>
            </li>
            {{-- <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="bi bi-file-earmark-fill"></i>
                Orders
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="bi bi-cart-fill"></i>
                Products
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="bi bi-people-fill"></i>
                Customers
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="bi bi-bar-chart-fill"></i>
                Reports
              </a>
            </li> --}}

            <li class="nav-item">
              <a class="nav-link {{ request()->is('user/settings') ? 'active' : '' }}" href="{{ route('settings.show') }}">
                <i class="bi bi-gear-fill"></i>
                Profile
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-danger" href="{{ route('logout') }}" 
              onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
              >
              <i class="bi bi-power"></i>
                Logout
              </a>
             
            </li>
          </ul>
  
      
        </div>
      </nav>