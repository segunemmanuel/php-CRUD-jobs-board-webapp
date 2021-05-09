<?php include 'includes/header.php';?>
<?php include 'includes/navbar.php';?>

<main>

<!-- Hero Area Start-->
<div class="slider-area ">
<div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/about.jpg">
<div class="container">
<div class="row">
<div class="col-xl-12">
<div class="text-center hero-cap">
<h2>Get your job</h2>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Hero Area End -->
<!-- Job List Area Start -->
<div class="job-listing-area pt-120 pb-120">
<div class="container">
<div class="row">
<!-- Left content -->
<div class="col-xl-3 col-lg-3 col-md-4">
<div class="row">
<div class="col-12">
<div class="small-section-tittle2 mb-45">
<div class="ion"> <svg 
xmlns="http://www.w3.org/2000/svg"
xmlns:xlink="http://www.w3.org/1999/xlink"
width="20px" height="12px">
<path fill-rule="evenodd"  fill="rgb(27, 207, 107)"
d="M7.778,12.000 L12.222,12.000 L12.222,10.000 L7.778,10.000 L7.778,12.000 ZM-0.000,-0.000 L-0.000,2.000 L20.000,2.000 L20.000,-0.000 L-0.000,-0.000 ZM3.333,7.000 L16.667,7.000 L16.667,5.000 L3.333,5.000 L3.333,7.000 Z"/>
</svg>
</div>
<h4>Filter Jobs</h4>
</div>
</div>
</div>
<!-- Job Category Listing start -->
<?php include "includes/sidebar.php";?>
<!-- Job Category Listing End -->
</div>
<!-- Right content -->
<div class="col-xl-9 col-lg-9 col-md-8">
<!-- Featured_job_start -->
<section class="featured-job-area">
<div class="container">
<!-- Count of Job list Start -->
<div class="row">
<div class="col-lg-12">
<div class="count-job mb-35">
<span>39, 782 Jobs found</span>
<!-- Select job items start -->
<div class="select-job-items">
<span>Sort by</span>
<select name="select">
<option value="">None</option>
<option value="">job list</option>
<option value="">job list</option>
<option value="">job list</option>
</select>
</div>
<!--  Select job items End-->
</div>
</div>
</div>
<!-- Count of Job list End -->
<!-- single-job-content -->




<?php
if(isset($_GET['source'])){
$cat_id=$_GET['source'];
$query="SELECT * FROM jobs WHERE job_category_id= {$cat_id}";
$result=mysqli_query($connection,$query);
if(!$result){
    die("Error".mysqli_error($connection));
}
while($row=mysqli_fetch_assoc($result)){
$job_id=$row['job_id'];
$job_title=$row['job_title'];
$job_company=$row['job_company'];
$job_location=$row['job_location'];
$job_date=$row['job_date'];
$job_salary=$row['job_salary'];
$job_content=$row['job_content'];
$job_type=$row['job_type'];
$job_image=$row['job_image'];
$number = 1234.56;
$english_format_number = number_format($job_salary);


?>

<div class="single-job-items mb-30">
<div class="job-items">
<div class="company-img">
<a href="#"><img src="./admin/images/<?php echo $job_image; ?>" width='70'  alt=""></a>
</div>
<div class="job-tittle job-tittle2">
<a href="job_details.php?source=<?php echo $job_id; ?>">
<h4><?php echo $job_title;?></h4>
</a>
<ul>
<li><?php echo $job_company; ?> </li>
<li><i class="fas fa-map-marker-alt"></i>Athens, Greece</li>
<li><?php echo $english_format_number; ?></li>
</ul>
</div>
</div>
<div class="items-link items-link2 f-right">
<a href="job_details.html"><?php echo $job_type; ?></a>
<span>7 hours ago</span>
</div>
</div>
</div>
</section>
<!-- Featured_job_end -->
</div>
</div>


<?php }
}

?>

</div>
</div>
<!-- Job List Area End -->
<!--Pagination Start  -->
<div class="text-center pagination-area pb-115">
<div class="container">
<div class="row">
<div class="col-xl-12">
<div class="single-wrap d-flex justify-content-center">
<nav aria-label="Page navigation example">
<ul class="pagination justify-content-start">
<li class="page-item active"><a class="page-link" href="#">01</a></li>
<li class="page-item"><a class="page-link" href="#">02</a></li>
<li class="page-item"><a class="page-link" href="#">03</a></li>
<li class="page-item"><a class="page-link" href="#"><span class="ti-angle-right"></span></a></li>
</ul>
</nav>
</div>
</div>
</div>
</div>
</div>
<!--Pagination End  -->

</main>
<?php include "includes/footer.php"?> 