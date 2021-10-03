<?php session_start();

include("../../handlers/connect.php");

$uid =$_GET['userid'];
$sql ="UPDATE  users SET status =1 where id = $uid";
if(mysqli_query ($conn , $sql)){
        $_SESSION['success'] = 'the user is updated successfully';
         header("location:../showusers.php");
     }
?>