<?php include './includes/admin_head.php';?>
<div>
<?php include './includes/admin_nav.php';?>
          <div id="page-wrapper">
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Welcome to Categories
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="../index.php">View Categories  In Homepage</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Blank Page
                            </li>
                        </ol>
                    </div>



<div class="col-lg-12">
    <div class="col-lg-6">

    <?php
if(isset($_POST['submit'])){
    $cat_title=$_POST['category'];
    if($cat_title==" " || empty($cat_title)){
     echo "This field should not be empty";
    }
     else{
         $query= "INSERT INTO category(cat_title)";
         $query.= "VALUE('{$cat_title}') ";
         $Create_category_query=mysqli_query($connection,$query);
 header('location: categories.php');exit;
         if(!$Create_category_query){
             die('Error'.mysqli_error($connection));
         }
     }
}
?>
<form action="categories.php" method="post">
    <div class="form-group">
<label for="add_cat">Add a New Category</label>
<input type="text" name="category" class="form-control" required>
</div>
<div class="form-group">
<button class="btn btn-primary" name="submit">Add</button>
</div>

</form>


<?php
if(isset($_GET['edit'])){
    $cat_id=$_GET['edit'];
    include "includes/update_cat.php";
}
?>



</div>








<div class="col-lg-6">
<table class="table table-dark table-hover">
<thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Category Name</th>
      <th scope="col">Delete</th>
      <th scope="col">Edit</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php

$query="SELECT * FROM category";
$result=mysqli_query($connection,$query);
if(!$result){
    die("Connection failed". mysqli_error($connection));
}

while($row=mysqli_fetch_array($result)){
    $cat_id=$row['cat_id'];
    $cat_title=$row['cat_title'];
    echo "<tr>";
    echo "<td>{$cat_id}</td>";
    echo "<td>{$cat_title}</td>";
    echo "<td><a href='categories.php?delete={$cat_id}'>Delete</a></td>";
    echo "<td><a href='categories.php?edit={$cat_id}'>Edit</a></td>";
    echo "</tr>";
}
?>
  </tbody>
</table>
</div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
<?php
if(isset($_GET['delete'])){
    // $delete=$_GET['cat_id'];
$the_cat_id=$_GET['delete'];
$query="DELETE FROM category WHERE cat_id={$the_cat_id} ";
$delete_query=mysqli_query($connection,$query);
header('Location:categories.php');

}
?>


</body>
</html>