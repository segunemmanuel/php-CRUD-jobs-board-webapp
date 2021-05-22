<?php

function applyForm($apply){
     global $connection;
        $query=mysqli_query($connection,"SELECT * FROM jobs WHERE job_id= {$apply}");
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





?>