

<nav class="navbar navbar-expand-lg navbar-light shadow p-3 mb-5 bg-white" style="height: 80px;">
    <div class="container">
    <a class="navbar-brand " style="text-align: center;" href="/"><strong>TEFA</strong>
  <small><h6> SMK WIKRAMA BOGOR</h6></small></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      </button>
      <div class="offcanvas offcanvas-start bg-white mobile-responsive" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
            <a class="navbar-brand offcanvas-title" href="/"><i class="fas fa-book-reader"></i> MyNotes</a>
            <button type="button" class="btn-close btn-close-white text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
        <div class="navbar-nav ms-auto">
          <a class="nav-link {{ ($title === 'Home' ? 'active' : '')}}" href="/"><strong>Home</strong></a>
          <a class="nav-link {{ ($title === 'All Project' ? 'active' : '')}}" href="/projects"><strong>Project</strong></a>
          <a class="nav-link {{ ($title === 'Major' ? 'active' : '')}}" href="/majors"><strong>Major</strong></a>
          <a class="nav-link {{ ($title === 'About' ? 'active' : '')}}" href="/about"><strong>About</strong></a>
          <a class="nav-link {{ ($title === 'Contact' ? 'active' : '')}}" href="/contact"><strong>Contact</strong></a>
     
      <div class="ms-3">
            @auth
            <div class="nav-item dropdown" id="profile-button">
              <a href="/login" class="rounded-pill me-1" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="width: 100px"> <i class="fas fa-user-circle" style="font-size: 40px"></i></a>
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><p class="dropdown-item disabled">Halo, {{ auth()->user()->username }}</p></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="/dashboard"><i class='bx bxs-dashboard'></i> My Dashboard</a></li>

                <li>
                  <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" href="#" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Log Out</button>
                  </form>
                </li>
              </ul>
            </div>
            @else
            <a class="nav-link {{ ($title === 'Login' ? 'active' : '')}}" href="/login"><strong>Login</strong></a>
            @endauth
            </div>
          </div>
    </div>
  </div>
</nav>
          