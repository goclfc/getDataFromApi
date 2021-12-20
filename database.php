<?php
$dbHost="localhost";
$dbUser="root";
$dbPass="";
$dbName="employee";

$conn=mysqli_connect($dbHost,$dbUser,$dbPass,$dbName);
if($conn){
    echo "success";
}
?>