<?php
if(isset($_POST['create_post'])){
$post_category_id=$_POST['category'];
$post_author=$_POST['author'];
$post_image=$_FILES['image']['name'];
$post_image_temp=$_FILES['post_image']['tmp_name'];
$post_content=$_POST['content'];
$post_status=$_POST['status'];
$post_tag=$_POST['tag'];



    
}

?>

<h3 class="text-center">Add a new post</h3>
<form action="" method="post" enctype="multipart/form-data">
<div class="form-group">
    <label for="my-input">Title</label>
    <input id="my-input" class="form-control" type="text" name="title">
</div>

<div class="form-group">
    <label for="my-input">Category</label>
<select name="category" id="" class="form-control">
    <?php
$query="SELECT * FROM blog_category";
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
    <label for="my-input">Author name</label>
    <input id="my-input" class="form-control" type="text" name="author">
</div>

<div class="form-group">
    <label for="my-input">Edit image</label>
    <input id="my-input" class="form-control" type="file" name="image">
</div>

<div class="form-group">
    <label for="my-input">Tags</label>
    <input id="my-input" class="form-control" type="text" name="tag">
</div>

<div class="form-group">
    <label for="my-input">Content</label>
    <textarea  id="body" name="content"  cols="30" class="form-control"  rows="10"> 
</textarea>
</div>

<div class="form-group">
    <label for="my-input">Post status</label>
    <select name="status" id="" class="form-control">
<option value="">Draft</option>
<option value="">Approve</option>
    </select>
  
</div>
<div class="form-group">
<button type="submit" class="btn btn-primary" name="create_post">Submit</button>
</div>
</form>

