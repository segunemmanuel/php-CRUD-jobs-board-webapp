        <div class="col-lg-12">
        <table class="table table-responsive table-hover table-bordered">
  <thead">
    <tr>
      <th scope="col">Post ID</th>
      <th scope="col">TITLE</th>
      <th scope="col">IMAGE</th>
      <th scope="col">DATE</th>
      <th scope="col">EDIT</th>
      <th scope="col">DELETE</th>
    </tr>
  </thead>
  <tbody>
<?php

$query= "SELECT * FROM posts";
$result=mysqli_query($connection,$query);
if(!$result){
    die("failed".mysqli_error($connection));
}
$rs=mysqli_num_rows($result);
while($row = mysqli_fetch_assoc($result)){
    $post_id= $row['post_id'];
    $post_title= $row['post_title'];
    $post_author= $row['post_author'];
    $post_user= $row['post_user'];
    $post_date= $row['post_date'];
    $post_image= $row['post_image'];
    $post_content= $row['post_content'];
    $post_tags= $row['post_tags'];
    $post_comment= $row['post_comment_count'];
    $post_status= $row['post_status'];
    $post_views= $row['post_views'];
    
echo "<tr>";
    echo "<td>{$post_id}</td>";
    echo "<td>{$post_title}</td>";
    echo "<td>{$post_image}</td>";
    echo "<td>{$post_date}</td>";
    echo "<td><a href='posts.php?delete={$post_id}'>Delete</a></td>";
    echo "<td><a href='posts.php?source=edit_posts&&p_id={$post_id}'>Edit</a></td>";
    echo "</tr>";
}
?>
   
  </tbody>
</table>
        </div>
        <?php
if(isset($_GET['delete'])){
$the_job_id=$_GET['delete'];
$query="DELETE FROM posts WHERE post_id={$the_job_id} ";
$delete_query=mysqli_query($connection,$query);
header('Location:posts.php');

}
?>

