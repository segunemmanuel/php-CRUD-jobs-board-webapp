<?php ob_start();?>
<?php
// USE THIS METHOD
$db["db_host"]="localhost";
$db["db_user"]="root";
$db["db_pass"]="";
$db["db_name"]="jobs";

foreach($db as $key => $value){
    define(strtoupper($key),$value);
} 



// Pocedural
$connection=mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
if($connection){
    // echo "We are connected";
}





?>