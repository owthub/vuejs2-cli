<?php

   include './config.php';

   // header functions to allow these apis consumed by Yaf_Application
   header("Access-Control-Allow-Origin: *");
   header("Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With");

   $method = $_SERVER['REQUEST_METHOD'];

   if($method=="POST"){
      // this is for insert data
      $bodyParams = json_decode(file_get_contents("php://input"),true);

      $action = $bodyParams['action'];

      if($action=="insert"){
         // insertion
         // $bodyParams->email => $bodyParams['email']
         $name = isset($bodyParams['name']) ? $bodyParams['name'] :"";
         $email = isset($bodyParams['email']) ? $bodyParams['email'] :"";
         $phone = isset($bodyParams['phone']) ? $bodyParams['phone'] :"";

         $insertQuery = "Insert into students (name, email, phone_no) values ('".$name."','".$email."','".$phone."')";

         if($connection->query($insertQuery)===TRUE){
             echo json_encode(array(
               "status"=>1,
               "message"=>"Values has been inserted"
             ));
         }else{
           echo json_encode(array(
             "status"=>0,
             "message"=>"Failed to insert value"
           ));
         }
      }else if($action=="update"){
          // updation
          //$bodyParams = json_decode(file_get_contents("php://input"),true);
          // $bodyParams->email => $bodyParams['email
          $student_id = isset($bodyParams['student_id']) ? intval($bodyParams['student_id']) :"";
          $name = isset($bodyParams['name']) ? $bodyParams['name'] :"";
          $email = isset($bodyParams['email']) ? $bodyParams['email'] :"";
          $phone = isset($bodyParams['phone']) ? $bodyParams['phone'] :"";

          $updateQuery = "Update students SET name = '".$name."', email = '".$email."', phone_no = '".$phone."' WHERE id = ".$student_id;

          if($connection->query($updateQuery)===TRUE){
              echo json_encode(array(
                "status"=>1,
                "message"=>"Record has been updated"
              ));
          }else{
            echo json_encode(array(
              "status"=>0,
              "message"=>"Failed to update record"
            ));
          }
      }
   }else if($method=="GET"){

       $action = isset($_GET['action']) ? $_GET['action']: "";

       if($action == "list"){

          $id = isset($_GET['id']) ? intval($_GET['id']):'';

           // this is listing of all data
           if(!empty($id)){
             // not empty means id has some value
             $showQuery = "SELECT * from students WHERE id = ".$id;
           }else{
             // id is empty
             $showQuery = "SELECT * from students";
           }

           $result = $connection->query($showQuery);

           if($result->num_rows > 0){
               // we have data
               $row_data = array();
               while($row = $result->fetch_assoc()){
                   $row_data[] = $row;
                   // array_push($row_data,$row);
               }
               echo json_encode(array(
                 "status"=>1,
                 "message"=>"Found data",
                 "records"=> $row_data
               ));
           }else{
             //we have no data
             echo json_encode(array(
               "status"=>0,
               "message"=>"No Data found"
             ));
           }


       }else if($action == "delete"){
           // this is for delete operation
           $id = isset($_GET['id']) ? intval($_GET['id']): '';

           if(!empty($id)){

              $deleteQuery = "DELETE from students WHERE id = ".$id;

              if($connection->query($deleteQuery)===TRUE){

                echo json_encode(array(
                  "status"=>1,
                  "message"=>"record deleted successfully"
                ));
              }else{
                echo json_encode(array(
                  "status"=>0,
                  "message"=>"Failed to delete"
                ));
              }
           }else{
              echo json_encode(array(
                "status"=>0,
                "message"=>"ID is needed"
              ));
           }
       }
   }

?>
