   <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Borrow File</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form method="post">

										<div class="control-group">
										<label>FILE REMARKS:</label>
                                          <div class="controls">
                                            <textarea name="remarks" rows="5" cols="20" ></textarea>
											
                                          </div>
                                        </div>
	
											<div class="control-group">
                                          <div class="controls">
												
												<a href="return_file.php" class="btn btn-info"><i class=" icon-large"></i> Back</a>
												&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												&nbsp;&nbsp;&nbsp;&nbsp;
												
												<button name="return" class="btn btn-info"><i class=" icon-large"></i>Return</button>
											</div>
											</div>
                                </form>
								</div>
                            </div>
                        </div>
                 
                    </div>
			
<?php		
if (isset($_POST['return'])){
$remarks = $_POST['remarks'];

$query = mysqli_query($conn,"select * from return_request where tin_number = '$tin_number' and status ='not_confirmed' and employee_number ='$empno'")or die(mysqli_error());
$count = mysqli_num_rows($query);
if ($count > 0){ 
		$check = 'false';
}else{ 
		 $check = 'true';
	}
if ($check=='true'){
mysqli_query($conn,"insert into return_request (employee_number,username,tin_number,status,time,remarks) values('$empno','$user_name','$tin_number','not_confirmed',NOW(),'$remarks')")or die(mysqli_error());
mysqli_query($conn,"insert into activity_log (username,date,action) values('$user_name',NOW(),'requested to return file $tin_number')")or die(mysqli_error());
?>
<script>
window.location = "return_file.php";
</script>  
<?php }
else{ ?>
<script>
window.location = "return_file.php";
</script>
 <?php } 
  } ?>