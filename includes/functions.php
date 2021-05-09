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

?>