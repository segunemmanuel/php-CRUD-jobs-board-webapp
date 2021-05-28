<?php  include "includes/header.php"?>

<body>
  <!-- Sidenav -->
  <?php include "includes/dash-nav.php"?>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
  <?php include "includes/nav.php"?>

   
    <!-- Header -->
    <!-- Header -->
    <div class="pb-6 header d-flex align-items-center" style="min-height: 500px; background-image: url(../assets/img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
        <div class="row">
          <div class="col-lg-7 col-md-10">
            <h1 class="text-white display-2">Hello <?php echo $_SESSION['name']; ?></h1>
            <p class="mt-0 mb-5 text-white">This is your profile page. You can see the progress you've made with your applications and manage them</p>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col-xl-4 order-xl-2">
          <div class="card card-profile">
            <img src="../assets/img/theme/img-1-1000x600.jpg" alt="Image placeholder" class="card-img-top">
            <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                  <a href="#">
                    <img src="../assets/img/theme/team-4.jpg" class="rounded-circle">
                  </a>
                </div>
              </div>
            </div>
            <div class="pt-8 pb-0 text-center border-0 card-header pt-md-4 pb-md-4">
              <div class="d-flex justify-content-between">
                <a href="#" class="mr-4 btn btn-sm btn-info ">Connect</a>
                <a href="#" class="float-right btn btn-sm btn-default">Message</a>
              </div>
            </div>
            <div class="pt-0 card-body">
              <div class="row">
                <div class="col">
                  <div class="card-profile-stats d-flex justify-content-center">
                    <div>
                      <span class="heading">22</span>
                      <span class="description">Friends</span>
                    </div>
                    <div>
                      <span class="heading">10</span>
                      <span class="description">Photos</span>
                    </div>
                    <div>
                      <span class="heading">89</span>
                      <span class="description">Comments</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="text-center">
                <h5 class="h3">
                  Jessica Jones<span class="font-weight-light">, 27</span>
                </h5>
                <div class="h5 font-weight-300">
                  <i class="mr-2 ni location_pin"></i>Bucharest, Romania
                </div>
                <div class="mt-4 h5">
                  <i class="mr-2 ni business_briefcase-24"></i>Solution Manager - Creative Tim Officer
                </div>
                <div>
                  <i class="mr-2 ni education_hat"></i>University of Computer Science
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-8 order-xl-1">
          <div class="card">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">View profile </h3>
                </div>
                <div class="text-right col-4">
                  <a href="#!" class="btn btn-sm btn-primary">Settings</a>
                </div>
              </div>
            </div>
            

<?php

if(isset($_SESSION['name'])){


$query="SELECT * FROM users WHERE name = '{$_SESSION['name']}' ";
 



$result= mysqli_query($connection, $query);
if(!$result){
  die("Error".  mysqli_error($connection));
  
}
while($row=mysqli_fetch_array($result)){
  $username=$row['name'];
  $id=$row['id'];
  $email=$row['email'];
  $firstname=$row['first_name'];
  $lastname=$row['last_name'];
  $address=$row['address'];
  $city=$row['city'];
  $postal=$row['postal'];
  $about=$row['about'];
  $country=$row['country'];
  
  }

}

?>

<div class="card-body">
<form action="" method="post" >
<h6 class="mb-4 heading-small text-muted"><?php echo $id; ?></h6>

<div class="pl-lg-4">
<div class="row">
<div class="col-lg-6">
<div class="form-group">
<label class="form-control-label" for="input-username">Username</label>
<input type="text" id="input-username"  disabled name="username" class="form-control" placeholder="Username" value="<?php echo $username; ?>">
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<label class="form-control-label" for="input-email">Email address</label>
<input type="email" id="input-email"  disabled  name="email"  class="form-control" placeholder="<?php echo $email; ?>">
</div>
</div>
</div>
<div class="row">
<div class="col-lg-6">
<div class="form-group">
<label class="form-control-label" for="input-first-name">First name</label>
<input type="text" id="input-first-name"  disabled   name= "firstname"class="form-control" placeholder="First name" value="<?php echo $firstname; ?>">
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<label class="form-control-label" for="input-last-name">Last name</label>
<input type="text" id="input-last-name"  disabled   name="lastname" class="form-control" placeholder="Last name" value="<?php echo $lastname; ?>">
</div>
</div>
</div>
</div>
<hr class="my-4" />
<!-- Address -->
<h6 class="mb-4 heading-small text-muted">Contact information</h6>
<div class="pl-lg-4">
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label class="form-control-label" for="input-address">Address</label>
<input id="input-address"  disabled    name="address" class="form-control" placeholder="Home Address" value="<?php echo $address; ?>" type="text">
</div>
</div>
</div>
<div class="row">
<div class="col-lg-4">
<div class="form-group">
<label class="form-control-label" for="input-city">City</label>
<input type="text" id="input-city"   disabled  name="city"  class="form-control" placeholder="City" value="<?php echo $city; ?>">
</div>
</div>
<div class="col-lg-4">
<div class="form-group">
<label class="form-control-label" for="input-country">Country</label>
<input type="text" id="input-country" disabled  name="country"   class="form-control" placeholder="Country" value="<?php echo $country; ?>">
</div>
</div>
<div class="col-lg-4">
<div class="form-group">
<label class="form-control-label" for="input-country">Postal code</label>
<input type="number" id="input-postal-code"  disabled  name="postal" class="form-control" placeholder="<?php echo $postal; ?>">
</div>
</div>
</div>
</div>
<hr class="my-4" />
<!-- Description -->
<h6 class="mb-4 heading-small text-muted">About me</h6>
<div class="pl-lg-4">
<div class="form-group">
<label class="form-control-label">About Me</label>
<textarea rows="4" class="form-control"  disabled  name="about"  placeholder="A few words about you ..."><?php echo $about; ?></textarea>
</div>
</div>

<div class="col-lg-7 col-md-10">
           
           <a href="edit_profile.php?edit=<?php echo $id; ?>" class="btn btn-neutral">Edit profile</a>
         </div>
</form>
            </div>
          </div>
        </div>
      </div>
 










      
      <!-- Footer -->
      <footer class="pt-0 footer">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6">
            <div class="text-center copyright text-lg-left text-muted">
              &copy; 2020 <a href="https://www.creative-tim.com" class="ml-1 font-weight-bold" target="_blank">Creative Tim</a>
            </div>
          </div>
          <div class="col-lg-6">
            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
              <li class="nav-item">
                <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
              </li>
              <li class="nav-item">
                <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
              </li>
            </ul>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Argon JS -->
  <script src="../assets/js/argon.js?v=1.2.0"></script>
</body>

</html>