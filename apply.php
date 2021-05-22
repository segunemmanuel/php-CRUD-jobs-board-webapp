<?php include 'includes/header.php';?>
<?php include 'includes/navbar.php';?>
<?php session_start(); ?>
    <main>
        <div class="slider-area ">
        <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/about.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="text-center hero-cap">
                            <h2></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- Hero Area End -->
        <!-- job post company Start -->
        <div class="job-post-company pt-120 pb-120">
            <div class="container">
                <div class="row justify-content-between">
                    <!-- Left Content -->
                    <div class="col-xl-7 col-lg-8">
                        <!-- job single -->
                        <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title">Apply for this job</h2>
                    </div>
                    <!-- Application -->
                    <?php include "includes/apply__form.php"?>
                </div>
                    </div>
                    <!-- Right Content -->
                    <div class="col-xl-4 col-lg-4">
                        <div class="post-details3 mb-50">
                            <!-- Small Section Tittle -->
                           <div class="small-section-tittle">
                               <h4>Job Overview</h4>
                           </div>
                          <ul>
                              <?php
                              if(isset($_GET['apply'])){
                                  $job_id=$_GET['apply'];
                                  $query=mysqli_query($connection,"SELECT * FROM jobs WHERE job_id= {$job_id}");
                                  if(!$query){
                                    //   die("Failed".mysqli_error($connection));
                                      header("location: 404.php");
                                      exit;
                                  }
                                  while($row=mysqli_fetch_assoc($query)){
                                  // $job_id=$row['job_id'];
                                  $job_title=$row['job_title'];
                                  $job_company=$row['job_company'];
                                  $job_location=$row['job_location'];
                                  $job_date=$row['job_date'];
                                  $job_salary=$row['job_salary'];
                                  $job_content=$row['job_content'];
                                  $job_type=$row['job_type'];
                                  $job_vacancy=$row['job_vacancy'];
                                  // $job_image=$row['job_image'];
                                  $number = 1234.56;
                                      $english_format_number = number_format($job_salary);
                              }
                            }

                            else if(!(isset($_GET['apply']))){
                                header("location: 404.php");
                                exit;

                            }



                           
                              ?>



                      


                              <li>Title : <span><?php  echo $job_title; ?></span></li>
                              <li>Posted date : <span><?php echo $job_date; ?></span></li>
                              <li>Location : <span><?php echo $job_location;?></span></li>
                              <!-- <li>Vacancy : <span>02</span></li> -->
                              <li>Job nature : <span><?php echo $job_type;?></span></li>
                              <li>Salary :  <span><?php echo $job_salary;?></span></li>
                              <!-- <li>Application date : <span>12 Sep 2020</span></li> -->
                          </ul>
                         <div class="apply-btn2">
                            <!-- <a href="#" class="btn">Apply Now</a> -->
                         </div>
                       </div>
                        <div class="post-details4 mb-50">
                            <!-- Small Section Tittle -->
                           <div class="small-section-tittle">
                               <h4>Company Information</h4>
                           </div>
                              <span>Colorlib</span>
                              <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                            <ul>
                                <li>Name: <span>Colorlib </span></li>
                                <li>Web : <span> colorlib.com</span></li>
                                <li>Email: <span>carrier.colorlib@gmail.com</span></li>
                            </ul>
                       </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- job post company End -->
    </main>
    <?php include "includes/footer2.php";?>