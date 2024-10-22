<?php

$host="localhost";
$user="root";
$pass="";
$db="srividhyausers";
$conn=new mysqli("localhost","root","","srividhyausers");
if($conn->connect_error){
    echo "failed to connect db".$conn->connect_error;

}




?>