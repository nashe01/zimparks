<?php include('header.php'); ?>
<?php include('../session.php'); ?>
<?php include('navbar.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">	
			  
						<!--  -->
								    <ul class="nav nav-pills">
										<li><a href="dashboard.php">BACK</a></li>
										<li   class="active"><a href="reports.php">STAFF REPORT</a></li>
										<li><a href="file_report.php">FILES REPORT</a></li>
										<li><a href="borrowed_report.php">BORROWED FILES REPORT</a></li>
										<li><a href="borrowed_requests.php">BORROW REQUESTS REPORT</a></li>
										<li><a href="returned_requests.php">RETURN REQUEST REPORT</a></li>
										
									</ul>
						<!--  -->
						<center class="title">
						<h1>Staff List</h1>
						</center>
                            <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
								
								<div class="pull-right">
								<a href="" onclick="window.print()" class="btn btn-info"><i class="icon-print icon-large"></i> Print </a>
								</div>
								
							
                                <thead>
                                    <tr>
									    <th>EMPLOYEE NUMBER</th>                                 
                                        <th>FIRST NAME</th>                                 
                                        <th>LAST NAME</th>
										<th>USERNAME</th>
										<th>STAFF STATUS</th>
										<th>REGION</th>
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
												<td><?php echo $row['firstname']; ?></td>
												<td><?php echo $row['lastname']; ?></td>
												<td><?php echo $row['username']; ?></td>
												<td><?php echo $row['status']; ?></td>
												<td><?php echo $row['region']; ?></td>	
													
										
												</tr>
												<?php } ?>
                           

                                </tbody>
                            </table>
							
			
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>