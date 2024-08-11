<?php

$connect=mysqli_connect('localhost','root','','data');



$name=$_POST['name'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$email=$_POST['email'];
$password=$_POST['password'];
$accno=$_POST['accno'];
$insert = mysqli_query($connect, "INSERT INTO form (name, phone, address, email, password, accno )VALUES ('$name', '$phone', '$address','$email','$password','$accno')");

if($insert==true){

    echo "Form submitted successfully";
}
else{
    echo " error ";
}
?>