<?php

   include './config.php';

   $method = $_SERVER['REQUEST_METHOD'];

   if($method=="POST"){
      // this is for insert data
   }else if($method=="GET"){

       $action = isset($_GET['action']) ? $_GET['action']: "";

       if($action == "list"){
           // this is listing of all data
       }else if($action == "edit"){
           // this is for edit operation
       }else if($action == "delete"){
           // this is for delete operation
       }
   }

?>
