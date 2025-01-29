<?php $tin_number=$_GET['id'];
		$mytin = $tin_number;
?>
<?php include('../connection/dbcon.php'); ?>
<?php include('header2.php'); ?>
<?php include('../session.php'); ?>
<?php include('navbar.php'); ?>
<?php
									$user_query = mysqli_query($conn,"select * from file where tin_number = '$mytin'")or die(mysqli_error());
									while($row = mysqli_fetch_array($user_query)){
													$myfile=$row['file_name'];
									}	?>	
	<br>
	<br>
	<br>

    <body id="login">
    <div class="container">
		
          												
								          <form id="change_password" class="form-signin" method="post">
										 <h3 class="form-signin-heading"><i class=""></i>  BORROW FILE? </h3>
										<div class="control-group">
											<label class="control-label" for="" color="blue">TIN NUMBER:  <?php echo $mytin;?></label>
											
									
											
										</div>
										<div class="control-group">
											<label class="control-label" for="" color="blue">FILE NAME:  <?php echo $myfile;?> </label>
	
										</div>
										
										<div class="control-group">
											<div class="controls">
											<a href="borrow_file.php" type="submit" class="btn btn-info"><i class=""></i> NO</a>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												
											<button name="save" class="btn btn-info"><i class=" icon-large"></i>YES</button>
											</div>
										</div>
									</form>
           
		<?php include('footer.php'); ?>
		</div>		
    </body>
	</html>
	<?php
	
if (isset($_POST['save'])){								
$query = mysqli_query($conn,"select * from borrow_request where tin_number = '$mytin' and status ='not_confirmed' and employee_number ='$empno'")or die(mysqli_error());
$count = mysqli_num_rows($query);
if ($count > 0){ 
		$check = 'false';
}else{ 
		 $check = 'true';
	}


if ($check=='true'){
mysqli_query($conn,"insert into borrow_request (employee_number,username,tin_number,status,time) values('$empno','$user_name','$mytin','not_confirmed',NOW())")or die(mysqli_error());
mysqli_query($conn,"insert into activity_log (username,date,action) values('$user_name',NOW(),'requested to borrow file $mytin ')")or die(mysqli_error());

?>
<script>
window.location = "borrow_file.php";
</script>  
<?php }
else{ ?>
<script>
window.location = "borrow_file.php";
</script>
 <?php } 
  } ?>
 
