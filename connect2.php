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
    $gender=$_REQUEST['gender']; 
    $patient_address=$_REQUEST['patient_address'];
    $email=$_REQUEST['email'];
    $pincode=$_REQUEST['pincode'];
    $problem=$_REQUEST['problem'];
    $doctor=$_REQUEST['doctor']; 
    $appointment__date=$_REQUEST['appointment_date']; 
    
$sql= "insert into data values('$patient_name','$patient_number','$gender','$patient_address','$email','$pincode','$problem','$doctor','$appointment__date')";

if($conn->query($sql)===TRUE){
    echo "We will call you back within 4hrs or feel free to reach us on newlifecare@gmail.com";
}else{
    echo "Error inserting data :".$conn->error;
}
$conn->close();
?>