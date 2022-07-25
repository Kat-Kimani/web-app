<?php

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$homeaddress = $_POST['homeaddress'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];


//Database connection
$conn= new mysqli('localhost','root','', 'daisy_househelps');
if($conn->connect_error){

die('connection failed : ' .$conn->connect_error);
}  
else {
 
$stmt = $conn->prepare ("insert into househelps (firstname,lastname, homeaddress, phone, gender) VALUES($firstname,$lastname,$homeaddress,$phone,$gender)");
  
$stmt-> execute();
echo "Registered Successfully";
$stmt-> close();
$conn->close();


}

?>