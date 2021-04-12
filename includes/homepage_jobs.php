
<div class="row justify-content-center">
<div class="col-xl-10">
<?php
$query =mysqli_query($connection,"SELECT * FROM jobs LIMIT 4");
if(!$query){
    die("Failed".mysqli_error($connection));
}
else{
    echo "Good job";
}


while($row=mysqli_fetch_assoc($query)){
$job_id=$row['job_id'];
$job_title=$row['job_title'];
$job_company=$row['job_company'];
$job_location=$row['job_location'];
$job_date=$row['job_date'];
$job_salary=$row['job_salary'];
$job_content=$row['job_content'];
$job_type=$row['job_type'];
// $job_image=$row['job_image'];
$number = 1234.56;
    $english_format_number = number_format($job_salary);


?>

<div class="single-job-items mb-30">
                            <div class="job-items">
                                <div class="company-img">
                                    <a href="job_details.php?source=<?php echo $job_id; ?>"><img src="assets/img/icon/job-list1.png" alt=""></a>
                                </div>
                                <div class="job-tittle">
                                    <a href="job_details.php?source=<?php echo $job_id; ?>"><h4><?php echo $job_title?></h4></a>
                                    <ul>
                                        <li><?php echo $job_company; ?></li>
                                        <li><i class="fas fa-map-marker-alt"></i><?php echo $job_location; ?></li>
                                        <li><?php echo $english_format_number; ?>NGN</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="items-link f-right">
                                <a href="job_details.php?source=<?php echo $job_id; ?>"><?php echo $job_type?></a>
                                <span><?php echo $job_date; ?></span>
                            </div>
                        </div>


<?php

    
}
?>





                        <!-- single-job-content -->
                        
                     
                    </div>
                </div>