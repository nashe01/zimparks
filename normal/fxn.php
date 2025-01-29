<?php
									function checktin(){
									$query = mysqli_query($conn,"select * from borrow_request where tin_number = '$mytin' and status ='not_confirmed' and employee_number ='$empno'")or die(mysqli_error());
									$count = mysqli_num_rows($query);
									if ($count > 0){ ?>
									<?php	$check = 'true';
									}else{
										$check = 'false';
									}}?>
									<?php
									function display(){
									if ($check ='true'){
										?><a href="borrow1.php <?php echo '?id='.$mytin ?>" name="return" class="btn btn-success" class="icon-large" >Borrow</a><?php	
									}else{
										?><a  name="" class="btn btn-success" class="icon-large" >Requested</a><?php
									}
								
									}?>