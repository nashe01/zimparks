<?php include('header.php'); ?>
<?php include('../session.php'); ?>
<?php include('../connection/dbcon.php'); ?>

    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid" >
            <div class="row-fluid"  >
				<?php include('password_sidebar.php'); ?>

                <div class="span9" id="content">
                     <div class="row-fluid">
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Password Reset</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
								
										<thead>
										  <tr>
												<th>Employee Number</th>
												<th>Username</th>
												<th></th>
												
											
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
												<td><?php echo $row['username']; ?></td>
												<td>
											<a data-placement="left" id="edit<?php echo $id; ?>" data-toggle="modal" href="#<?php echo $id; ?>"  class="btn btn-success"><i class="icon-large">Reset</i>
											</a> 
											<?php include('password_r.php'); ?>	
												</td>
												</tr>
												
												<?php } ?>
										</tbody>
									</table>
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

