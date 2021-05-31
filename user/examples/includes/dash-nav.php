
<nav class="bg-white sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light" id="sidenav-main">
<?php if(!(isset($_SESSION['name']))){
  
  header("location: login.php");
 }  ?>
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="../assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="dashboard.php">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="icons.php">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">Icons</span>
              </a>
            </li> -->
            <!-- <li class="nav-item">
              <a class="nav-link" href="map.php">
                <i class="ni ni-pin-3 text-primary"></i>
                <span class="nav-link-text">Google</span>
              </a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link" href="profile.php">
                <i class="ni ni-single-02 text-yellow"></i>
                <span class="nav-link-text">Profile</span>
              </a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="tables.php">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text">Tables</span>
              </a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link" href="login.php">
                <i class="ni ni-key-25 text-info"></i>
                <span class="nav-link-text">Logout</span>
              </a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="register.php">
                <i class="ni ni-circle-08 text-pink"></i>
                <span class="nav-link-text">Register</span>
              </a>
            </li> -->
            <!-- <li class="nav-item">
              <a class="nav-link" href="upgrade.php">
                <i class="ni ni-send text-dark"></i>
                <span class="nav-link-text">Upgrade</span>
              </a>
            </li> -->
          </ul>
          <!-- Divider -->
          <hr class="my-3">
          <!-- Heading -->
         

        </div>
      </div>
    </div>
  </nav>