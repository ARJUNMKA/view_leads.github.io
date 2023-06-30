<?php
$conn=new
mysqli('localhost','admin1','','');
if(!$conn){
    die("Sorry We Failed to connect".mysqli_connect_error());
}
?>