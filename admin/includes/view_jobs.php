
        <div class="col-lg-12">
        <table class="table table-responsive table-hover table-bordered">
  <thead">
    <tr>
      <th scope="col">S/N</th>
      <th scope="col">JOB ID</th>
      <th scope="col">TITLE</th>
      <th scope="col">COMPANY</th>
      <th scope="col">LOCATION</th>
      <th scope="col">DATE</th>
      <th scope="col">SALARY</th>
      <th scope="col">JOB TYPE</th>
      <th scope="col">JOB IMAGE</th>
      <th scope="col">EDIT</th>
      <th scope="col">DELETE</th>
    </tr>
  </thead>
  <tbody>
<?php

$query= "SELECT * FROM jobs";
$result=mysqli_query($connection,$query);


if(!$result){
    die("failed".mysqli_error($connection));
}
$rs=mysqli_num_rows($result);
while($row = mysqli_fetch_assoc($result)){
    $job_id= $row['job_id'];
    $job_location= $row['job_location'];
    $job_title= $row['job_title'];
    $job_cat_id= $row['job_category_id'];
    $job_company= $row['job_company'];
    $job_date= $row['job_date'];
    $job_image= $row['job_image'];
    $job_salary= $row['job_salary'];
    $job_type= $row['job_type'];
    $job_status= $row['job_status'];
    $job_views= $row['job_view'];
    $number = 1234.56;
    $english_format_number = number_format($job_salary);
// 1,235

echo "<tr>";
for($i=0;$i<=$rs;$i++);{
    echo "<td> $i </td>";
} 
    echo "<td>{$job_id}</td>";
    echo "<td>{$job_title} </td>";
    echo "<td>{$job_company} </td>";
    echo "<td>{$job_location} </td>";
    echo "<td>{$job_date}</td>";
    echo "<td> {$english_format_number} </td>";
    echo "<td>{$job_type}</td>";
    echo "<td>{$job_image}</td>";
    echo "<td><a href='jobs.php?delete={$job_id}'>Delete</a></td>";
    echo "<td><a href='jobs.php?source=edit_jobs&&c_id={$job_id}'>Edit</a></td>";
    echo "</tr>";
}
?>
   
  </tbody>
</table>
        </div>


        <?php
if(isset($_GET['delete'])){
$the_job_id=$_GET['delete'];
$query="DELETE FROM jobs WHERE job_id={$the_job_id} ";
$delete_query=mysqli_query($connection,$query);
header('Location:jobs.php');

}
?>

