<?php

$sql ="SELECT tasks.id as taskid , title, body, users.id as userid, name , tasks.status as tstatus  FROM tasks JOIN users on users.id = tasks.user_id " ;
$queryGetTasks = mysqli_query($conn , $sql);


?>