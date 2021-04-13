<?Php  include 'includes/header.php';?>
<?php include 'includes/navbar.php';?>
   <!-- Hero Area Start-->
   <div class="slider-area ">
      <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/about.jpg">
          <div class="container">
              <div class="row">
                  <div class="col-xl-12">
                      <div class="text-center hero-cap">
                          <h2>Blog Details</h2>
                      </div>
                  </div>
              </div>
          </div>
      </div>
   </div>
   <!-- Hero Area End -->
   <!--================Blog Area =================-->

 
   <section class="blog_area single-post-area section-padding">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 posts-list">




            
<?php
 
 if(isset($_GET['p_id'])){
    $post_id=$_GET['p_id'];
$query= "SELECT * FROM posts WHERE post_id = $post_id ";
$result=mysqli_query($connection,$query);
if(!$result){
   die("Failed".mysqli_error($connection));
}
while($row = mysqli_fetch_assoc($result)){
	// print_r($rows);
    $post_title=$row['post_title'];
    $post_id=$row['post_id'];
    $post_author=$row['post_author'];
    $post_date=$row['post_date'];
    $post_image=$row['post_image'];
    $post_content=$row['post_content'];
    $post_category="Coming soon";
?>

<div class="single-post">
                  <div class="feature-img">
                     <img class="img-fluid" src="assets/img/blog/single_blog_1.png" alt="">
                  </div>
                  <div class="blog_details">
                     <h2><?php echo $post_title; ?></h2>
                     <ul class="mt-3 mb-4 blog-info-link">
                        <li><a href="#"><i class="fa fa-user"></i> <?php echo $post_category;?></a></li>
                        <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>
                     </ul>
                     <p class="excert">
                        <?php echo $post_content; ?>
                     </p>
                     <div class="quote-wrapper">
                        <div class="quotes">
                        <?php echo $post_content; ?>

                        </div>
                     </div>
                  </div>
               </div>



<?php

}
 }
?>
       


<!-- end of posts -->


               <div class="navigation-top">
                  <div class="text-center d-sm-flex justify-content-between">
                     <p class="like-info"><span class="align-middle"><i class="fa fa-heart"></i></span> Lily and 4
                        people like this</p>
                     <div class="my-2 text-center col-sm-4 my-sm-0">
                        <!-- <p class="comment-count"><span class="align-middle"><i class="fa fa-comment"></i></span> 06 Comments</p> -->
                     </div>
                     <ul class="social-icons">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fab fa-behance"></i></a></li>
                     </ul>
                  </div>
                  <div class="navigation-area">
                     <div class="row">
                        <div class="flex-row col-lg-6 col-md-6 col-12 nav-left d-flex justify-content-start align-items-center">
                           <?php
                           $prev_post_id = $post_id-1;
                           $msg="";
                           if ($prev_post_id==0 || ""){
                            echo  "<h4> No older posts </h4>";
                           }
                           else{
                           $prev_post=mysqli_query($connection,"SELECT * FROM posts WHERE post_id = $prev_post_id");
                           while($row=mysqli_fetch_assoc($prev_post)){
                              $new_prev_post=$row['post_title'];
                           }
                           ?>
                             <div class="thumb">
                              <a href="#">
                                 <img class="img-fluid" src="assets/img/post/preview.png" alt="">
                              </a>
                           </div>
                           <div class="arrow">
                           <a href="single-blog.php?p_id=<?php echo $prev_post_id;?>">
                                 <span class="text-white lnr ti-arrow-left"></span>
                              </a>
                           </div>
                           <div class="detials">
                           <p>Prev Post</p>
                           <a href="single-blog.php?p_id=<?php echo $prev_post_id;?>">
                              <h4><?php echo $new_prev_post ?></h4>
                           </a>
                        </div>
<?php                        }
                           ?>
                       
                        </div>
                        <div  class="flex-row col-lg-6 col-md-6 col-12 nav-right d-flex justify-content-end align-items-center">
                           <?php
                           $next_post_id=$post_id + 1;
                           $qry=mysqli_query($connection,"SELECT * FROM posts");
                        $fuck= mysqli_num_rows($qry);
                        if($next_post_id > $fuck){
                           echo  "<h4> No new posts </h4>";

                        }
                        else{
                           $next_post=mysqli_query($connection,"SELECT * FROM posts WHERE post_id = $next_post_id");
                           while($row=mysqli_fetch_assoc($next_post)){
                              $new_next_post=$row['post_title'];
?>
                              <div class="detials">
                              <p>Next Post</p>
                                   <a href="single-blog.php?p_id=<?php echo $next_post_id; ?>">
                                         <h4><?php echo $new_next_post;?></h4>
                                            </a>
                           </div>
                           <div class="arrow">
                           <a href="single-blog.php?p_id=<?php echo $prev_post_id;?>">
                                 <span class="text-white lnr ti-arrow-right"></span>
                              </a>
                           </div>
                           <div class="thumb">
                              <a href="#">
                                 <img class="img-fluid" src="assets/img/post/next.png" alt="">
                              </a>
                           </div>
                           <?php        }

                   }

                           ?>
                         
                        </div>
                     </div>
                  </div>
               </div>
               <div class="blog-author">
                  <div class="media align-items-center">
                     <img src="assets/img/blog/author.png" alt="">
                     <div class="media-body">
                           <h4><?php echo $post_author;?> </h4>
                        </a>
                        <p>Second divided from form fish beast made. Every of seas all gathered use saying you're, he
                           our dominion twon Second divided from</p>
                     </div>
                  </div>
               </div>
               <div class="comments-area">
                  <h4>05 Comments</h4>
                  <div class="comment-list">
                     <div class="single-comment justify-content-between d-flex">
                        <div class="user justify-content-between d-flex">
                           <div class="thumb">
                              <img src="assets/img/comment/comment_1.png" alt="">
                           </div>
                           <div class="desc">
                              <p class="comment">
                                 Multiply sea night grass fourth day sea lesser rule open subdue female fill which them
                                 Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser
                              </p>
                              <div class="d-flex justify-content-between">
                                 <div class="d-flex align-items-center">
                                    <h5>
                                       <a href="#">Emilly Blunt</a>
                                    </h5>
                                    <p class="date">December 4, 2017 at 3:12 pm </p>
                                 </div>
                                 <div class="reply-btn">
                                    <a href="#" class="btn-reply text-uppercase">reply</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="comment-list">
                     <div class="single-comment justify-content-between d-flex">
                        <div class="user justify-content-between d-flex">
                           <div class="thumb">
                              <img src="assets/img/comment/comment_2.png" alt="">
                           </div>
                           <div class="desc">
                              <p class="comment">
                                 Multiply sea night grass fourth day sea lesser rule open subdue female fill which them
                                 Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser
                              </p>
                              <div class="d-flex justify-content-between">
                                 <div class="d-flex align-items-center">
                                    <h5>
                                       <a href="#">Emilly Blunt</a>
                                    </h5>
                                    <p class="date">December 4, 2017 at 3:12 pm </p>
                                 </div>
                                 <div class="reply-btn">
                                    <a href="#" class="btn-reply text-uppercase">reply</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="comment-list">
                     <div class="single-comment justify-content-between d-flex">
                        <div class="user justify-content-between d-flex">
                           <div class="thumb">
                              <img src="assets/img/comment/comment_3.png" alt="">
                           </div>
                           <div class="desc">
                              <p class="comment">
                                 Multiply sea night grass fourth day sea lesser rule open subdue female fill which them
                                 Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser
                              </p>
                              <div class="d-flex justify-content-between">
                                 <div class="d-flex align-items-center">
                                    <h5>
                                       <a href="#">Emilly Blunt</a>
                                    </h5>
                                    <p class="date">December 4, 2017 at 3:12 pm </p>
                                 </div>
                                 <div class="reply-btn">
                                    <a href="#" class="btn-reply text-uppercase">reply</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="comment-form">
                  <h4>Leave a Reply</h4>
                  <form class="form-contact comment_form" action="#" id="commentForm">
                     <div class="row">
                        <div class="col-12">
                           <div class="form-group">
                              <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9"
                                 placeholder="Write Comment"></textarea>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group">
                              <input class="form-control" name="name" id="name" type="text" placeholder="Name">
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group">
                              <input class="form-control" name="email" id="email" type="email" placeholder="Email">
                           </div>
                        </div>
                        <div class="col-12">
                           <div class="form-group">
                              <input class="form-control" name="website" id="website" type="text" placeholder="Website">
                           </div>
                        </div>
                     </div>
                     <div class="form-group">
                        <button type="submit" class="button button-contactForm btn_1 boxed-btn">Send Message</button>
                     </div>
                  </form>
               </div>
            </div>
<!-- end of posts -->
 <?php include 'includes/side-blog.php';?>
         </div>
      </div>
   <!--================ Blog Area end =================-->

<!-- JS here -->
	<?php include 'includes/footer.php';?>