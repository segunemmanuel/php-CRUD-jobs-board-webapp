<?php 

if(isset($_POST['create_job'])){

    
    $job_title = ($_POST['title']);
    $job_category_id = ($_POST['category']);
    $job_company = ($_POST['company']);
    $job_location= ($_POST['location']);
    $job_title = ($_POST['title']);























    
    $post_user=($_POST['post_user']);
    $post_tag=$_POST['post_tag'];
    $post_category_id=$_POST['post_category'];
    $post_status=$_POST['post_status'];
    $job_image=$_FILES['post_image']['name'];
    $post_image_temp=$_FILES['post_image']['tmp_name'];
    $post_content=$_POST['content'];
    $post_date=date('d-m-y');

    move_uploaded_file($post_image_temp,"../images/$post_image");
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
    <select name="states" id="select" class="form-control">
</select>
</div>
<div class="form-group">
    <label for="my-input">Date</label>
    <input id="my-input" class="form-control" type="text" name="date">
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
    <input id="my-input" class="form-control" type="text" name="type">
</div>


<div class="form-group">
    <label for="my-input">Job status</label>
    <input id="my-input" class="form-control" type="text" name="status">
</div>

<div class="form-group">
<button type="submit" class="btn btn-primary" name="creat_job">Submit</button>
</div>

</form>

