<?php session_start();
include("../../handlers/connect.php");
$name =$_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$password = password_hash($password, PASSWORD_DEFAULT );
$sql = "INSERT INTO  users (name,email, password) VALUES ('$name' ,'$email','$password')" ;



if (mysqli_query ($conn , $sql)){
   $_SESSION['success'] = 'user is added successfully';
    header("location:../addUser.php");
}



?>