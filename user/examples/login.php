<?php include "includes/header.php";?>
<body class="bg-default">
  <!-- Navbar -->
  <?php include "includes/nav.php";?>

  <!-- Main content -->
  <div class="main-content">
    <!-- Header -->
    <div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-9">
      <div class="container">
        <div class="text-center header-body mb-7">
          <div class="row justify-content-center">
            <div class="px-5 col-xl-5 col-lg-6 col-md-8">
              <h1 class="text-white">Welcome!</h1>
              <p class="text-white text-lead">Use these awesome forms to login or create new account in your project for free.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
    <!-- Page content -->
    <div class="container pb-5 mt--8">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
          <div class="mb-0 border-0 card bg-secondary">
            <div class="pb-5 bg-transparent card-header">
              <div class="mt-2 mb-3 text-center text-muted"><small>Sign in with</small></div>
              <div class="text-center btn-wrapper">
                <a href="#" class="btn btn-neutral btn-icon">
                  <span class="btn-inner--icon"><img src="../assets/img/icons/common/github.svg"></span>
                  <span class="btn-inner--text">Github</span>
                </a>
                <a href="#" class="btn btn-neutral btn-icon">
                  <span class="btn-inner--icon"><img src="../assets/img/icons/common/google.svg"></span>
                  <span class="btn-inner--text">Google</span>
                </a>
              </div>
            </div>

            <?php

if(isset($_POST['submit'])){
  $user=mysqli_real_escape_string($connection,$_POST['username']);
  $pass=mysqli_real_escape_string($connection,$_POST['password']);
  
  if(empty($user)){
  echo "Empty";
  }
  
  else{
  $query="SELECT * FROM users WHERE name='{$user}' ";
  $result=mysqli_query($connection,$query);
  if(!$result){
  die("Failed". mysqli_error($connection));
  }
  while($row=mysqli_fetch_array($result)){
      $username=$row['name'];
      $password=$row['password'];
      $email=$row['email'];
      $id=$row['id'];
  }
  
if($user == $username){
  $_SESSION['name']= $username;
  $_SESSION['password']= $password;
  $_SESSION['email']= $email;

  
  header("Location: dashboard.php");
  }
   else if($user!=$username){
  header("Location: login.php");
  
  }
  
  }

}

?>
            <div class="card-body px-lg-5 py-lg-5">
              <div class="mb-4 text-center text-muted">
                <small>Or sign in with credentials</small>
    

              </div>
              <form role="form" method="POST">

                <div class="mb-3 form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" name="username" placeholder="Username" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control"  name="password" placeholder="Password" type="password">
                  </div>
                </div>
                <div class="custom-control custom-control-alternative custom-checkbox">
                  <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                  <label class="custom-control-label" for=" customCheckLogin">
                    <span class="text-muted">Remember me</span>
                  </label>
                </div>
              
                <div class="text-center form-group">

<input name="submit" class="my-4 btn btn-primary" value="Login" type="submit">
</div>
              </form>
            </div>
          </div>
          <div class="mt-3 row">
            <div class="col-6">
              <a href="#" class="text-light"><small>Forgot password?</small></a>
            </div>
            <div class="text-right col-6">
              <a href="#" class="text-light"><small>Create new account</small></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include "includes/footer.php"?>