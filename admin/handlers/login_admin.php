<?php session_start() ;
include("../../handlers/connect.php");

$email = $_POST['email'] ;
$password = $_POST['password'] ;
$sql = "SELECT * FROM admins WHERE email = '$email'" ;
$query = mysqli_query($conn , $sql);
$adminData= mysqli_fetch_array($query);

$count = mysqli_num_rows($query);
if ($count > 0){
   if (password_verify($password ,$adminData['password'])){
    $_SESSION['id']= $adminData ['id'];
    header("location:../addUser.php");

   }else{
    $_SESSION['error']= "invalid email";
    header("location:../login.php");
   }

}else{
    $_SESSION['error']= "invalid email";
    header("location:../login.php");
}




?>