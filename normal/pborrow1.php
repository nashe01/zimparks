<?php $myid1=$_GET['id'];
		
?>
<?php include('../connection/dbcon.php'); ?>
<?php include('header2.php'); ?>
<?php include('../session.php'); ?>
<?php include('navbar.php'); ?>
<?php
	$user_query = mysqli_query($conn,"select * from borrow_request where not_id = '$myid1'")or die(mysqli_error());
									while($row = mysqli_fetch_array($user_query)){
													$mytin=$row['tin_number'];
													$mydate=$row['time'];
									}	?>	
	
<?php
	$query = mysqli_query($conn,"select * from file where tin_number = '$mytin'")or die(mysqli_error());
									while($row1= mysqli_fetch_array($query)){
													$myfile=$row1['file_name'];
													
									}	?>		
									
		
	
	<br>
	<br>
	<br>

    <body id="login">
    <div class="container">
		
          												
								          <form id="change_password" class="form-signin" method="post">
										 <h3 class="form-signin-heading"><i class=""></i> CANCEL BORROW REQUEST? </h3>
										 <p>TIN NUMBER: <?php echo $mytin;?></p>
										 <p>FILE NAME: <?php echo $myfile;?></p>
										 <p>DATE & TIME BORROWED: <?php echo $mydate;?></p>
										 
										
											<a href="pending_borrow.php" type="submit" class="btn btn-info"><i class=""></i> No</a>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												
											<button name="save" class="btn btn-info"><i class=" icon-large"></i>Yes</button>
											
									</form>
           
		<?php include('footer.php'); ?>
		</div>		
    </body>
	</html>
	<?php
	
if (isset($_POST['save'])){								
mysqli_query($conn,"UPDATE borrow_request SET status = 'cancelled' where not_id ='$myid1'")or die(mysqli_error());
?>
<script>
window.location = "pending_borrow.php";
</script>
<?php

}
?>  
