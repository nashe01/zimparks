<?php $code=$_GET['id'];
		$mycode = $code;
?>
<?php include('../connection/dbcon.php'); ?>
<?php include('header2.php'); ?>
<?php include('../session.php'); ?>
<?php include('navbar.php'); ?>
<?php
									$user_query = mysqli_query($conn,"select * from assesment where assess_code = '$mycode'")or die(mysqli_error());
									while($row = mysqli_fetch_array($user_query)){
													$mytype=$row['assess_type'];
													$mytin=$row['tin_number'];
													$myfile=$row['file_name'];
													$myamount=$row['amount'];
													$myreceive=$row['receive_date'];
													$mydue=$row['due_date'];
													$mydate=$row['date'];
													
									}	?>	
	<br>
	<br>
	<br>

    <body id="login">
    <div class="container">
		
          												
								          <form id="change_password" class="form-signin" method="post">
										 <h3 class="form-signin-heading"><i class=""></i>  CLEAR ASSESMENT </h3>
										<div class="control-group">
											<label class="control-label" for="" color="blue">TIN NUMBER:  <?php echo $mytin;?></label>
										</div>
										<div class="control-group">
											<label class="control-label" for="" color="blue">FILE NAME:  <?php echo $myfile;?> </label>	
										</div>
										<div class="control-group">
											<label class="control-label" for="" color="blue">ASSESMENT CODE: <?php echo $mycode;?>  </label>									
										</div>
										<div class="control-group">
											<label class="control-label" for="" color="blue">ASSESMENT TYPE: <?php echo $mytype;?></label>	
										</div>
										<div class="control-group">
											<label class="control-label" for="" color="blue">RECEIVE DATE: <?php echo $myreceive;?></label>	
										</div>
										<div class="control-group">
											<label class="control-label" for="" color="blue">AMOUNT: <?php echo $myamount;?></label>	
										</div>
										<div class="control-group">
											<label class="control-label" for="" color="blue">DUE DATE: <?php echo $mydue;?></label>	
										</div>
										<div class="control-group">
											<label class="control-label" for="" color="blue">DATE CREATED: <?php echo $mydate;?></label>	
										</div>
										<div class="control-group">
											<div class="controls">
											<a href="clear_assesment.php" type="submit" class="btn btn-info"><i class=""></i> NO</a>
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
$assess_code = $_POST['assess_code'];
$amount= $_POST['amount'];							
mysqli_query($conn,"update assesment set status ='paid',date_paid =NOW() where assess_code = '$mycode'")or die(mysqli_error());
mysqli_query($conn,"insert into activity_log (username,date,action) values('$user_name',NOW(),'Cleared assesment for $mytin with assess code $mycode ')")or die(mysqli_error());
?>
<script>
window.location = "clear_assesment.php";
</script>  
<?php }
  ?>
 
