<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary height-auto">
    <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
      <div class="offcanvas-header">
        <h3 class="offcanvas-title" id="sidebarMenuLabel">CarRent</h3>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
              <svg class="bi"><use xlink:href="#house-fill"/></svg>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('dashboard/cars*') ? 'active' : '' }}" href="/dashboard/cars">
              <svg class="bi"><use xlink:href="#file-earmark"/></svg>
              My Cars
            </a>
          </li>
        </ul>

        <hr class="my-3">

        <ul class="nav flex-column mb-auto">
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="/carRental">
              <svg class="bi"><use xlink:href="#chevron-right"/></svg>
              Back to CarRent
            </a>
          </li>
          <li class="nav-item">
            <form action="/logout" method="post">
              @csrf
              <button type="submit" class="nav-link d-flex align-items-center gap-2"><svg class="bi"><use xlink:href="#door-closed"/></svg> Logout
              </button>
          </form>
          </li>
        </ul>
      </div>
    </div>
  </div>