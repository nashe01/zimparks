
<?php
	include("../admin/dbcon.php");
	include("function.php");
	
	if (isset($_POST['read'])){
$id=$_POST['selector'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	mysqli_query($conn,"UPDATE borrow_request SET status = 'confirmed' where not_id ='$id'")or die(mysqli_error());
	}
?>
<script>
window.location = 'borrow_request.php';
</script>
<?php
}
?>