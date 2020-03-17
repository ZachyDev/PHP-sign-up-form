<?php
    require_once('conn.php');
    // $query = "CREATE DATABASE student_record;";
    // if(mysqli_query($conn,$query)){
    //     echo "Database created successfully" . "<br>";
    // }else{
    //     echo "something went wrong while creating table" . "<br>";
    // }
      // create a table in a db
    //   $query_tb = "CREATE TABLE `student_record`.`stud` ( `id` INT(20) NOT NULL , `Username/Email` VARCHAR(20) NOT NULL , 
    //   `Gender` VARCHAR(6) NOT NULL , `Path` INT(20) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;";
    //   if(mysqli_query($conn,$query_tb)){
    //       echo "Created table successfully"."<br>";
    //   }else{
    //       echo "Something went wrong!"."<br>";
    //   }

     // get the form elements
     $email= $_POST['mail'];
     $age = $_POST['age'];
     $gender = $_POST['gender'];
     $path = $_POST['path'];
     // insert values into a table
     $query_select = "INSERT INTO `stud_register` (`Email`, `Age`, `Gender`, `Path`) VALUES ('$email', '$age', '$gender', '$path');";
     if(mysqli_query($conn,$query_select)){
         echo "sign up successful"."<br>";
     }else{
         echo "error in sign up";
     }       
?>