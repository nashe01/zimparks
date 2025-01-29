	<!-- Modal -->
		<div class="modal fade" id="<?php echo $mytin; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">SEARCH RESULTS</h4>
			</div>
			
			<?php
		$user_query = mysqli_query($conn,"select * from file where tin_number = '$mytin'")or die(mysqli_error());
		while($row = mysqli_fetch_array($user_query)){
		$myfile=$row['file_name'];
		$mystatus=$row['status'];
		}?>	
		
<?php		
		if ($mystatus =='borrowed'){
		$query = mysqli_query($conn,"select * from borrow where tin_number = '$mytin' AND file_status='borrowed'")or die(mysqli_error());
		while($row1 = mysqli_fetch_array($query)){
		$myborrowed=$row1['employee_number'];
		$mydate=$row1['date_borrow'];
						
		$query1 = mysqli_query($conn,"select * from staff where emplnumber = '$myborrowed'")or die(mysqli_error());
						while($row2 = mysqli_fetch_array($query1)){
							$myname=$row2['username'];
		}
		}

		}else
		{
			$myborrowed ='none';
			$mydate ='none';
			$myname='none';
			
		}

			?>	
			
			<div class="modal-body">
				 <form role="form" class="login_form" method="post" action="">
					<div class="form-group">
					<p>	<label >TIN NUMBER  <?php echo $mytin;?></label></p>
					<p>	<label >FILE NAME  <?php echo $myfile;?></label></p>
					<p>	<label >FILE STATUS  <?php echo $mystatus;?></label></p>
					<p>	<label >BORROWED BY  <?php echo $myborrowed;?></label></p>
					<p>	<label >EMPLOYEE NAME   <?php echo $myname;?></label></p>
					<p>	<label >DATE BORROWED   <?php echo $mydate;?></label></p>
						
					</div>
					
			<div class="modal-footer">
				<button type="button" class="btn btn-info" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
			</div>
			</div>
			
		</div>
		</div>