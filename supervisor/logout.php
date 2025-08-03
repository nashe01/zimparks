<?php
include('../connection/dbcon.php');
include('../session.php');
mysqli_query($conn,"insert into activity_log (date,username,action) values(NOW(),'$user_name','logged out')")or die(mysqli_error());
mysqli_query($conn,"update staff set online = 'no'  where staff_id = '$session_id' ")or die(mysqli_error());
 session_destroy();
header('location:../index.php'); 
?>