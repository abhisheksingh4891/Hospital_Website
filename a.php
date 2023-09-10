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
// $sql="CREATE TABLE appointment(
//     patient_name varchar(30),
//     patient_number int(20),
//     gender varchar(10),
//     patient_address varchar(100),
//     email varchar(30),
//     pincode int(20),
//     problem varchar(200),
//     doctor varchar(20),
//     appointment_date date,
//     PRIMARY KEY (patient_name)
// )";

//     $patient_name=$_REQUEST['patient_name'];
//     $patient_number=$_REQUEST['patient_number'];
//     $gender=$_REQUEST['gender']; 
//     $patient_address=$_REQUEST['patient_address'];
//     $email=$_REQUEST['email'];
//     $pincode=$_REQUEST['pincode'];
//     $problem=$_REQUEST['problem'];
//     $doctor=$_REQUEST['doctor']; 
//     $appointment__date=$_REQUEST['appointment_date']; 
// $sql= "insert into appointment values('$patient_name','$patient_number','$gender','$patient_address','$email','$pincode','$problem','$doctor','$appointment__date')";

$sql="describe appointment";
if($conn->query($sql)===TRUE){
    echo "APPOINTMENT FORM SUBMITTED";
}else{
    echo "Error inserting data :".$conn->error;
}
$conn->close();
?>