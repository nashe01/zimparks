<?php include('../connection/dbcon.php'); ?>
<?php include('../session.php');?>
<?php

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$emplnumber = $_POST['emplnumber'];
$status = $_POST['status'];
$region =$_POST['region'];
$username =$firstname.'.'.$lastname;
$password=12345;


mysqli_query($conn,"insert into staff (username,password,firstname,lastname,emplnumber,status,region) values('$username','$password','$firstname','$lastname','$emplnumber','$status','$region')")or die(mysqli_error());
mysqli_query($conn,"insert into activity_log (date,username,action) values(NOW(),'$user_name','Registered new $status user - $username  ($region) Region')")or die(mysqli_error());

?>