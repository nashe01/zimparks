<?php $tin_number=$_GET['id'];
		$mytin = $tin_number;
?>
<?php include('../connection/dbcon.php'); ?>
<?php include('header2.php'); ?>
<?php include('../session.php'); ?>

<?php
									$user_query = mysqli_query($conn,"select * from file where tin_number = '$mytin'")or die(mysqli_error());
									while($row = mysqli_fetch_array($user_query)){
													$myfile=$row['file_name'];
									}	?>	
	
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
			
                <div class="span9" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div  id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><a id="return" data-placement="left" title="Click to Return" href="assesment.php"><i class="icon-arrow-left icon-large"></i> Back</a></div>
													                         
						    </div>
                            <div class="block-content collapse in">						
						<form id="add_member" class="form-signin" method="post">
						<div class="span4">
						<label class="control-label" for="" color="blue">TIN NUMBER:  <?php echo $mytin;?></label>
						<label class="control-label" for="" color="blue">FILE NAME:  <?php echo $myfile;?> </label>	
						<?php

								$random_number = intval( "0" . rand(1,9) . rand(0,9) . rand(0,9) . rand(0,9) . rand(0,9) ); // random(ish) 5 digit int

								$random_string = chr(rand(65,90)) . chr(rand(65,90)) . chr(rand(65,90)) . chr(rand(65,90)) . chr(rand(65,90)); // random(ish) 5 character string
								
											?>
		
						<label class="control-label" for="" color="blue">ASSESMENT TYPE: </label>
                                <input  name="assess_type"   type="radio"  value="amt" checked ="true">AMT<br>
								<input  name="assess_type"   type="radio"  value="half_year_return">Half Year Return<br>
								<input  name="assess_type"   type="radio"  value="Special">Special<br><br>
								
						<label class="control-label" for="" color="blue"><strong>ASSESMENT CODE: </strong></label>
						<input class="input focused" name="assess_code" id="focusedInput" type="text" placeholder = "Assesment Code" value ="<?php echo $random_string.'-'.$random_number;?>" readonly>							
                           </div>
						<div class="span4">
						<label class="control-label" for="" color="blue">INCOME: </label>
						<input class="input focused" name="income" id="focusedInput" onkeydown='return (event.which >= 48 && event.which <= 57) 
												|| event.which == 8 || event.which == 46' type="text"   placeholder = "Income" required>	
						<label class="control-label" for="" color="blue">TAX AMOUNT: </label>
						<input class="input focused" name="tax" id="focusedInput" onkeydown='return (event.which >= 48 && event.which <= 57) 
												|| event.which == 8 || event.which == 46' type="text"   placeholder = "Tax" required>	
						<label class="control-label" for="" color="blue">INTEREST: </label>
						<input class="input focused" name="interest" id="focusedInput" onkeydown='return (event.which >= 48 && event.which <= 57) 
												|| event.which == 8 || event.which == 46' type="text"   placeholder = "Interest" required>	
						<label class="control-label" for="" color="blue">AMOUNT: </label>
						<input class="input focused" name="amount" id="focusedInput" onkeydown='return (event.which >= 48 && event.which <= 57) 
												|| event.which == 8 || event.which == 46' type="text"   placeholder = "Amount" required>	
						
						</div>
						<div class="span4">
						<label class="control-label" for="" color="blue">YEAR OF INCOME: </label>
						<input class="input focused" name="income_year" id="focusedInput" onkeydown='return (event.which >= 48 && event.which <= 57) 
												|| event.which == 8 || event.which == 46' type="text"  maxlength ="4" placeholder = "Year Of Income" required>
						<label class="control-label" for="" color="blue">RECEIVE DATE: </label>
						<input class="input focused" name="receive_date" id="focusedInput" type="date" placeholder = "Receive Date" required>	
										
						<label class="control-label" for="" color="blue">DUE DATE: </label>
						<input class="input focused" name="due_date" id="focusedInput"  type="date" placeholder = "Due Date" required>	
						<br>
						<button name="save" class="btn btn-info"><i class=" icon-large"></i>YES</button>
								
										</div>
						</form>						
			
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                </div>
            </div>
		
        </div>
		<?php include('script.php'); ?>
    </body>	
</html>

	<?php
	
if (isset($_POST['save'])){	
$assess_code = $_POST['assess_code'];
$assess_type=$_POST['assess_type'];
$income =$_POST['income'];
$tax=$_POST['tax'];
$interest =$_POST['interest'];
$amount= $_POST['amount'];					
$income_year =$_POST['income_year'];		
$receive_date =$_POST['receive_date'];
$due_date =$_POST['due_date'];
mysqli_query($conn,"insert into assesment (tin_number,file_name,assess_code,assess_type,income,tax,interest,amount,date,income_year,receive_date,due_date,status) values('$mytin','$myfile','$assess_code','$assess_type','$income','$tax','$interest','$amount',NOW(),'$income_year','$receive_date','$due_date','not paid')")or die(mysqli_error());
mysqli_query($conn,"insert into activity_log (username,date,action) values('$user_name',NOW(),'Added assesment for $mytin with assess_code $assess_code ')")or die(mysqli_error());
?>
<script>
window.location = "assesment.php";
</script>  
<?php }
  ?>
									</form>
           
		<?php include('footer.php'); ?>
		</div>		
    </body>
	</html>
	<?php
	
if (isset($_POST['save'])){	
$assess_code = $_POST['assess_code'];
$assess_type=$_POST['assess_type'];
$income =$_POST['income'];
$tax=$_POST['tax'];
$interest =$_POST['interest'];
$amount= $_POST['amount'];					
$income_year =$_POST['income_year'];		
$receive_date =$_POST['receive_date'];
$due_date =$_POST['due_date'];
mysqli_query($conn,"insert into assesment (tin_number,file_name,assess_code,assess_type,income,tax,interest,amount,date,income_year,receive_date,due_date,status) values('$mytin','$myfile','$assess_code','$assess_type','$income','$tax','$interest','$amount',NOW(),'$income_year','$receive_date','$due_date','not paid')")or die(mysqli_error());
mysqli_query($conn,"insert into activity_log (username,date,action) values('$user_name',NOW(),'Added assesment for $mytin with assess_code $assess_code ')")or die(mysqli_error());
?>
<script>
window.location = "assesment.php";
</script>  
<?php }
  ?>
 
