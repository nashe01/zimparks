<?php include('refresh.php'); ?>
<?php include('header.php'); ?>
<?php include('../session.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('borrowedfiles_sidebar.php'); ?>

                <div class="span8" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">BORROWED FILES REPORT</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form action="" method="post">
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
									
										<thead>
										  <tr>
												<th>TIN NUMBER</th>
												<th>EMPLOYEE NUMBER</th>
												<th>BORROWED BY</th>
												<th>DATE & TIME</th>
											</tr>
										</thead>
										<tbody>

							<?php
									$user_query = mysqli_query($conn,"select * from borrow where file_status='borrowed'")or die(mysqli_error());
									while($row = mysqli_fetch_array($user_query)){
													$myempno = $row['employee_number'];
																					
										?> 
									<?php
									$user_query2 = mysqli_query($conn,"select * from staff where emplnumber='$myempno'")or die(mysqli_error());
									while($row2 = mysqli_fetch_array($user_query2)){
													$myuser =$row2['username'];
													
							
									}		
									?> 
													
												<tr>

												
												<td><?php echo $row['tin_number']; ?></td>
												<td><?php echo $row['employee_number']; ?></td>
												<td><?php echo $myuser; ?></td>
												<td><?php echo $row['date_borrow']; ?></td>
											
												
										
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