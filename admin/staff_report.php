<?php include('header.php'); ?>
<?php include('../session.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('staff_report_sidebar.php'); ?>

                <div class="span8" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
							
                                <div class="muted pull-left">STAFF REPORT</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form action="" method="post">
  									<table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
								<div class="pull-right">
								<a href="#" onclick="window.print()" class="btn btn-info"><i class="icon-print icon-large" ></i> Print</a>
							
								</div>
								
										<thead>
										  <tr>
												<th>Employee No</th>
												<th>First Name</th>
												<th>Last Name</th>
												<th>Username</th>
												<th>Staff Status</th>
											
						
										   </tr>
										</thead>
										<tbody>

							<?php
									$user_query = mysqli_query($conn,"select * from staff ")or die(mysqli_error());
									while($row = mysqli_fetch_array($user_query)){
													$id = $row['staff_id'];
	
													?>								
												<tr>
												<td><?php echo $row['emplnumber']; ?></td>
												<td><?php echo $row['firstname']; ?></td>
												<td><?php echo $row['lastname']; ?></td>
												<td><?php echo $row['username']; ?></td>
												<td><?php echo $row['status']; ?></td>						
				
												</tr>
												<?php } ?>
										</tbody>
									</table>
									</form>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>


                </div>
            </div>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>

</html>