<?php include('header.php'); ?>
<?php include('../session.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('userreport_sidebar.php'); ?>

                <div class="span8" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">PENDING RETURN REQUESTS</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form action="" method="post">
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
									
										<thead>
										  <tr>	
												
												<th>TIN NUMBER</th>
												<th>FILE NAME</th>
												<th>TRADE NAME</th>
												<th>DATE BORROWED</th>
												<th>DATE RETURNED</th>
											</tr>
										</thead>
										<tbody>

							<?php
									$user_query = mysqli_query($conn,"select * from borrow where employee_number='$empno' ")or die(mysqli_error());
									while($row = mysqli_fetch_array($user_query)){
												$mytinn = $row['tin_number'];

										?> 		
												<tr>

												<td><?php echo $row['tin_number']; ?></td>
												
								<?php
									$query = mysqli_query($conn,"select * from file where tin_number='$mytinn' ")or die(mysqli_error());
									while($row1 = mysqli_fetch_array($query)){
											$myfile = $row1['file_name'];
											$mytrade=$row1['trade_name'];
													
											if ($mytrade==""){
												$trade_name ="-";
												
											}else{
												$trade_name =$mytrade;
											}
									}

										?> 		
												<td><?php echo $myfile;?></td>
												<td><?php echo $trade_name; ?></td>
												<td><?php echo $row['date_borrow']; ?></td>
												<td><?php echo $row['date_return']; ?></td>

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