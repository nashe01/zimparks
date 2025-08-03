<?php include('../connection/dbcon.php'); ?>
<?php include('../session.php'); ?>

<?php		
$myid= $_POST['myid1'];
$tin_number = $_POST['tin_number1'];
$file_name = $_POST['file_name1'];
$trade_name=$_POST['trade_name1'];
$file_type=$_POST['file_type1'];
$file_category=$_POST['file_category1'];
$block=$_POST['block_name1'];

mysqli_query($conn,"update file set tin_number = '$tin_number' ,file_name = '$file_name',trade_name='$trade_name',file_type='$file_type',file_category='$file_category',block='$block' where file_id = '$myid' ")or die(mysqli_error());
mysqli_query($conn,"insert into activity_log (date,username,action) values(NOW(),'$user_name','Edit File $file_name with TIN Number $tin_number for $staff_region Region')")or die(mysqli_error());
header('location:file.php');
?>