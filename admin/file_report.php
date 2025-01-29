<?php include('header.php'); ?>
<?php include('../session.php'); ?>
<?php include('navbar.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">	

								    <ul class="nav nav-pills">
										<li><a href="dashboard.php">BACK</a></li>
										<li ><a href="reports.php">STAFF REPORT</a></li>
										<li   class="active"><a href="file_report.php">FILES REPORT</a></li>
										<li><a href="borrowed_report.php">BORROWED FILES REPORT</a></li>
										<li><a href="borrowed_requests.php">BORROW REQUESTS REPORT</a></li>
										<li><a href="returned_requests.php">RETURN REQUEST REPORT</a></li>
									</ul>
						<!--  -->
						<center class="title">
						<h1>FILES LIST</h1>
						</center>
                            <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
								<div class="pull-right">
								<a href="" onclick="window.print()" class="btn btn-info"><i class="icon-print icon-large"></i> Print</a>
								</div>							
                                <thead>
                                    <tr>
											
												<th>TIN NUMBER</th>
												<th>FILE NAME</th>
												<th>TRADE NAME</th>
												<th>TYPE</th>
												<th>CATEGORY</th>
												<th>BLOCK</th>
												<th>STATUS</th>
												
										   </tr>
										</thead>
										<tbody>

							<?php
									$user_query = mysqli_query($conn,"select * from file ")or die(mysqli_error());
									while($row = mysqli_fetch_array($user_query)){
													$id = $row['file_id'];
													$mytrade=$row['trade_name'];
													
											if ($mytrade==""){
												$trade_name ="-";
												
											}else{
												$trade_name =$mytrade;
											}
	
													?>
													
												<tr>
												

												<td><?php echo $row['tin_number']; ?></td>
												<td><?php echo $row['file_name'];?></td>
												<td><?php echo $trade_name;?></td>
												<td><?php echo $row['file_type'];?></td>
												<td><?php echo $row['file_category'];?></td>
												<td><?php echo $row['block'];?></td>
												<td><?php echo $row['status']; ?></td>

												</tr>
									<?php } ?>
										 </tbody>
                            </table>
							
			
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>