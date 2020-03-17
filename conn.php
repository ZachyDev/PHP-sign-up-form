<?php
require_once('configure.php');
// connect to db
$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
// check if the connection was successful
if($conn){
    echo "Connected to the database" . "<br>";
}else{
    die("ERROR " . mysqli_connect_error());
}
?>