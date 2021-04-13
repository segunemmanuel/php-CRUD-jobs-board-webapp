<div class="home-blog-area blog-h-padding">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center section-tittle">
                            <span>Our latest blog</span>
                            <h2>Our recent news</h2>
                        </div>
                    </div>
                </div>
                <div class="row">


<?php
$qry = 'select * from posts order by post_id DESC LIMIT 2';
$allUserStatement = mysqli_prepare($connection,$qry);
 
mysqli_stmt_execute($allUserStatement);
 
$getResult = mysqli_stmt_get_result($allUserStatement);
 
while($row = mysqli_fetch_assoc($getResult)){
	// print_r($rows);
    $post_title=$row['post_title'];
    $post_id=$row['post_id'];
    $post_author=$row['post_author'];
    $post_date=$row['post_date'];
    $post_image=$row['post_image'];
    $post_content=$row['post_content'];
?>
<div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="home-blog-single mb-30">
                            <div class="blog-img-cap">
                                <div class="blog-img">
                                    <img src="assets/img/blog/home-blog1.jpg" alt="">
                                    <!-- Blog date -->
                                    <div class="text-center blog-date">
                                        <!-- <span><?Php echo $post_date; ?></span> -->
                                    </div>
                                </div>
                                <div class="blog-cap">
                                    <p>|   <?php echo $post_author; ?></p>
                                    <h3><a href="single-blog.php?p_id=<?php echo $post_id; ?>"><?php echo $post_title; ?></a></h3>
                                    <a href="single-blog.php" class="more-btn">Read more »</a>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    
    <?php             

}
                 ?>
                </div>
            </div>
        </div>