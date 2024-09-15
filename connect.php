<?php

$host="sql100.infinityfree.com";
$user="root";
$pass="LbRA4NviIIAkVK";
$db="if0_37305149_Login_db";
$conn=new mysqli($host,$user,$pass,$db);
if($conn->connect_error){
    echo "Failed to connect DB".$conn->connect_error;
}
?>