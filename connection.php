<?php
$s="localhost";
$user="root";
$pass="";
$db="college";

$conn= mysqli_connect($s,$user,$pass,$db);
if($conn)
    echo "connection successfull";
else
    echo "not connected";
?>