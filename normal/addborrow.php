<?php include('../session.php');?>
<?php include('../connection/dbcon.php'); ?>
<?php $mytin=$_GET['id'];?>
<?php
mysqli_query($conn,"insert into borrow_request (employee_number,username,tin_number,status,time) values('$empno','$user_name','$mytin','not_confirmed',NOW())")or die(mysqli_error());
mysqli_query($conn,"insert into activity_log (username,date,action) values('$user_name',NOW(),'requested to borrow file $mytin')")or die(mysqli_error());

?>
<script>
window.location = "borrow_file.php";
</script>
