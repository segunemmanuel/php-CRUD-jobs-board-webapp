<?php
function loginUser(){
    global $connection;
$user=mysqli_real_escape_string($connection,$_POST['username']);
$pass=mysqli_real_escape_string($connection,$_POST['password']);

$msg=array("Empty name ", "Incorrect", " ");
if(empty($user)){
echo $msg[0];
}

else{
$query="SELECT * FROM users WHERE name='{$user}' ";

$result=mysqli_query($connection,$query);
if(!$result){
die("Failed". mysqli_error($connection));
}
while($row=mysqli_fetch_array($result)){
    $username=$row['name'];
    $password=$row['password'];
    $email=$row['email'];
}

if($user == $username){
    $_SESSION['name']=$username;
    header("Location: dashboard.php");
}
else{
    echo $msg[1];
header("Location: login.php");

}

}

}


?>