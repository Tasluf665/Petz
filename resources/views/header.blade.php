<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Session;

$total = 0;
if (Session::has('user')) {
  $total = ProductController::cartItem();
}
?>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-light navbar-light">
  <!-- Container wrapper -->
  <div class="container-fluid me-5">
    <!-- Navbar brand -->
    <div class="me-5"></div>
    <a class="navbar-brand ml-5" href="#">Petz</a>

    <!-- Toggle button -->
    <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <!-- Link -->
        <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
        @if(Session::has('user'))
        <li class="nav-item"><a class="nav-link" href="/myorders">Orders</a></li>
        @endif
      </ul>

      <div class="collapse navbar-collapse justify-content-center" id="navbarCenteredExample">
        <form class="d-flex" action="/search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-dark" type="submit">Search</button>
        </form>
      </div>

      <!-- Icons -->
      <ul class="navbar-nav d-flex flex-row me-1">
        @if(Session::has('user'))
        <li class="nav-item"><a class="nav-link" href="/cartlist">Cart({{ $total }})</a></li>
        @endif
        @if(Session::has('user'))
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{ Session::get('user')['name'] }}
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/logout">Logout</a></li>
          </ul>
        </li>
        @else
        <li class="nav-item"><a class="nav-link" href="/login">Login</a></li>
        <li class="nav-item"><a class="nav-link" href="/register">Register</a></li>
        @endif
      </ul>

    </div>
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->