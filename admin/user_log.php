<?php include('header.php'); ?>
<?php include('../session.php'); ?>

    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid" >
            <div class="row-fluid"  >
				<?php include('user_log_sidebar.php'); ?>

                <div class="span9" id="content">
                     <div class="row-fluid">
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Users Activity</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
								
										<thead>
										  <tr>
												<th>Username</th>
												<th>Date and Time</th>
												<th>Action</th>
												
											
										   </tr>
										</thead>
										<tbody>
													<?php
													$user_query = mysqli_query($conn,"select * from activity_log ORDER BY activity_log_id DESC ")or die(mysqli_error());
													while($row = mysqli_fetch_array($user_query)){
													$id = $row['activity_log_id'];
													?>
									
												<tr>
											
												<td><?php echo $row['username']; ?></td>
												<td><?php echo $row['date']; ?></td>
												<td><?php echo $row['action']; ?></td>
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