<?php include('../connection/dbcon.php'); ?>
<?php include('../session.php'); ?>
<?php		


$myid= $_POST['myid'];
mysqli_query($conn,"update staff set password = '12345' where staff_id = '$myid' ")or die(mysqli_error());
header('location:dashboard.php');

?>