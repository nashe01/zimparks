<?php include('header.php'); ?>
<?php include('../session.php'); ?>

    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid" >
            <div class="row-fluid"  >
				<?php include('online_sidebar.php'); ?>

                <div class="span9" id="content">
                     <div class="row-fluid">
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Online Users</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
								
										<thead>
										  <tr>
												<th>Username</th>
												<th>Employee Number</th>
												<th>Status</th>
												
											
										   </tr>
										</thead>
										<tbody>
													<?php
													$user_query = mysqli_query($conn,"select * from staff where online='yes' ")or die(mysqli_error());
													while($row = mysqli_fetch_array($user_query)){
													$id = $row['staff_id'];
													?>
									
												<tr>
											
												<td><?php echo $row['username']; ?></td>
												<td><?php echo $row['emplnumber']; ?></td>
												<td><?php echo $row['status']; ?></td>
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