<?php session_start();

include("../../handlers/connect.php");

$tid =$_GET['taskid'];
$sql ="UPDATE  tasks SET status =1 where id = $tid";
if(mysqli_query ($conn , $sql)){
        $_SESSION['success'] = 'the task is updated successfully';
         header("location:../showTask.php");
     }
?>