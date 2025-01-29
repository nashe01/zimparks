 <?php
 include('../connection/dbcon.php');
 include('../session.php');
 $new_password  = $_POST['new_password'];
 mysqli_query($conn,"update staff set password = '$new_password' where staff_id = '$session_id'")or die(mysqli_error());
 ?>