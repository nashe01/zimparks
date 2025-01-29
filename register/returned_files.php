<?php include('refresh.php'); ?>
<?php include('header.php'); ?>
<?php include('../session.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('returnedfiles_sidebar.php'); ?>

                <div class="span8" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">FREE FILES REPORT</div>
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
												<th>FILE TYPE</th>
												<th>CATEGORY</th>
											</tr>
										</thead>
										<tbody>

						
									<?php
									$user_query = mysqli_query($conn,"select * from file where status='returned'")or die(mysqli_error());
									while($row = mysqli_fetch_array($user_query)){
									$mytrade=$row['trade_name'];
													
											if ($mytrade==""){
												$trade_name ="-";
												
											}else{
												$trade_name =$mytrade;
											}			
													
									?> 
													
												<tr>												
												<td><?php echo $row['tin_number']; ?></td>
												<td><?php echo $row['file_name']; ?></td>
												<td><?php echo $trade_name; ?></td>
												<td><?php echo $row['file_type']; ?></td>
												<td><?php echo $row['file_category']; ?></td>
												
												
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