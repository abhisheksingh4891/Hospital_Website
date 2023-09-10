
<?php

$servername="localhost";
$username="root";
$password="";
$db="patient_data";

// create connection

$conn = new mysqli($servername,$username,$password,$db);

// check connection
if($conn->connect_error){
    die("Connection failed :".$conn->connect_error);
    
}

    $patient_name=$_REQUEST['patient_name'];
    $patient_number=$_REQUEST['patient_number'];
    $email=$_REQUEST['email'];
    $department=$_REQUEST['department'];
    $patient_message=$_REQUEST['patient_message'];
    
$sql= "insert into feed values('$patient_name','$patient_number','$email','$department','$patient_message')";

// $sql= "CREATE TABLE feed(
//     patient_name varchar(50),
//     patient_number int(30),
//     email varchar(50),
//     department varchar(50),
//     patient_message varchar(50)
// )";
if($conn->query($sql)===TRUE){
    echo "THANK YOU FOR YOUR FEEDBACK";
}else{
    echo "Error inserting data :".$conn->error;
}
$conn->close();
?>