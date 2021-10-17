<!--Navbar-->

<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top shadow-lg">
  <div class="container">
    <a class="navbar-brand my-2" href="/" class="fw-bolder"><img src="img/icon.svg" height="50" width="50"><span class="mx-2 fw-bold h4 align-middle">SHOESTOWN</span></a>
    <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <form class="d-flex mx-2">
        <input class="form-control form-control-sm me-2" type="search" placeholder="Cari Barang" aria-label="Search">
        <button class="btn btn-outline-warning" type="submit"><i class="fas fa-search"></i></button>
      </form>
      <div class="navbar-nav ms-auto">
        <a class="nav-link mx-2 {{ ($title === "Beranda") ? 'text-primary' : 'text-dark' }}" href="/">Beranda</a>
        <div class="nav-item dropdown">
          <a class="mx-2 me-3 nav-link {{ ($title === "Katalog") ? 'text-primary' : 'text-dark' }}" href="/catalog" id="navbarDarkDropdownMenuLink" role="button" data-bs-hover="dropdown" aria-expanded="false">
            Katalog
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">
            <li><a class="dropdown-item" href="/catalog/">Pria</a></li>
            <li><a class="dropdown-item" href="/catalog/">Wanita</a></li>
            <li><a class="dropdown-item" href="/catalog/">Anak-anak</a></li>
            <li><a class="dropdown-item" href="/catalog/">Olahraga</a></li>
          </ul>
        </div>
        <a class="nav-link mx-2 {{ ($title === "Tentang") ? 'text-primary' : 'text-dark' }}" href="/about">Tentang</a>
        <div class="nav-item dropdown">
          <a class="mx-2 me-3 nav-link dropdown-toggle text-dark" href="/" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Masuk
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">
            <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal1">Log In</a></li>
            <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal2">Register</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</nav>

<!--Modal 1-->

<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Register</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-2">
            <label for="recipient-name" class="col-form-label">Username</label>
            <input type="text" class="form-control form-control-sm" id="recipient-name">
          </div>
          <div class="mb-2">
            <label for="recipient-name" class="col-form-label">Email</label>
            <input type="text" class="form-control form-control-sm" id="recipient-name">
          </div>
          <div class="mb-2">
            <label for="message-text" class="col-form-label">No Telepon</label>
            <input type="text" class="form-control form-control-sm" id="recipient-name">
          </div>
          <div class="mb-2">
            <label for="message-text" class="col-form-label">Password</label>
            <input type="text" class="form-control form-control-sm" id="recipient-name">
          </div>
          <div class="mb-2">
            <label for="message-text" class="col-form-label">Confirm Password</label>
            <input type="text" class="form-control form-control-sm" id="recipient-name">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Register</button>
      </div>
    </div>
  </div>
</div>

<!--Modal 2-->

<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Username</label>
            <input type="text" class="form-control form-control-sm" id="recipient-name">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Password</label>
            <input type="text" class="form-control form-control-sm" id="recipient-name">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Login</button>
      </div>
    </div>
  </div>
</div>