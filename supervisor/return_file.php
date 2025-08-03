<?php include('refresh.php'); ?>
<?php include('header2.php'); ?>
<?php include('../session.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('return_sidebar.php'); ?>

                <div class="span8" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">File List</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form  method="get">
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
									
										<thead>
										  <tr>
												<th></th>
												<th>TIN NUMBER</th>
												<th>FILE NAME</th>
												<th>TRADE NAME</th>
												<th></th>
																						
										   </tr>
										</thead>
										<tbody>

							<?php
									$user_query = mysqli_query($conn,"select * from borrow where employee_number = '$empno' and file_status='borrowed'")or die(mysqli_error());
									while($row = mysqli_fetch_array($user_query)){
													$id = $row['borrow_id'];
													$tinno = $row['tin_number'];
													?>
											<?php
									$user_query2 = mysqli_query($conn,"select * from file where tin_number='$tinno'")or die(mysqli_error());
									while($row2 = mysqli_fetch_array($user_query2)){
													$myfilename =$row2['file_name'];
													$mytrade=$row2['trade_name'];
													
											if ($mytrade==""){
												$trade_name ="-";
												
											}else{
												$trade_name =$mytrade;
											}
							
									}		
									?> 
									
												<tr>
												<td></td>
												<td><?php echo $row['tin_number']; ?></td>
												<td><?php echo $myfilename; ?>   </td>
												<td><?php echo $trade_name; ?></td>
												<td width="40">
												<a href="complete_return.php <?php echo '?id='.$tinno ?>" name="return" class="btn btn-success" class="icon-large" >Return</a>
												</td>
																
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

