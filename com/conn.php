<?php
//error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$database = "university";
 
$con = mysqli_connect($servername,$username,$password,$database);

if($con){
    //echo "success.<br>";
}
else{
    echo "failed".mysqli_connect_error();
}






?>