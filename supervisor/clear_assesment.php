<?php include('refresh.php'); ?>
<?php include('header2.php'); ?>
<?php include('../session.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				 <ul class="nav nav-pills">
										<li><a href="dashboard.php">BACK</a></li>
										<li   ><a href="assesment.php">CREATE ASSESMENT</a></li>
										<li class="active"><a href="clear_assesment.php">CLEAR ASSESMENT</a></li>
										<li><a href="assess_report.php">ASSESMENT REPORT</a></li>
									</ul>

                <div class="span12" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">ASSESMENT LIST</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form  method="get">
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
									
										 <thead>
										
										  <tr>
												
												<th>ASSESSMENT CODE</th>
												<th>ASSESSMENT TYPE</th>
												<th>TIN NUMBER</th>
												<th>FILE NAME</th>
												<th>AMOUNT</th>
												<th>RECEIVE DATE</th>
												<th> DUE DATE</th>
												<th>DATE CREATED</th>
												<th></th>
											
										   </tr>
										</thead>
										<tbody>
										<?php
									$user_query = mysqli_query($conn,"select * from assesment where status = 'not paid' ")or die(mysqli_error());
									while($row = mysqli_fetch_array($user_query)){
													$mycode=$row['assess_code'];
													$mytype=$row['assess_type'];
													$mytin=$row['tin_number'];
													$myfile=$row['file_name'];
													$myamount=$row['amount'];
													$myreceive=$row['receive_date'];
													$mydue=$row['due_date'];
													$mydate=$row['date'];
													
										
									?>
												<tr>
											
												<td><?php echo $mycode; ?></td>
												<td><?php echo $mytype; ?></td>
												<td><?php echo $mytin; ?></td>
												<td><?php echo $myfile; ?></td>
												<td><?php echo $myamount; ?></td>
												<td><?php echo $myreceive; ?></td>
												<td><?php echo $mydue; ?></td>
												<td><?php echo $mydate; ?></td>
												<td> <a href="clear1.php <?php echo '?id='.$mycode ?>" name="return" class="btn btn-success" class="icon-large" >Clear</a></td>
		
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

