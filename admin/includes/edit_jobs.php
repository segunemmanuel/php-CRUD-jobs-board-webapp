<?php
if(isset($_GET['c_id'])){
    $the_job_id=$_GET['c_id'];
$query= "SELECT * FROM jobs WHERE job_id= {$the_job_id}";
$result=mysqli_query($connection,$query);
if(!$result){
    die("Failed".mysqli_error($connection));
}

while($row=mysqli_fetch_array($result)){
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
    $job_content= $row['job_content'];
    $number = 1234.56;
    $english_format_number = number_format($job_salary);
}

}
?>
<h1>Edit Jobs</h1>
<form action="" method="post" enctype="multipart/form-data">
<div class="form-group">
    <label for="my-input">Title</label>
    <input id="my-input" class="form-control" type="text" value="<?php echo $job_title?>" name="title">
</div>
<div class="form-group">
    <label for="my-input">Category</label>

<select name="" id="" class="form-control">
<option value=""> </option>
    <?php
$query="SELECT * FROM category";
$result=mysqli_query($connection,$query);
if(!$result){
    die("Connection failed". mysqli_error($connection));
}
while($row=mysqli_fetch_array($result)){
    $cat_id=$row['cat_id'];
    $cat_title=$row['cat_title'];
    echo "<option value=''>{$cat_title}</option>";
}
?>
</select> 
</div>
<div class="form-group">
    <label for="my-input">Company</label>
    <input id="my-input" class="form-control" type="text"  value="<?php echo $job_company; ?> "  name="company">
</div>
<div class="form-group">
    <label for="my-input">Choose Location</label>
    <select name="states" id="select" class="form-control">
</select>
</div>
<div class="form-group">
    <label for="my-input">Date</label>
    <input id="my-input" class="form-control" type="text"   value="<?php echo $job_date; ?> "  name="date">
</div>


<div class="form-group">
    <label for="my-input">Salary</label>
    <input id="my-input" class="form-control" type="text"  value="<?php echo  $english_format_number ; ?> "  name="salary">
</div>



<div class="form-group">
    <label for="my-input">Edit image</label>
    <input id="my-input" class="form-control" type="file" name="image">
</div>


<div class="form-group">
    <label for="my-input">Description</label>
    <textarea  id="body" name="job_content"  cols="30" class="form-control"  value="<?php echo $job_content; ?> " rows="10"> 
    <?php echo $job_content; ?>
</textarea>
    
</div>


<div class="form-group">
    <label for="my-input">Job type</label>
    <input id="my-input" class="form-control" type="text" name="type">
</div>


<div class="form-group">
    <label for="my-input">Job status</label>
    <input id="my-input" class="form-control" type="text" name="status">
</div>

<div class="form-group">
<button type="submit" class="btn btn-primary" name="submit">Submit</button>
</div>

</form>

