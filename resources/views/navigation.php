<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.html">Rent<span>Book</span></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
        aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span>
      </button>
      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
          <li class="nav-item"><a href="pricing.html" class="nav-link">Pricing</a></li>
          <li class="nav-item"><a href="car.html" class="nav-link">Vehicles</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
              Login
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="<?php echo url('/login/user'); ?>">User Login</a></li>
              <li><a class="dropdown-item" href="<?php echo url('/login/vendor');?>">Vendor Login</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>