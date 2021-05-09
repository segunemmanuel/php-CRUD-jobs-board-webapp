<?php

function uploadCV(){
 global $connection;
 if(isset($_POST['upload'])){
     $file = $_FILES['cv']['name'];
     $post_file_temp=$_FILES['cv']['tmp_name'];
     $size = $_FILES['cv']['size'];
     move_uploaded_file($post_file_temp,"uploads/$file");
     
 $query= "INSERT INTO files(name,size)";
 $query.="VALUES('{$file}','{$size}')";
 $result=mysqli_query($connection,$query);
 if(!$result){
     die("Error".mysqli_error($connection));
}
 else{
     echo "<script> alert('Upload succesful')</script>";
 }  
 header("Location:index.php");
 }
}

function selectCat(){
global $connection;
$query="SELECT * FROM category";
$result=mysqli_query($connection,$query);
if(!$result){
    die("Connection failed". mysqli_error($connection));
}
while($row=mysqli_fetch_array($result)){
    $cat_id=$row['cat_id'];
    $cat_title=$row['cat_title'];
echo     "<li><a href='cat_job_listing.php?source=$cat_id'>$cat_title</a></li>";
}
}

function select($good){
 global $connection;
$query= "SELCT * FROM $good";
$result=mysqli_query($connection,$query);

}



?>