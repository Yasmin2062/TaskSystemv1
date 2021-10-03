<?php session_start();

include("../../handlers/connect.php");

$tid =$_GET['taskid'];
$sql ="DELETE from tasks where id = $tid";
if(mysqli_query ($conn , $sql)){
        $_SESSION['success'] = 'the Task is deleted successfully';
         header("location:../showTask.php");
     }
?>