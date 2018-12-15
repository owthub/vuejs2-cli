<?php

//database configuration file
$Host = "localhost";
$DBname = "vueapis";
$Username = "root";
$Password = "root";

$connection = new mysqli($Host, $Username, $Password,$DBname);

if($connection->connect_errno){

   die("Invalid Database Connection");
}

?>
