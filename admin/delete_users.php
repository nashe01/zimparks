<?php
include('admin/dbcon.php');
if (isset($_POST['delete_user'])){
$id=$_POST['selector'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	$result = mysqli_query($conn,"DELETE FROM staff where staff_id='$id[$i]'");
}
header("location: admin_user.php");
}
?>