<nav class="navbar sticky-top navbar-expand-lg bg-dark flex-col pb-lg-0" data-bs-theme="dark">
  <div class="container mt-1">
    <a class="navbar-brand" href="#">
      <img src="<?php echo IMAGE_PATH ?>/logo.png" alt="Bootstrap" height="60">
    </a>
    <button class="navbar-toggler d-sm-block d-lg-none mt-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
  <div class="container">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">
            <i class="bi bi-search"></i><span class="m-1">Search CROs</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link  <?php if ($path == 'wizard') echo "active" ?>" href="<?php echo BASE_PATH . "/wizard" ?>">
            <i class="bi bi-magic"></i><span class="m-1">Wizard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if ($path == 'clients') echo "active" ?>" href="<?php echo BASE_PATH . "/clients" ?>">
            <i class="bi bi-person-fill"></i><span class="m-1">My Client</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if ($path == 'notifications') echo "active" ?>" href="<?php echo BASE_PATH . "/notifications" ?>">
            <i class="bi bi-bell-fill"></i><span class="m-1">Notifications</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if ($path == 'messages') echo "active" ?>" href="<?php echo BASE_PATH . "/messages" ?>">
            <i class="bi bi-envelope-fill"></i><span class="m-1">Messages</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if ($path == 'settings') echo "active" ?>" href="<?php echo BASE_PATH . "/settings" ?>">
            <i class="bi bi-gear-fill"></i><span class="m-1">Settings</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if ($path == 'credits') echo "active" ?>" href="<?php echo BASE_PATH . "/credits" ?>">
            <i class="bi bi-star-fill"></i><span class="m-1">Credits</span>
          </a>
        </li>
      </ul>
      <hr class="text-light" />
      <form class="d-flex mt-3" role="search">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle fw-bold align-items-end" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Elaine Ganda
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">My Profile</a></li>
              <li><a class="dropdown-item" href="#">Settings</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Logout</a></li>
            </ul>
          </li>
        </ul>
      </form>
    </div>
  </div>
</nav>