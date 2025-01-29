<?php include('refresh.php'); ?>
<?php include('header2.php'); ?>
<?php include('../session.php'); ?>
    <body>
	
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('search_sidebar.php'); ?>

                <div class="span8" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">SEARCH FILE?</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span10">
								<form action="" method="post">
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
									$user1 = mysqli_query($conn,"select * from file ")or die(mysqli_error());
									while($row = mysqli_fetch_array($user1)){
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
												

											<td width="40">
											<a data-placement="left" title="Click to Edit" id="edit<?php echo $id; ?>" data-toggle="modal" href="#<?php echo $mytin; ?>"  class="btn btn-success"><i class="fa fa-pencil"></i> Search
											</a> 
											<?php include('search_results.php') ?>	
												</td>
																
												</tr>
											
												<?php }  ?>  
												
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
