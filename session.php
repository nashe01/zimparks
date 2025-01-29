<?php
//Start session
session_start();
//Check whether the session variable SESS_MEMBER_ID is present or not
if (!isset($_SESSION['id']) || ($_SESSION['id'] == '')) {
    header("location: index.php");
    exit();
}

$session_id=$_SESSION['id'];
$query= mysqli_query($conn,"select * from staff where staff_id = '$session_id'")or die(mysqli_error());
	$row = mysqli_fetch_array($query);
	$empno = $row['emplnumber'];
	$user_name=$row['username'];
	$staff_region=$row['region'];
?>