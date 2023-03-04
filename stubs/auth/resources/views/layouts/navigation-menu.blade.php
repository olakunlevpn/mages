      
<header class="navbar bg-dark sticky-top  flex-md-nowrap p-0 shadow">
    <a class="navbar-brand text-white col-md-3 col-lg-2 me-0 px-3" href="{{  route('home') }}">{{ config('app.name') }}</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    
    <div class="flex-shrink-0 dropdown px-2">
      <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
      </a>
      <ul class="dropdown-menu text-small shadow dropmenu-user" aria-labelledby="dropdownUser2">
        <li><a class="dropdown-item" href="#">New project...</a></li>
        <li><a class="dropdown-item" href="{{ route('settings.show') }}">Settings</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="{{ route('logout') }}" 
          onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sign out</a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
      </li>
      </ul>
    </div>
  </header>
  
  