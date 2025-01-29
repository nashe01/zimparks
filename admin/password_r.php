	<!-- Modal -->
		<div class="modal fade" id="<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
		<?php
		$user = mysqli_query($conn,"select * from staff where staff_id = '$id'")or die(mysqli_error());
		while($row1 = mysqli_fetch_array($user)){
		$emplnumber=$row1['emplnumber'];
		$username=$row1['username'];
		}?>	
			<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">RESET PASSWORD FOR <?php echo $username; ?></h4>
			</div>
			
			
			<div class="modal-body">
				 <form  role="form" class="login_form" method="post" action="reset.php">
					<div class="form-group">
					<input type="hidden" id="" name="myid" value="<?php echo $id; ?>" >
					<p>	<label >EMPLOYEE NUMBER: <?php echo $emplnumber;?>  </label></p>
					
					<br>
					<p>	<label >USERNAME: <?php echo $username; ?>  </label></p>

					
					</div>
					<br><br>
					<button  class="btn btn-success" class="fa fa-save"></i> Reset</button>					
			
					
					</form>
			
			</div>
					
			<div class="modal-footer">
			
				
				<button type="button" class="btn btn-info" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
			</div>
			</div>
			
		</div>
		</div>