<?php 
if(isset($_POST['create_job'])){
    $job_category_id = $_POST['category'];
    $job_company = $_POST['company'];
    $job_location= $_POST['location'];
    $job_title = $_POST['title'];
    $job_salary=$_POST['salary'];
    $job_image=$_FILES['image']['name'];
    $job_image_temp=$_FILES['image']['tmp_name'];
    $job_content= $_POST['job_content'];
    $job_status= $_POST['status'];
    $job_type= $_POST['type'];
    $job_date=date('d-m-y');
    move_uploaded_file($job_image_temp,"./images/$job_image");
    $query="INSERT INTO jobs(job_title,job_category_id,job_company,job_location,job_date,job_salary,job_image,job_content,job_type,job_status) ";
    $query.="VALUES ('{$job_title}','{$job_category_id}','{$job_company}','{$job_location}',now(),'{$job_salary}','{$job_image}','{$job_content}','{$job_type}','{$job_status}') ";
$result=mysqli_query($connection,$query);
if(!$result){
    die("Failed".mysqli_error("$connection"));
}
$job_id= mysqli_insert_id($connection );
echo "<p class='bg-success'> Job added:" . " ". "<a href='../jobs.php?c_id={$job_id}'>View job </a>or <a href='jobs.php'>Edit More </a> </p>";
}

?>

<h3 class="text-center">Add a new job posting</h3>
<form action="" method="post" enctype="multipart/form-data">
<div class="form-group">
    <label for="my-input">Title</label>
    <input id="my-input" class="form-control" type="text" name="title">
</div>
<div class="form-group">
    <label for="my-input">Category</label>

<select name="category" id="" class="form-control">
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
    <input id="my-input" class="form-control" type="text" name="company">
</div>
<div class="form-group">
    <label for="my-input">Choose Location</label>
    <select name="location" id="select" class="form-control">
    <option>ABUJA FCT</option>
<option>ABIA</option>
<option>ADAMAWA</option>
<option>AKWA IBOM</option>
<option>ANAMBRA</option>
<option>BAUCHI</option>
<option>BAYELSA</option>
<option>BENUE</option>
<option>BORNO</option>
<option>CROSS RIVER</option>
<option>DELTA</option>
<option>EBONYI</option>
<option>EDO</option>
<option>EKITI</option>
<option>ENUGU</option>
<option>GOMBE</option>
<option>IMO</option>
<option>JIGAWA</option>
<option>KADUNA</option>
<option>KANO</option>
<option>KATSINA</option>
<option>KEBBI</option>
<option>KOGI</option>
<option>KWARA</option>
<option>LAGOS</option>
<option>NASSARAWA</option>
<option>NIGER</option>
<option>OGUN</option>
<option>ONDO</option>
<option>OSUN</option>
<option>OYO</option>
<option>PLATEAU</option>
<option>RIVERS</option>
<option>SOKOTO</option>
<option>TARABA</option>
<option>YOBE</option>
<option>ZAMFARA</option>
</select>
</div>
<div class="form-group">
    <label for="my-input">Salary</label>
    <input id="my-input" class="form-control" type="text" name="salary">
</div>
<div class="form-group">
    <label for="my-input">Edit image</label>
    <input id="my-input" class="form-control" type="file" name="image">
</div>
<div class="form-group">
    <label for="my-input">Description</label>
    <textarea  id="body" name="job_content"  cols="30" class="form-control"  rows="10"> 
</textarea>
    
</div>
<div class="form-group">
    <label for="my-input">Job type</label>
    <select name="type"  class="form-control form-select form-select-sm btn btn-mini">
<option value="Full-time">Full-time</option>
<option value="Part-time">Part-time</option>
<option value="Contract">Contract</option>
    </select>
</div>



<div class="form-group">
    <label for="my-input">Job status</label>
    <select name="status" id="" class="form-control">
<option value="">Draft</option>
<option value="">Approve</option>

    
    </select>
  
</div>
<div class="form-group">
<button type="submit" class="btn btn-primary" name="create_job">Submit</button>
</div>

</form>

