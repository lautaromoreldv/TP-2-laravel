<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('usuario.index')  }}">Usuarios</a>
          </li>
          <li class="nav-item ml-auto">
            <a class="nav-link" href="{{ route('logout-user')  }}">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
