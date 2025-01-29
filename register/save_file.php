<?php include('../connection/dbcon.php'); ?>
<?php include('../session.php');?>
<?php
$tin_number = $_POST['tin_number'];
$file_name= $_POST['file_name'];
$file_type =$_POST['file_type'];
$file_category=$_POST['file_category'];
$trade_name=$_POST['trade_name'];
$block=$_POST['block_name'];

	mysqli_query($conn,"insert into file (tin_number,file_name,status,file_type,file_category,trade_name,block,region) values('$tin_number','$file_name','returned','$file_type','$file_category','$trade_name','$block','$staff_region')")or die(mysqli_error());
	mysqli_query($conn,"insert into activity_log (date,username,action) values(NOW(),'$user_name', 'registered file $tin_number with name $file_name for $staff_region Region')")or die(mysqli_error());


?>
