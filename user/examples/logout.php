<?php

if(isset($_SESSION['name'])){
session_unset();

session_destroy();
header("Location: 404.php");
}
else{
    "You are stil logged in";
}

?>
