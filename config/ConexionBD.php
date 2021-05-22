<?php

$db_servername="localhost:3307";
$db_username="root";
$db_password="";
$db_name="agenda_telefonica";

$conn=new mysqli($db_servername,$db_username,$db_password,$db_name);
$conn->set_charset("utf8");

if($conn->connect_error){
    die("Connection failed:" .$conn->connect_error);

}else{
    
}
?>