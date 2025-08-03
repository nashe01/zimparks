<?php include('header2.php'); ?>
<?php include('../session.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				 <ul class="nav nav-pills">
										<li><a href="dashboard.php">BACK</a></li>
										<li   class="active"><a href="assesment.php">CREATE ASSESMENT</a></li>
										<li><a href="clear_assesment.php">CLEAR ASSESMENT</a></li>
										<li><a href="assess_report.php">ASSESMENT REPORT</a></li>
									</ul>

                <div class="span12" id="">
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
												
												<th>TIN NUMBER</th>
												<th>FILE NAME</th>
												<th>TRADE NAME</th>
												<th></th>
											
										   </tr>
										</thead>
										<tbody>
										<?php
									$user_query = mysqli_query($conn,"select * from file where status = 'returned' and region ='$staff_region'")or die(mysqli_error());
									while($row = mysqli_fetch_array($user_query)){
													$myid=$row['file_id'];
													$mytin=$row['tin_number'];
													$myfile=$row['file_name'];
													
													$mytrade=$row['trade_name'];
													
											if ($mytrade==""){
												$trade_name ="-";
												
											}else{
												$trade_name =$mytrade;
											}
									?>
												<tr>
											
												<td><?php echo $mytin; ?></td>
												<td><?php echo $myfile; ?></td>
												<td><?php echo $trade_name; ?></td>
												<td> <a href="assess1.php <?php echo '?id='.$mytin ?>" name="return" class="btn btn-success" class="icon-large" >Create</a></td>
		
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

