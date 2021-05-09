<?php include 'includes/header.php';?>
<?php include 'includes/navbar.php';?>
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
                    <div class="col-lg-10">
                        <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                            <div class="row">
                              
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your full names'" placeholder="Enter your full names">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                    <select class="mb-3 form-select form-select-lg" aria-label=".form-select-lg example">
                                        <option selected>Enter the highest education attained</option>
                                            <option value="">Primary school</option>
                                            <option value="">Secondary school</option>
                                            <option value="">Bachelors</option>
                                            <option value="">Masters</option>
                                            <option value="">PhD</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="years" id="email" type="number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter work experience'" placeholder="Number of years of experience">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                    <select class="mb-3 form-select form-select-lg" aria-label=".form-select-lg example">
                                        <option selected>Enter availability</option>
                                            <option value="">Full time</option>
                                            <option value="">Part time</option>
                                            <option value="">Contract</option>
                                            <option value="">Remote</option>
                                        </select>

                                    </div>
                                </div>


                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="years" id="email" type="phone" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your phone number'" placeholder="Enter your phone number">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Cover letter'" placeholder="Cover letter"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="subject" id="subject" type="file" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Upload your CV'" placeholder="Upload your CV">
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 form-group">
                                <button type="submit" class="button button-contactForm boxed-btn">Send</button>
                            </div>
                        </form>
                    </div>
              
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
                              <li>Title : <span>Web developer</span></li>
                              <li>Posted date : <span>12 Aug 2019</span></li>
                              <li>Location : <span>New York</span></li>
                              <li>Vacancy : <span>02</span></li>
                              <li>Job nature : <span>Full time</span></li>
                              <li>Salary :  <span>$7,800 yearly</span></li>
                              <li>Application date : <span>12 Sep 2020</span></li>
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